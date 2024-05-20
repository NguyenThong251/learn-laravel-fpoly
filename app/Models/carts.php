<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    use HasFactory;
    public function product()
    {
        return $this->belongsTo(products::class);
    }

    public function bill()
    {
        return $this->belongsTo(bills::class);
    }
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}