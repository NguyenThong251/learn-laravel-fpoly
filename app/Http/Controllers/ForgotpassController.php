<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForgotpassController extends Controller
{
    public $data =[];
    public function index(){
        // $title = "Trang chủ";
        $this -> data['title']='Forgotpass';
        return view('clients.forgotpass',$this ->data);
    }
}