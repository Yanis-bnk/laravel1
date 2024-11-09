<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class profileController extends Controller
{
    public function index(){
        $profiles= profile::paginate(8);
        return  view('profiles.index', compact('profiles'));
    }
    public function show(profile $profile){
        
       
        return view('profiles.show');
    }
    public function create(){
        return view('profiles.create');
    }
    public function store(ProfileRequest $request){
        //$name=$request->name;
        //$password=$request->password;
        //$email=$request->email;
        //$bio=$request->bio;
        //$name=$request->name;
        //insertion
        $formFileds=$request->validated();
        $password=$request->password;
        
         $formFileds['password']=Hash::make($request->password);
        

        profile::create($formFileds);
            //'name'=>$name,
            //'email'=>$email,
            //'password'=>$password,
            //'bio'=>$bio,
        
      return redirect()->route('profiles.index')->with('success','votre compte a ete creer avec succes');
    }
    
}
