@extends('layouts/main')

@section('content')

<h1>Lista Cantine</h1>

<div class="_container">

    @foreach ($wineries as $winery)
    
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$winery->name}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$winery->address}} - {{ $winery->area }}</h6>
          <div>Provincia: {{ $winery->district }} - Regione: {{$winery->region}} </div>
          <div>Nazione: {{ $winery->nation }} </div>
          <div>Telefono: {{ $winery->phone }} </div>
          <div>Email: {{ $winery->email }} </div>
        </div>
    </div>
    
    @endforeach
    <a href="{{route('home')}}" class="card-link">Vai ai vini</a>
    <a href="{{route('vine')}}" class="card-link">Vai ai vitigni</a>
</div>


    
@endsection