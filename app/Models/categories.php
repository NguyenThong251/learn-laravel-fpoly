<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class categories extends Model
{
    use HasFactory;
    protected $table = 'categories';
    public function getCategoriesLimit(){
        $list = DB::table($this->table)->where('id', '<', 5)->limit(5)->get();
        // dd($list);
        return $list;
    } 
    // protected $table = 'categories';   
    // protected $primaryKey = 'id';
    public function products()
    {
        return $this->hasMany(products::class);
    }

}