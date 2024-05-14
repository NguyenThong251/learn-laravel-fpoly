<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PassnewController extends Controller
{ 
    public $data =[];
    public function index(){
        // $title = "Trang chủ";
        $this -> data['title']='Passnew';
        return view('clients.passnew',$this ->data);
    }
}