<?php

namespace App\Http\Controllers;

use App\Models\Director;
use Illuminate\Http\Request;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['directors']=Director::paginate(5);
        return view('director.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('director.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosDirector = request()->except('_token');
        Director::insert($datosDirector);

        return redirect('director')->with('mensaje','Director agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Director $director)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $director=Director::findOrFail($id);
        return view('director.edit',compact('director'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosDirector = request()->except(['_token','_method']);
        Director::where('id','=',$id)->update($datosDirector);

        $director=Director::findOrFail($id);
        return view('director.edit',compact('director'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Director::destroy($id);
        return redirect('director')->with('mensaje','Director Borrado');
    }
}
