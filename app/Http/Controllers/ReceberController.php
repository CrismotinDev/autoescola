<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\conta_receber;
use App\Models\Receber;
use App\Models\usuario;
use Illuminate\Http\Request;
@session_start();

class ReceberController extends Controller
{
    public function index()
    {
        $tabela = conta_receber::orderBy('id', 'desc')->paginate();
        return view ('painel-recepcao.receber.index', ['itens' =>$tabela]);
    }

    public function delete(conta_receber $item)
    {
        $item->delete();
        return redirect()->route('receber.index');
    }

    public function modal($id)
    {
        $item = conta_receber::orderby('id', 'desc' )->paginate();
        return view ('painel-recepcao.receber.index', ['itens'=>$item, 'id'=>$id]);
    }

    public function editar(Request $request, Aluno $item)
    {
        $item->nome = $request->nome;
        $item->email = $request->email;
        $item->cpf = $request->cpf;
        $item->telefone = $request->telefone;
        $item->endereco = $request->endereco;
        $item->status_pauta = $request->status_pauta;
        $item->data_pauta = $request->data;
        $item->categoria = $request->categoria;

        $oldcpf = $request->oldcpf;
        $oldemail = $request->oldemail;

        if($oldcpf != $request->cpf){
            $itens = Aluno::where('cpf', '=', $request->cpf)->count();
        if($itens > 0){
            echo "<script language='javascript'>window.alert('Cpf já Cadastrado') </script>";
            return view('painel-recepcao.alunos.edit', ['item'=>$item]);

            }

        }

        if($oldemail != $request->email){
            $itens = Aluno::where('email', '=', $request->email)->count();
        if($itens > 0){
            echo "<script language='javascript'>window.alert('Email já Cadastrado') </script>";
            return view('painel-recepcao.alunos.edit', ['item'=>$item]);

            }

        }
        $item->save();
        return redirect()->route('alunos.index');
    }

    public function baixar(Request $request, conta_receber $item)
    {
        $item->nome = $request->nome;
        $item->save();
        return redirect()->route('receber.index');
    }

    public function modal_baixar($id)
    {
        $item = conta_receber::orderby('id', 'desc' )->paginate();
        return view ('painel-recepcao.receber.index', ['itens'=>$item, 'id2'=>$id]);
    }
}
