<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public $data =[];
    public function index(){
        $this ->data['title'] = 'Checout';
        return view('clients.checkout',$this->data);
    }
}