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
                    <div class="card-header">Aluno</div>

                    <div class="card-body">
                        <table class="table-striped table table-bordered">
                            <tr>
                               <td>Nome</td>
                               <td>{{ $aluno->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ $aluno->email }}</td>
                            </tr>
                            <tr>
                                <td>CPF</td>
                                <td>{{ $aluno->cpf }}</td>
                            </tr>
                            <tr>
                                <td>Endereco</td>
                                <td>{{ $aluno->endereco }}</td>
                            </tr>
                            <tr>
                                <td>Número</td>
                                <td>{{ $aluno->numero }}</td>
                            </tr>
                            <tr>
                                <td>Cidade</td>
                                <td>{{ $aluno->cidade }}</td>
                            </tr>
                            <tr>
                                <td>Estado</td>
                                <td>{{ $aluno->estado }}</td>
                            </tr>
                            <tr>
                                <td>CEP</td>
                                <td>{{ $aluno->cep }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Histórico</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'turma.matricular', 'method' => 'post']) !!}
                        @csrf
                        <input type="hidden" name="user_id" value="{{ $aluno->id }}" />
                        <input type="hidden" name="role_id" value="2" />
                        <select name="turma_id" class="form-control" required>
                            <option disabled selected>Matricular em uma turma</option>
                            @foreach($turmas as $turma)
                                <option value="{{ $turma->id }}">{{ $turma->nome }} - {{ $turma->disciplina }}</option>
                            @endforeach
                        </select>
                        <input type="submit" value="ENVIAR" class="btn btn-success" style="margin: 5px;"/>
                        {!! Form::close() !!}
                        <br />

                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Turma</th>
                                <th>Disciplina</th>
                            </tr>
                            @foreach($aluno->turmas as $turma)
                                <tr>
                                    <td>
                                        {{ $turma->nome }}
                                    </td>
                                    <td>
                                        {{ $turma->disciplina }}
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