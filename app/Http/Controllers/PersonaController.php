<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Persona;
use App\Http\Requests\CreatePersonaRequest;
class PersonaController extends Controller
{

    public function __construct()
    {
        //$this->middleware('auth')->only('create','edit');
        $this->middleware('auth')->except('index','show');

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('personas', [
            'personas' => Persona::latest()->paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {       return view('create',[
        'persona'=> new Persona
    ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePersonaRequest $request)
    {
        Persona::create($request->validated());
        return redirect()->route('personas.index')->with('estado','La persona fue creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($persona)
    {
         return view('show', [
             'persona' => Persona::find($persona)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        return view('edit',[
            'persona'=>$persona
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Persona $persona, CreatePersonaRequest $request)
    {
        $persona->update($request->validated());
        return redirect()->route('personas.show',$persona)->with('estado','La persona fue actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index')->with('estado','La persona fue eliminada correctamente');
        
    }
}
