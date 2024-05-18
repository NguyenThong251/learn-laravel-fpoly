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
}