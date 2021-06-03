<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pessoa;
use App\Http\Requests\PessoaRequest;

class PessoasController extends Controller
{

    public function index()
    {
        $pessoa = Pessoa::all();
        return view('pessoa.index', compact('pessoa'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $pessoa = new Pessoa();
        $pessoa->escola = $request->input('escola');
        $pessoa->nome = $request->input('nome');
        $pessoa->tema = $request->input('tema');
        $pessoa->data = $request->input('data');
        $pessoa->hora = $request->input('horas');
        $pessoa->save();
        return redirect()->route('pessoa.index', compact('pessoa'));
    }

    public function show($id)
    {
        $pessoa = Pessoa::find($id);
        if(isset($pessoa)){
            return view('pessoa.show', compact('pessoa'));
        }
            return view('pessoa.index');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $pessoa = Pessoa::find($id);
        if(isset($pessoa)){
        $pessoa->escola = $request->input('escola');
        $pessoa->nome = $request->input('nome');
        $pessoa->tema = $request->input('tema');
        $pessoa->data = $request->input('data');
        $pessoa->hora = $request->input('horas');
        $pessoa->save();

        }
        return redirect()->route('pessoa.index', compact('pessoa'));
    }

    
    public function destroy($id)
    {
        $pessoa = Pessoa::find($id);
        if(isset($pessoa))
    {
        $pessoa->delete();
    }
        return redirect()->route('pessoa.index');
    }
}
