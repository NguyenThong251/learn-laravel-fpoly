<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminBlogController extends Controller
{
    public function index(){
        return view('admin.blog');
       }
    public function addblog(){
        return view('admin.addblog');
       }
}