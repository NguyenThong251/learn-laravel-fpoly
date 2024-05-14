<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index(){
        return view('admin.user');
       }
    public function adduser(){
        return view('admin.adduser');
       }
}