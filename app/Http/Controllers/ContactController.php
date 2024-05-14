<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
     public $data =[];
    public function index(){
        $this ->data['title'] = 'Contact';
        return view('clients.contact',$this->data);
    }
}