@extends('layouts.app')
@section('title', 'Create Person')

@section('content')
  <div class="head">
    <h2>
      New Person
    </h2>
  </div>

  <form action="persons/store" method="post"  enctype="multipart/form-data">

    {!! csrf_field() !!}

    <div class="label">
      <label for="name"> Name: </label>
      <input type="text" id="name" placeholder="ingresa nombre">
    </div>

    <div class="label">
      <label for="email"> Email: </label>
      <input type="email" id="email" placeholder="ingresa email">
    </div>

    <div class="label">
      <label for="tell"> Tell: </label>
      <input type="number" id="tell" placeholder="ingresa numero telefonico">
    </div>

    <div class="label">
      <label for="age"> Age: </label>
      <input type="number" id="age" placeholder="ingresa edad">
    </div>

    <button type="submit"> Agregar </button>

  </form>
@endsection