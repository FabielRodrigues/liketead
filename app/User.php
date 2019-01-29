<?php

namespace LiketEAD;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'cpf', 'endereco', 'numero', 'cidade', 'estado', 'cep'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withPivot('user_id','role_id');
    }

    public function turmas()
    {
        return $this->belongsToMany(Turma::class)->withPivot('user_id','turma_id');
    }

    public function listaAlunos()
    {
        return User::select()
            ->join('role_user', 'role_user.user_id', '=', 'id')
            ->select('users.*', 'role_user.*')
            ->where('role_user.role_id', 2) // ID Role -> Aluno
            ->orderBy('users.name', 'asc')
            ->paginate(15);
    }

    public function listaProfessores()
    {
        return User::select()
            ->join('role_user', 'role_user.user_id', '=', 'id')
            ->select('users.*', 'role_user.*')
            ->where('role_user.role_id', 3) // ID Role -> Professores
            ->orderBy('users.name', 'asc')
            ->paginate(15);
    }
}
