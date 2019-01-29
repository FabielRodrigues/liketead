<?php

namespace LiketEAD\Http\Controllers;

use LiketEAD\Http\Requests\StoreUser;
use LiketEAD\Role_user;
use LiketEAD\Turma;
use LiketEAD\User;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    protected $user;
    protected $turma;

    public function __construct(User $user, Turma $turma)
    {
        $this->user = $user;
        $this->turma = $turma;
    }

    public function index()
    {
        $alunos = $this->user->listaAlunos();
        return view('aluno.index', compact('alunos'));
    }

    public function create()
    {
        return view('aluno.create');
    }


    public function store(StoreUser $request)
    {
        $aluno = $this->user->create($request->all());
        $aluno->save();
        Role_user::create([ // Vinculo o usuário a função de Aluno
           'role_id' => 2,
           'user_id' => $aluno->id
        ]);
        return redirect('aluno')->with('status', 'Cadastro efetuado com sucesso!');
    }


    public function show($id)
    {
        $aluno = $this->user->find($id);
        $turmas = $this->turma->all();
        return view('aluno.show', compact('aluno', 'turmas', 'listaTurmaAluno'));
    }


    public function edit($id)
    {
        $aluno = $this->user->find($id);
        return view('aluno.edit', compact('aluno'));
    }


    public function update(Request $request, $id)
    {
        //
        $this->user->where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'cpf' => $request->cpf,
            'endereco' => $request->endereco,
            'numero' => $request->password,
            'cidade' => $request->cidade,
            'estado' => $request->estado,
            'cep' => $request->cep,
        ]);
        return redirect('aluno')->with('status', 'Aluno editado com sucesso!');
    }

    public function destroy($id)
    {
        //
        $this->user->where('id', $id)->delete();
        return redirect('aluno')->with('status', 'Aluno excluído com sucesso!');
    }
}
