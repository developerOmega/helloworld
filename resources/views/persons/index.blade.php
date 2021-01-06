@extends('layouts.app')

@section('title', 'Persons')

@section('content')
  
  <div class="header">
    <h2 class="fs-1"> Persons </h2>
    <a href="{{ route('persons.create') }}"> New person </a>
  </div class="head">

  <div class="row row-cols-4 pt-3 gap-3">
    @forelse ($persons as $person)

      <div class="card col" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"> {{ $person->name }}</h5>
          <p class="card-text"> <b> Email: </b> {{ $person->email }}</p>
          <p class="card-text"> <b> Tell: </b> {{ $person->tell }}</p>
          <p class="card-text"> <b> Age: </b> {{ $person->age }}</p>
        
          <div class="row">
            <a href="{{ route('persons.edit', ['person' => $person]) }}" class="btn btn-success col"> Edit </a>
            <form action="{{url('/persons', ['person' => $person->id])}}" method="POST" class="col">
              {!! csrf_field() !!}
              {{ method_field('DELETE') }}
              <button type="submit" class="btn btn-danger" > Delete </button>
            </form>
          </div>
        </div>
      </div>

    @empty
      <div> No hay usuarios </div>
    @endforelse
  </div>
  
@endsection