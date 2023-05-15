@extends('layouts/main')

@section('content')

<h1>Lista Vini</h1>

<div class="_container">

    @foreach ($wines as $wine)
    
    <div class="card">
        <div class="card-body">
          <h5 class="card-title">{{$wine->name}}</h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">{{$wine->winery}} - {{ $wine->year }}</h6>
          <div>Colore: {{ $wine->color }} - Tipo: {{$wine->type}} </div>
          <div>Gradazione: {{ $wine->strenght }} %</div>
          <div>Estratto: {{ $wine->extract }} g/l</div>
          <div>Acidità: {{ $wine->acidity }} g/l</div>
        </div>
    </div>
    
    @endforeach
    <a href="{{route('winery')}}" class="card-link">Vai alle cantine</a>
    <a href="{{route('vine')}}" class="card-link">Vai ai vitigni</a>
</div>


    
@endsection