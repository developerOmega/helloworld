@extends('layouts.app')

@section('title', 'Persons')

@section('content')
  
  <div class="head">
    <h2> Persons </h2>
    <a href="{{ route('persons.create') }}"> New person </a>
  </div class="head">

  <div class="content">
    @forelse ($persons as $person)
      <div class="card">
        <div class="item">
          <div>Name: </div>
          <div> <a href="{{ route('persons.show', ['person' => $person]) }}"> {{ $person->name }} </a> </div>
        </div>

        <div class="item">
          <div> Email: </div>
          <div> {{ $person->email }} </div>
        </div>

        <div class="item">
          <div> Tell: </div>
          <div> {{ $person->tell }} </div>
        </div>

        <div class="item"> 
          <div> Age: </div>
          <div> {{$person->age}} </div>
        </div>
      </div>
    @empty
      <div> No hay usuarios </div>
    @endforelse
  </div>
  
@endsection