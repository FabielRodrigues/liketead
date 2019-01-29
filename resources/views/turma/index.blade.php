@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Turmas</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div style="margin: 10px;">
                            <a href="{{ route('turma.create') }}" class="btn btn-success">CADASTRAR</a>
                        </div>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Disciplina
                                </th>
                                <th>
                                    Editar
                                </th>
                                <th>
                                    Excluir
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($turmas as $turma)
                                <tr>
                                    <td>
                                        {{ $turma->nome }}
                                    </td>
                                    <td>
                                        {{ $turma->disciplina }}
                                    </td>
                                    <td>
                                        <a href="{{ route('turma.show', ['id' => $turma->id]) }}" class="btn btn-info"> VISUALIZAR</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('turma.edit', ['id' => $turma->id]) }}" class="btn btn-warning"> EDITAR</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('turma.destroy', ['id' => $turma->id]) }}" class="btn btn-danger"> EXCLUIR</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="5">
                                    {{ $turmas->links() }}
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection