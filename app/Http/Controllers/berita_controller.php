<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;
use App\kategori_berita;

class berita_controller extends Controller
{
    public function index(){
		$berita=berita::all();

		return view('berita.index', compact('berita'));
}
public function show($id){
		$berita=berita::find($id);
		return view('berita.show', compact('berita'));

        if (empty($berita)){
        return redirect(route('berita.index'));
    }
}

    public function create(){
    	$kategori_berita=kategori_berita::pluck('nama','id');
    	return view('kategori_berita.create',compact('kategori_berita'));
    }
    public function store(Request $request){
    	$input=$request->all();

    	berita::create($input);
    	return redirect(route('berita.index'));
    }

     public function edit ($id){
      $berita=berita::find($id);

      if (empty($berita)){
        return redirect(route('berita.index'));
      }

      return view('berita.edit',compact('berita'));
    }

     public function update(request $request,$id){
      $edit= $request->all();
      berita::find($id) -> update($edit);

      return redirect(route('berita.index'));
    }

    public function destroy($id){
      berita::destroy($id);

      return redirect(route('berita.index'));
    }
}