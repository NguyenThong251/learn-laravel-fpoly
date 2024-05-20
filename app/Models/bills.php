<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bills extends Model
{
    use HasFactory;
    
    public function carts()
    {
        return $this->hasMany(carts::class);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function vouchers()
    {
        return $this->belongsTo(Vouchers::class)->withDefault(); // Sử dụng withDefault() để tránh lỗi khi voucher_id là null
    }

    public function payments()
    {
        return $this->belongsTo(Payments::class);
    }

    public function ships()
    {
        return $this->belongsTo(Ships::class);
    }
}