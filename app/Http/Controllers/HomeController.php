<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
     public $data =[];
    public function index(){
        // $title = "Trang chủ";
        $this -> data['title']='Home';
        return view('clients.home',$this ->data);
        // return view('clients.home',compact('title'));
    }
}