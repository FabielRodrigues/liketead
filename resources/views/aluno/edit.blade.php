@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Aluno</div>

                    <div class="card-body">
                        {!! Form::model($aluno, ['route' => ['aluno.update', $aluno->id], 'method' => 'post']) !!}
                            @csrf
                            @include('aluno._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection