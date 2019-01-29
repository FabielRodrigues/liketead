<?php

namespace LiketEAD\Http\Controllers;

use Illuminate\Http\Request;
use LiketEAD\Turma;
use LiketEAD\Turma_user;

class TurmaController extends Controller
{
    protected $turma;

    public function __construct(Turma $turma)
    {
        $this->turma = $turma;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turmas = $this->turma->paginate(15);
        return view('turma.index', compact('turmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('turma.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turma = $this->turma->create($request->all());
        $turma->save();
        return redirect('turma')->with('status', 'Cadastro efetuado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $turma = $this->turma->find($id);
        return view('turma.show', compact('turma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turma = $this->turma->find($id);
        return view('turma.edit', compact('turma'));
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
        $this->turma->where('id', $id)->update([
            'disciplina' => $request->disciplina,
            'nome' => $request->nome,
            'descricao' => $request->descricao,
            'periodo' => $request->periodo,
            'inicio' => $request->inicio,
            'fim' => $request->fim
        ]);
        return redirect('turma')->with('status', 'Turma editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->turma->where('id', $id)->delete();
        return redirect('turma')->with('status', 'Turma excluído com sucesso!');
    }

    public function matricular(Request $request)
    {
        try {
            Turma_user::create([
                'user_id' => $request->user_id,
                'turma_id' => $request->turma_id,
                'role_id' => $request->role_id
            ]);
            return redirect()->back()->with('status', 'O aluno foi matriculado com sucesso!');
        }catch (\Exception $exception) {
            return redirect()->back()->with('status', 'Não foi possível realizar a matricula. Error: '.$exception->getMessage());
        }
    }
}
