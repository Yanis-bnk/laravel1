@extends('layouts.master')
@section('title')
 Un profile
@endsection
@section('main')
   <div class="row my-6">
    @foreach ($profiles as $profile)
    <x-profile-card :profile="$profile"/>
    @endforeach
   </div>
        
  
</table>
{{ $profiles->links()}}

@endsection