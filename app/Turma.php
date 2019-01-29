<?php

namespace LiketEAD;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{

    protected $fillable = [
        'disciplina', 'nome', 'descricao', 'periodo', 'inicio', 'fim'
    ];

    public function alunos()
    {
        return $this->belongsToMany(User::class)->withPivot('user_id','turma_id')->wherePivot('role_id', 2);
    }

    public function professores()
    {
        return $this->belongsToMany(User::class)->withPivot('user_id','turma_id')->wherePivot('role_id', 3);
    }
}
