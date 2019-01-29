@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Turma</div>

                    <div class="card-body">
                        <table class="table-striped table table-bordered">
                            <tr>
                                <td>Disciplina</td>
                                <td>{{ $turma->disciplina }}</td>
                            </tr>
                            <tr>
                                <td>Nome</td>
                                <td>{{ $turma->nome }}</td>
                            </tr>
                            <tr>
                                <td>Descrição</td>
                                <td>{{ $turma->descricao }}</td>
                            </tr>
                            <tr>
                                <td>Periodo</td>
                                <td>{{ $turma->periodo }}</td>
                            </tr>
                            <tr>
                                <td>Inicio</td>
                                <td>{{ $turma->inicio }}</td>
                            </tr>
                            <tr>
                                <td>Fim</td>
                                <td>{{ $turma->fim }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Histórico</div>

                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th colspan="2">Professores</th>
                            </tr>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                            </tr>
                            @foreach($turma->professores as $aluno)
                                <tr>
                                    <td>
                                        {{ $aluno->name }}
                                    </td>
                                    <td>
                                        {{ $aluno->email }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th colspan="2">Alunos</th>
                            </tr>
                            <tr>
                                <th>Nome</th>
                                <th>Email</th>
                            </tr>
                            @foreach($turma->alunos as $aluno)
                                <tr>
                                    <td>
                                        {{ $aluno->name }}
                                    </td>
                                    <td>
                                        {{ $aluno->email }}
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection