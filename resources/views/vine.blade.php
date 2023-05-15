@extends('layouts/main')

@section('content')

<h1>Lista Vitigni</h1>

<div class="_container">

    @foreach ($vines as $vine)
    
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$vine->name}}</h5>
          <p class="card-subtitle mb-2 text-body-secondary">{{$vine->description}}</p>
        </div>
    </div>
    
    @endforeach
    <a href="{{route('winery')}}" class="card-link">Vai alle cantine</a>
    <a href="{{route('home')}}" class="card-link">Vai ai vini</a>
</div>


    
@endsection