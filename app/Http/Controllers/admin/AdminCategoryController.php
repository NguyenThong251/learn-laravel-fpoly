<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCategoryController extends Controller
{
    public function index(){
        return view('admin.category');
       }
    public function addcategory(){
        return view('admin.addcategory');
       }
}