<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCiudadanoRequest;
use App\Http\Requests\UpdateCiudadanoRequest;
use App\Models\Ciudadano;

class CiudadanoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $ciudadanos = Ciudadano::all();

        return response()->view('ciudadanos.index',['ciudadanos' => $ciudadanos]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->view('ciudadanos.create') ;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCiudadanoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCiudadanoRequest $request)
    {

        Ciudadano::create($request->all());

        return response()->redirectTo('ciudadanos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function show(Ciudadano $ciudadano)
    {
        $ciudadano = Ciudadano::find($ciudadano->id);
        return $ciudadano;
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Ciudadano $ciudadano)
    {
        return response()->view('ciudadanos.create',['ciudadano' => $ciudadano]) ;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCiudadanoRequest  $request
     * @param  \App\Models\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCiudadanoRequest $request, Ciudadano $ciudadano)
    {
        $ciudadano->update($request->all());
        return response()->redirectTo('ciudadanos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ciudadano  $ciudadano
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ciudadano $ciudadano)
    {
        $ciudadano->delete();
        return response()->redirectTo('ciudadanos');
    }
}
