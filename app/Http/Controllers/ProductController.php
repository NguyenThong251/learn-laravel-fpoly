<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $data = [];
    public function index(){
        $this->data['title'] ='Shop';
        return view('clients.shop', $this->data);
    }
}