<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tiendas;
use Illuminate\Support\Facades\Hash;

class Tienda extends Controller
{
  public function index()
  {
    $tiendas = Tiendas::all();
    
   return view('content.pages-origins', ['origins'=>$tiendas]);
  }
  public function create()
  {
    return view('content.pages-origins-create');

  }
  public function Store(Request $request){
    $validator = $request->validate([
      'name'=>'required',
    ]);
    $type = new Tiendas();
    $type->name = $request->name;
    $type->description= $request->description;
    $type->active= !$type->active;
    $type->save();
    return redirect()->route('pages-types');
  }
  public Function show($type_id){
    $type = origin::find($type_id);
    return view('content.pages.types-show',['type'=>$type]);
}
  public function update(Request $request){
  $type = origin:: find($request->type_id);
  $type->name = $request->name;
  $type->description= $request->description;
  
  $type->save();
  return redirect()->route('pages-types');
}
public function destroy($type_id){
  $type = origin::find($type_id);
  $type->delete();
  return redirect()->route('pages-types');
}
public function switch($type_id){
  $type = origin::find($type_id);
  $type->active= !$type->active;
  $type->save();
  return redirect()->route('pages-types');
}
}