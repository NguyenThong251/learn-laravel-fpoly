<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    public function index(){
        return view('admin.role');
       }
    public function addrole(){
        return view('admin.addrole');
       }
}