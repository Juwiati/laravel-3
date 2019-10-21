<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengumuman;
use App\kategori_pengumuman;

class pengumuman_controller extends Controller
{
    public function index(){

   	$pengumuman=pengumuman::all();
   	return view('pengumuman.index',compact('pengumuman'));
   }
   
   public function show($id){
   	$pengumuman=pengumuman::find($id);
   	return view('pengumuman.show', compact('pengumuman'));

   	if (empty($pengumuman)){
        return redirect(route('pengumuman.index'));
     }
   }
   public function create(){
   	$kategori_pengumuman=kategori_pengumuman::pluck('nama','id');
   	return view('kategori_pengumuman.create', compact('pengumuman'));
   }
   public function store(Request $request){
      $input= $request->all();
     
      pengumuman::create($input);
      return redirect(route('pengumuman.index'));

   }

    public function edit ($id){
      $pengumuman_controller=pengumuman::find($id);

      if (empty($pengumuman)){
        return redirect(route('pengumuman.index'));
      }

      return view('pengumuman.edit',compact('pengumuman'));
    }

     public function update(request $request,$id){
      $edit= $request->all();
      pengumuman::find($id) -> update($edit);

      return redirect(route('pengumuman.index'));
    }

    public function destroy($id){
      pengumuman::destroy($id);

      return redirect(route('pengumuman.index'));
    }
}
