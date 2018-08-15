@extends('layouts.master', ['title'=>'Artisans'])

@section('content')

    <div class="container">
    <h1 class="title text-center">List of <strong>Dynamique number {{-- {{$artisans->count()} --}}</strong> artisans all over the world</h1>
        <div class="row">    
            {{-- @foreach ($artisans as $artisan )
                
                <div class="col-md-1 col-sm-3 col-xs-4 text-center spaced">
                <a href="{{ $artisan->link}}"> 
                <img src="{{ $artisan->img?$artisan->img :"https://secure.gravatar.com/avatar/427ae53bce375092f88b22533d3d21c5?s=70&r=g" }}" alt="" width="70">
                    </a>
                </div>
            @endforeach --}}
        </div>
    </div>
    
@stop