<?php

namespace LiketEAD\Http\Controllers;

use Illuminate\Http\Request;
use LiketEAD\Http\Requests\StoreUser;
use LiketEAD\Role_user;
use LiketEAD\Turma;
use LiketEAD\User;

class ProfessorController extends Controller
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
        /**
         * Criei uma método no Model User para listar apenas os professores.
         */
        $professores = $this->user->listaProfessores();
        return view('professor.index', compact('professores'));
    }

    public function create()
    {
        return view('professor.create');
    }


    public function store(StoreUser $request)
    {
        /**
         * Armazena e atribui a função de professor
         */
        $professor = $this->user->create($request->all());
        $professor->save();
        Role_user::create([ // Vinculo o usuário a função de professor
            'role_id' => 3,
            'user_id' => $professor->id
        ]);
        return redirect('professor')->with('status', 'Cadastro efetuado com sucesso!');
    }


    public function show($id)
    {
        $professor = $this->user->find($id);
        $turmas = $this->turma->all();
        return view('professor.show',compact('professor', 'turmas'));
    }


    public function edit($id)
    {
        $professor = $this->user->find($id);
        return view('professor.edit', compact('professor'));
    }


    public function update(Request $request, $id)
    {

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
        return redirect('professor')->with('status', 'Professor editado com sucesso!');
    }


    public function destroy($id)
    {
        $this->user->where('id', $id)->delete();
        return redirect('professor')->with('status', 'Professor excluído com sucesso!');
    }
}
