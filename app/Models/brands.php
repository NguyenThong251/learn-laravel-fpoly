<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class brands extends Model
{ 
    protected $table = 'brands';
    use HasFactory;
    public function brandsAll(){
        return DB::table($this->table)->orderBy('id','desc')->get();
    }
    public function products()
    {
        return $this->hasMany(products::class);
    }
}