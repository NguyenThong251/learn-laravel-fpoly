<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public $data =[];
    public function index(){
        $this ->data['title'] = 'About';
        return view('clients.about',$this->data);
    }
}