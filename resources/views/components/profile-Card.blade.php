
<div class="col-sm-3">

    <img class="card-img-top" src="https://picsum.photos/200/300" alt="image">
    <div class="card-body">
        <h5 class="card-title">{{$profile->name}}</h5>
        <p class="card-text">{{$profile->bio}}</p>
       
            <a href="{{route('profiles.show',$profile->id)}}" class="btn btn-primary">Afficher plus</a>
        
    </div>
</div>