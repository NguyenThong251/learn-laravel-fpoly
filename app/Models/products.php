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
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->select('products.*', 'categories.name as category_name')
        ->orderBy('products.id', 'desc')->get();
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