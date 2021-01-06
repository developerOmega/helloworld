@extends('layouts.app')
@section('title', 'Create Person')

@section('content')
  <div class="head">
    <h2>
      Edit {{ $person->name }}
    </h2>
  </div>

  <form action="{{route('persons.update', ['person' => $person->id])}}" method="post"  enctype="multipart/form-data">
    {!! csrf_field() !!}
    {{method_field('PUT')}}

    <div class="mb-3">
      <label for="name" class="form-label"> Name </label>
      <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" value="{{ old( 'name', $person->name ) }}">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" value="{{ old( 'email', $person->email ) }}">
    </div>

    <div class="row">
      <div class="mb-3 col">
        <label for="tell" class="form-label">Tell</label>
        <input type="number" class="form-control" name="tell" id="tell" value="{{ old( 'tell', $person->tell ) }}">
      </div>
  
      <div class="mb-3 col">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" name="age" id="age" value="{{ old( 'age', $person->age ) }}">
      </div>
    </div>

    
    <button type="submit" class="btn btn-primary w-100"> Save </button>
  </form>
@endsection