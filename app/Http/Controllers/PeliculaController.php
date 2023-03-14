<?php

namespace App\Http\Controllers;

use App\Models\Pelicula;
use Illuminate\Http\Request;

class PeliculaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['peliculas']=Pelicula::paginate(5);
        return view('pelicula.index',$datos );

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pelicula.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosPelicula = request()->except('_token');
        Pelicula::insert($datosPelicula);

        return redirect('pelicula')->with('mensaje','Pelicula agregada con éxito');

        //return response()->json($datosPelicula);

    }

    /**
     * Display the specified resource.
     */
    public function show(Pelicula $pelicula)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $pelicula=Pelicula::findOrFail($id);
        return view('pelicula.edit',compact('pelicula') );

    }

    /**
     * Update the specified resource in storage.
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Pelicula $pelicula
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datosPelicula = request()->except(['_token','_method']);
        Pelicula::where('id','=',$id)->update($datosPelicula);

        $pelicula=Pelicula::findOrFail($id);
        return view('pelicula.edit',compact('pelicula') );

    }

    /**
     * Remove the specified resource from storage.
     * @param \App\Models\Pelicula $pelicula
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Pelicula::destroy($id);
        return redirect('pelicula')->with('mensaje','Pelicula Borrada');
    }
}
