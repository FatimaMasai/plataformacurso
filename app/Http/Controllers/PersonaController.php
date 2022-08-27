<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Persona;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas')); 
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePersonaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'apellido_pat' => 'required',
            'apellido_mat' => 'required',
            'telefono' => 'required',
            'ci' => 'required',
            'sexo' => 'required',
            'estado_civil' => 'required',
            'direccion' => 'required',
             
        ]);


    $personas = Persona::create($request->all());
    return redirect()->route('personas.index', $personas)->with('info', 'La Persona se creo con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $personas)
    {
        return view('personas.edit', compact('personas'));
    } 

    public function update(Request $request, Persona $personas)
    {
        $request->validate([ 
            'nombre' => 'required',
            'apellido_pat' => 'required',
            'apellido_mat' => 'required',
            'telefono' => 'required',
            'ci' => 'required',
            'sexo' => 'required',
            'estado_civil' => 'required',
            'direccion' => 'required',
        ]);

        $personas->update($request->all()); 
        return redirect()->route('personas.index', $personas)->with('info', 'La Persona se actualizo con éxito');
    }
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('info', 'La Persona se eliminó con éxito');
    }

    

   

   


}
