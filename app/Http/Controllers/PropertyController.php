<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PropertyController extends Controller
{
    function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $properties = Property::all();
        return view('properties.index', compact('properties'));
    }

    public function edit($id)
    {
        $property=Property::find($id);
        $users=User::all();
        return view('properties.edit',compact('property','users'));
    }

    public function update(Request $request, $id)
    {
        $property=Property::find($id);
        $property->update(['description'=>$request->description,
            'price'=>$request->price,
            'owner_id'=>$request->owner_id
        ]);

        return redirect()->route('properties.index');
    }
}