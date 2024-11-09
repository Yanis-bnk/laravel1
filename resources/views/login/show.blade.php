@extends('layouts.master')
@section('title')
  Connexion  
@endsection
@section('main')
<form action="">
  <div class="container w-75 my-2 bg-light p-5">
  <h3> Connexion </h3>
  <div class="mb-3">
    <label for="" class="form-label">login</label>
    <input type="text" class="form-control" name="login">
  </div>
    <div class="mb-3">  
     <label for="" class="form-label">Password</label>
      <input type="text" class="form-control" name="password">
    </div>
    <div class="d-grid">
   <button class="btn btn-primary">Se connecter</button>
  </div>
</div>
</form>
@endsection