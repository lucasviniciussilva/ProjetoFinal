<?php

namespace App\Http\Controllers;

use App\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function create()
    {
        return view('cadastro');
    }

    public function store(request $request)
    {

        //dd($request->all()); 
        //debug and die

        Cadastro::create([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'email' => $request->email,
            'filme' => $request->filme,
            'jogo' => $request->jogo,
            'anime' => $request->anime,
            'serie' => $request->serie
        ]);

        // $teste = '<a href="mostra">Cadastro realizaddo com sucesso clique aqui para visualizar</a>';
        // return $teste;

        return view('concluido');
    }

    public function main()
    {
        return view('inicial');
    }

    public function mostrar()
    {
        $cadastros = Cadastro::all();

        return view('mostra', compact('cadastros'));
    }

    public function editar($id)
    {
        $cadastro = Cadastro::findOrFail($id);
        return view('editar', compact('cadastro'));
    }

    public function atualizar(request $request, $id)
    {
        $cadastro = Cadastro::findOrFail($id);

        $cadastro->update([
            'nome' => $request->nome,
            'idade' => $request->idade,
            'email' => $request->email,
            'filme' => $request->filme,
            'jogo' => $request->jogo,
            'anime' => $request->anime,
            'serie' => $request->serie
        ]);

        // $teste = '<a href="mostra">Cadastro realizaddo com sucesso clique aqui para visualizar</a>';
        // return $teste;

        return view('atualizado');
    }

    public function excluir($id)
    {
        $cadastro = Cadastro::findOrFail($id);
        return view('excluir', compact('cadastro'));
    }

    public function deletar($id)
    {
        $cadastro = Cadastro::findOrFail($id);
        $cadastro->delete();

        return view('deletado');
    }
}
