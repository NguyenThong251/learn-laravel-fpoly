<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public $data =[];
    public function index(){
        $this ->data['title'] = 'Wishlit';
        return view('clients.wishlist',$this->data);
    }
}