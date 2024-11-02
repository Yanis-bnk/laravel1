<?php

namespace App\Http\Controllers;

use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class profileController extends Controller
{
    public function index(){
        $profiles= profile::paginate(8);
        return  view('profiles.index', compact('profiles'));
    }
    public function show(Request $request){
        $id=(int)$request->id;
        $profile=profile::findOrfail($id);
       
        return view('profile.show');
    }
    public function create(){
        return view('profile.create');
    }
    public function store(Request $request){
        $name=$request->name;
        $password=$request->password;
        $email=$request->email;
        $bio=$request->bio;
        $name=$request->name;
        //insertion
        profile::create([
            'name'=>$name,
            'email'=>$email,
            'password'=>$password,
            'bio'=>$bio,
        ]);
      return redirect()->route('profiles.index');
    }
}
