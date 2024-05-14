<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewcartController extends Controller
{
    public $data =[];
    public function index(){
        $this ->data['title'] = 'Cart';
        return view('clients.viewcart',$this->data);
    }
}