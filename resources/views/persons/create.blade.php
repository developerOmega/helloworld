@extends('layouts.app')
@section('title', 'Create Person')

@section('content')
  <div class="head">
    <h2>
      New Person
    </h2>
  </div>

  @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
  @endif

  <form action="{{ route('persons.store') }}" method="POST"  enctype="multipart/form-data">
    {!! csrf_field() !!}

    <div class="mb-3">
      <label for="name" class="form-label"> Name </label>
      <input type="text" class="form-control" name="name"  id="name" aria-describedby="emailHelp">
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">Email address</label>
      <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
    </div>

    <div class="row">
      <div class="mb-3 col">
        <label for="tell" class="form-label">Tell</label>
        <input type="number" class="form-control" name="tell" id="tell">
      </div>
  
      <div class="mb-3 col">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" name="age" id="age">
      </div>
    </div>

    
    <button type="submit" class="btn btn-primary w-100"> Save </button>
  </form>
@endsection