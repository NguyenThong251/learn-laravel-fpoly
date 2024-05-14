<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index(){
        return view('admin.order');
       }
    // public function addorder(){
    //     return view('admin.addorder');
    //    }
}