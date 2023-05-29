<?php

namespace App\Http\Controllers;

use App\Models\Actor;
use Illuminate\Http\Request;

class ActorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datos['actors']=Actor::paginate(5);
        return view('actor.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('actor.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $datosActor = request()->except('_token');
        Actor::insert($datosActor);

        return redirect('actor')->with('mensaje','Actor agregado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(Actor $actor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $actor=Actor::findOrFail($id);
        return view('actor.edit',compact('actor'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $datosActor = request()->except(['_token','_method']);
        Actor::where('id','=',$id)->update($datosActor);

        $actor=Actor::findOrFail($id);
        return view('actor.edit',compact('actor'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Actor::destroy($id);
        return redirect('actor')->with('mensaje','Actor Borrado');
    }
}
