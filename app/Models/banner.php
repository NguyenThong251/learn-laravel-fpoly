<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class banner extends Model
{
    protected $table = 'banners';
    public function getBanner(){
        return DB::table($this->table)->orderBy('id','desc')->get();
    }
    use HasFactory;
}