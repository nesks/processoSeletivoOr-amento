<?php

namespace App\Http\Controllers;


use App\Models\Orcamento;


use Illuminate\Http\Request;

class OrcamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $orcamento = Orcamento::orderBy('id')->get();
        return view('orcamento.index', ['orcamento' => $orcamento]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('orcamento.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Orcamento::create($request->all());
        session()->flash('mensagem', "Cadastrado com sucesso!");
        return redirect()->route('principal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        return view('orcamento.show', ['orcamento' => $orcamento]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        return view('orcamento.edit', ['orcamento' => $orcamento]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $orcamento->fill($request->all());
        $orcamento->save();

        session()->flash("mensagem","Editado com sucesso!");
        return redirect()->route('orcamento.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $orcamento->tvs()->delete();
        $orcamento->players()->delete();
        $orcamento->planos()->delete();
        $orcamento->delete();
        session()->flash('mensagem', "Excluido com sucesso!");
        return redirect()->route('principal');
    }
}
