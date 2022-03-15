<?php

namespace App\Http\Controllers;

use App\Models\todo;
use Illuminate\Http\Request;

class todocontroller extends Controller
{
  public function home(){
  
    $todos=todo::all();
    //dd($todos);
    return view('home',['todos'=>$todos]);
  }

  public function store(Request $request){
    //dd($request);
    $validatedData=$request->validate(['title'=>'required|max:123']);
    todo::create($validatedData);
   // $todo=new todo();
   // $todo->title=$request->post('title');
    //$todo->save();
    return redirect(route(name:'home'));


  }
 public function edit(todo $todo){
   //dd($todo);
   //$todo=todo::find($todo);
   //dd($todo);
   //$todo=todo::findOrfail($todo);
  
   return view('update',['todo'=>$todo]);
 }
 public function update(Request $request,todo $todo){
  $validatedData=$request->validate(['title'=>'required|max:123']);
  $todo->update($validatedData);
  return redirect(route(name:'home'));
 }
 public function delete(todo $todo){
   $todo->delete();
   return back();
 }
  
}
