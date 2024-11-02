@extends('layouts.master')
@section('title')
 ajouter
@endsection
@section('main')
<form method="POST" action="{{route('store')}}">
    @csrf 
    <div class="mb-3">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Name</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="name">
          </div>
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="mb-3 ">
        <label for="exampleInputPassword1" class="form-label">Bio</label>
        <textarea name="bio" id="" cols="15" rows="5" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
@endsection