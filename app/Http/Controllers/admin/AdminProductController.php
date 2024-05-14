<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index(){
        return view('admin.product');
       }
    public function addproduct(){
        return view('admin.addproduct');
       }
}