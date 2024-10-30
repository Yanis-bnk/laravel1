<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class infosController extends Controller
{
    public function index(){
        return view('infos');
    }
}
