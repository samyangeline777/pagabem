<?php

namespace App\Http\Controllers;

use App\Tipo_Conta;
use Illuminate\Http\Request;

class TipoContaController extends Controller
{
    
    public function index()
    {
       $contas = Tipo_Conta::paginate(10); // SELECT * FROM TIPO_CONTA
       return view('tipo_conta.index', compact('contas'));
    }

    
    public function create()
    {
         return view('tipo_conta.create');
    }

    
    public function store(Request $request)
    {

      $conta = $request->all();
      
      $inseriu = Tipo_Conta::create($conta);

      if($inseriu) 
        return redirect()->route('tipo_conta.index');
      else 
        return redirect()->back();
    }

    
    public function show(Tipo_Conta $tipo_Conta)
    {
       
    }

    
    public function edit($id)
    {
      $conta = Tipo_Conta::find($id); //SELECT * FROM TIPO_CONTA where $id = 
      return view('tipo_conta.edit', compact('conta'));
    }

    
    public function update(Request $request, $id)
    {
      
      $conta = Tipo_Conta::find($id);
      
      $dados = $request->all();
      
      $atualizou = $conta->update($dados);

      if($atualizou) 
        return redirect()->route('tipo_conta.index');
      else 
        return redirect()->back();
    }

    
    public function destroy($id)
    {
        $conta = Tipo_Conta::find($id);
        $conta->delete();
        return redirect()->route('tipo_conta.index');
    }
    
}
