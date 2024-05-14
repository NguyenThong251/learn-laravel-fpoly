<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public $data =[];
    public function index(){
        $this ->data['title'] = 'Blog';
        return view('clients.blog',$this->data);
    }
}