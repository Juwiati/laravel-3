<?php

 

namespace App\Http\Controllers;

 

use Illuminate\Http\Request;

use App\artikel;
use App\kategori_artikel;

class artikel_controller extends Controller

{
    public function index(){

   	$artikel=artikel::all();
   	return view('artikel.index',compact('artikel'));

}

public function show($id){
   	$artikel=artikel::find($id);
   	return view('artikel.show', compact('artikel'));

   	if (empty($artikel)){
        return redirect(route('artikel.index'));
   }
}

   public function create(){
   	$kategori_artikel=kategori_artikel::pluck('nama','id');
   	return view('kategori_artikel.create', compact('kategori_artikel'));
   }

   public function store(Request $request){
      $input= $request->all();
     
      artikel::create($input);
      return redirect(route('artikel.index'));

   }


   public function edit ($id){
      $artikel=artikel::find($id);

      if (empty($artikel)){
        return redirect(route('artikel.index'));
      }

      return view('artikel.edit',compact('artikel'));
 }

    public function update(request $request,$id){
      $edit= $request->all();
      artikel::find($id) -> update($edit);

      return redirect(route('artikel.index'));
    }

    public function destroy($id){
      artikel::destroy($id);

      return redirect(route('artikel.index'));
    }
}

