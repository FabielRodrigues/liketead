<?php

namespace LiketEAD;

use Illuminate\Database\Eloquent\Model;

class Turma_user extends Model
{

    protected $table = 'turma_user';
    protected $fillable = [
        'user_id', 'turma_id', 'role_id'
    ];
    public $timestamps = false;
}
