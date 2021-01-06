<?php

namespace App\Http\Controllers;
use App\Models\Person;

use Illuminate\Http\Request;
use App\Http\Requests\PersonRequest; 

class PersonController extends Controller
{
  public function index(){
    $persons = Person::all();
    return view('persons.index', compact('persons'));
  }

  public function create(){
    return view('persons.create');
  }

  public function store( PersonRequest $request ){

    $person = Person::create([
      'name' => $request->name,
      'email' => $request->email,
      'tell' => $request->tell,
      'age' => $request->age
    ]);

    return redirect()->route('persons.index');

  }

  // public function show(Person $person){
  //   return view('persons.show', compact('person'));
  // }

  public function edit(Person $person){
    return view('persons.edit', compact('person'));
  }

  public function update(Person $person, PersonRequest $request){
    $person->update( $request->all() );
    return redirect()->route('persons.index');
  }

  public function destroy(Person $person){
    $person->delete();
    return redirect()->route('persons.index');
  }
}
