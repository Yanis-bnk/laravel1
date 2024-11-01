<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class profileController extends Controller
{
    public function index(){
        $profiles= profile::paginate(5);
        return  view('profile.index', compact('profiles'));
    }
    public function show(Request $request){
        $id=(int)$request->id;
        $profile=profile::findOrfail($id);
       
        return view('profile.show');
    }
}
