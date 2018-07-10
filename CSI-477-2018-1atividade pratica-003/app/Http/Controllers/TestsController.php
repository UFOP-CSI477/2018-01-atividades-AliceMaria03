<?php

namespace App\Http\Controllers;
use App\Test;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function __construct(){
        $this->middleware('auth');
    }*/
    public function index()
    {
        $tests= Test::orderBy('user_id')->get();
        return view('tests.index')->with('tests',$tests);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tests= Test::orderBy('date')->get();
        return view ('tests.create')->with('tests',$tests);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Test::create($request->all());
       
        $request->session()->flash('mensagem','Exame inserido com sucesso!');
        return redirect('/tests');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        return view('tests.show')->with('test',$test);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        $tests= test::orderBy('id')->get();
        return view('tests.edit')->with('test',$test)->with('tests',$tests);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        $test->fill($request->all());
        $test->save();
        session()->flash('mensagem', 'Exame atualizado com sucesso!');
        return redirect()->route('tests.show',$test->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Cidade  $cidade
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        $test->delete();
        session()->flash('mensagem','Exame excluido com sucesso');
        return redirect()->route('tests.index');
    }
}
