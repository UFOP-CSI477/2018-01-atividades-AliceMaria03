<?php

namespace App\Http\Controllers;
use App\Procedure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProceduresController extends Controller
{
   /* public function __construct(){
        $this->middleware('auth');
    }*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $procedures= Procedure::orderBy('name')->get();
        return view('procedures.index')->with('procedures',$procedures);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $procedures= Procedure::orderBy('name')->get();
        return view ('procedures.create')->with('procedures',$procedures);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Procedure::create($request->all());
       
        $request->session()->flash('mensagem','Procedimento inserido com sucesso!');
        return redirect('/procedures');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Procedure $procedure)
    {

        return view('procedures.show')->with('procedure',$procedure);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Procedure $procedure)
    {
        $procedures= procedure::orderBy('name')->get();
        return view('procedures.edit')->with('procedure',$procedure)->with('procedures',$procedures);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Procedure $procedure)
    {
        $procedure->fill($request->all());
        $procedure->save();
        session()->flash('mensagem', 'Procedimento atualizado com sucesso!');
        return redirect()->route('procedures.show',$procedure->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  
     * @return \Illuminate\Http\Response
     */
    public function destroy(Procedure $procedure)
    {
        $procedure->delete();
        session()->flash('mensagem','Procedimento excluido com sucesso');
        return redirect()->route('procedures.index');
    }
}
