<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vouchers extends Model
{
    use HasFactory;
    public function bills()
    {
        return $this->hasMany(Bills::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}