<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignupController extends Controller
{
    public $data =[];
    public function index(){
        // $title = "Trang chủ";
        $this -> data['title']='Signup';
        return view('clients.signup',$this ->data);
    }
}