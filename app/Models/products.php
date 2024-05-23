<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
// use DB;

class products extends Model
{
    use HasFactory;
    protected $table = 'products';
    public function getAllProducts(){
        $list = DB::table($this->table)
        ->where('hide', '=', 0)
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->select('products.*', 'categories.name as category_name')
        ->orderBy('products.id', 'desc')->paginate(15);
        // dd($list);
        return $list;
    }

    public function getProductById($id) {
        $product = DB::table($this->table)
            ->where('products.id', $id)
            ->where('products.hide', '=', 0)
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select(
                'products.*', 
                'categories.name as category_name',
                'brands.brand_name as brand_name'
            )
            ->first();
        return $product;
    }
    // san phẩm liên quan 
    public function getRelatedProducts($categoryId, $productId)
    {
        $relatedProducts = DB::table($this->table)
            ->where('category_id', $categoryId)
            ->where('products.id', '!=', $productId)
            ->where('hide', '=', 0)
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select(
                'products.*', 
                'categories.name as category_name',
                'brands.brand_name as brand_name'
            )
            ->orderBy('products.created_at', 'desc')
            ->take(4) 
            ->get();
        return $relatedProducts;
    }
    // count products
    public function getProductCountByCategory(){
            return DB::table($this->table)->where('hide', '=', 0)->count();
    }
    //product search
    public function getProductsSearch($search){
        $list = DB::table($this->table)
        ->select('products.*', 'categories.name as category_name')
            ->leftJoin('categories', 'products.category_id', '=', 'categories.id')
            ->where('hide', '=', 0)
            ->where(function ($query) use ($search) {
                $query->where('products.name', 'LIKE', "%{$search}%")
                      ->orWhere('products.description', 'LIKE', "%{$search}%");
            })
            ->orderBy('products.id', 'desc')
            ->paginate(15);
        // dd($list);
        
        return $list;
    }
    public function categories()
    {
        return $this->belongsTo(categories::class);
    }
    public function brands(){
        return $this->belongsTo(brands::class);
    }
    public function galleries(){
        return $this->belongsTo(galleries::class);
    }
    public function feedbacks()
    {
        return $this->hasMany(feedbacks::class);
    }
    public function carts()
    {
        return $this->hasMany(carts::class);
    }
}