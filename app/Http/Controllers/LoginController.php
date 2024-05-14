<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public $data =[];
    public function index(){
        // $title = "Trang chủ";
        $this -> data['title']='Login';
        return view('clients.login',$this ->data);
    }
}