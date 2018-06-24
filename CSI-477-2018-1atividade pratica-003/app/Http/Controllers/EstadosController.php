<?php

namespace App\Http\Controllers;

use App\Estado;
use Illuminate\Http\Request;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados= Estado::all();
        return view('estados.index')->with('estados',$estados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        //Validação
        Estado::create($request->all());
        /*$estado= new Estado;
        $estado->nome=$request->nome;
        $estado->sigla=$request->sigla;
        $estado->save();*/
        session()->flash('mensagem','Estado inserido com sucesso!');
        return redirect('/estados');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function show(Estado $estado)
    {
        return view('estados.show')->with('estado',$estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function edit(Estado $estado)
    {
        return view('estados.edit')->with('estado',$estado);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        /*$estado->nome=$request->nome;*/
        $estado->fill($request->all());
        $estado->save();
        session()->flash('mensagem', 'Estado atualizado com sucesso!');
        return redirect()->route('estados.show',$estado->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estadp  $estadp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        //
    }
}
