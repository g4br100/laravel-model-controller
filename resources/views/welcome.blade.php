@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Welcome Page</h1>
    <div class="row g-4">
        <div class="col d-flex flex-wrap">
                @foreach ($movies as $movie)

                <div class="card m-3" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$movie->original_title}}</h6>
                        <p class="card-text">Nationality: {{$movie->nationality}}</p>
                        <p class="card-text">Date: {{$movie->date}} </p>
                        <p class="card-text">Vote: {{$movie->vote}}</p>
                    </div>
                  </div>
                    
                @endforeach
        </div>
    </div>

</div>
@endsection