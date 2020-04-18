<?php

namespace App\Http\Controllers\Admin;

use App\Inmobiliaria;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InmobiliariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inmobiliarias = Inmobiliaria::all();

        return view('admin.inmobiliarias.index', compact('inmobiliarias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.inmobiliarias.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $path=$request->file('photo')->store('photos','public');
        Inmobiliaria::create($request->all());
        return redirect()->route('admin.inmobiliarias.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Inmobiliaria  $inmobiliaria
     * @return \Illuminate\Http\Response
     */
    public function show(Inmobiliaria $inmobiliaria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Inmobiliaria  $inmobiliaria
     * @return \Illuminate\Http\Response
     */
    public function edit(Inmobiliaria $inmobiliaria)
    {
        return view('admin.inmobiliarias.edit', compact('inmobiliaria'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Inmobiliaria  $inmobiliaria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Inmobiliaria $inmobiliaria)
    {
        $inmobiliaria->update($request->all());
        return redirect()->route('admin.inmobiliarias.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Inmobiliaria  $inmobiliaria
     * @return \Illuminate\Http\Response
     */
    public function destroy(Inmobiliaria $inmobiliaria)
    {
        $inmobiliaria->delete();
        return redirect()->route('admin.inmobiliarias.index');
    }
}
