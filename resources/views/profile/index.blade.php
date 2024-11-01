@extends('layouts.master')
@section('title')
 Un profile
@endsection
@section('main')
<table class="table table-striped table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Bio</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)
            <tr>
                <td>{{ $profile->id }}</td>
                <td>{{ $profile->name }}</td>
                <td>{{ $profile->email }}</td>
                <td>{{Str::limit($profile->bio, 100) }}</td> <!-- Limiter la bio à 100 caractères -->
                <td><a href="{{route('profiles.show',$profile->id)}}" class="btn btn-primary">Afficher</a></td>           
             </tr>
        @endforeach
    </tbody>
</table>
{{ $profiles->links()}}
@endsection