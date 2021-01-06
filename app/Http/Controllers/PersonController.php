<?php

namespace App\Http\Controllers;
use App\Models\Person;

use Illuminate\Http\Request;

class PersonController extends Controller
{
  public function index(){
    $persons = Person::all();
    return view('persons.index', compact('persons'));
  }

  public function create(){
    return view('persons.create');
  }

  public function store(){

  }

  public function show(Person $person){
    
  }

  public function edit(Person $person){

  }

  public function update(Person $person){

  }

  public function destroy(Person $person){

  }
}
