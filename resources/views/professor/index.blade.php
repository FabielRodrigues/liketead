@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Professores</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div style="margin: 10px;">
                            <a href="{{ route('professor.create') }}" class="btn btn-success">CADASTRAR</a>
                        </div>

                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>
                                    Nome
                                </th>
                                <th>
                                    Visualizar
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
                            @foreach($professores as $professor)
                                <tr>
                                    <td>
                                        {{ $professor->name }}
                                    </td>
                                    <td>
                                        <a href="{{ route('professor.show', ['id' => $professor->id]) }}" class="btn btn-info"> VISUALIZAR</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('professor.edit', ['id' => $professor->id]) }}" class="btn btn-warning"> EDITAR</a>
                                    </td>
                                    <td>
                                        <a href="{{ route('professor.destroy', ['id' => $professor->id]) }}" class="btn btn-danger"> EXCLUIR</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <td colspan="4">
                                    {{ $professores->links() }}
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