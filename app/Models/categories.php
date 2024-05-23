<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    // count proiduct 
    public function getProductCountByCategory($categoryId)
    {
        return DB::table('products')
            ->where('category_id', $categoryId)
            ->count();
    }
     // count proiduct end
    // public function getCategoriesAll(){
    //     $list = DB::table($this->table)->orderBy('id', 'desc')->get();
    //     return $list;
    // } 
    // public function getCategoriesLimit(){
    //     $list = DB::table($this->table)->orderBy('id','desc')->limit(5)->get();
    //     return $list;
    // } 
    public function getCategoriesWithProductCountLimit($limit = 5)
    {
        return $this->orderBy('id', 'desc')
            ->limit($limit)
            ->get()
            ->map(function ($category) {
                $category->product_count = $this->getProductCountByCategory($category->id);
                return $category;
            });
    }
    public function getCategoriesWithProductCountAll()
    {
        return $this->orderBy('id', 'desc')
            ->get()
            ->map(function ($category) {
                $category->product_count = $this->getProductCountByCategory($category->id);
                return $category;
            });
    }
    public function products()
    {
        return $this->hasMany(products::class);
    }

}