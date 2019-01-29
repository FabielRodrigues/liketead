@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Turma</div>

                    <div class="card-body">
                        {!! Form::model($turma, ['url' => ['turma/update', $turma->id ], 'method' => 'post']) !!}
                        @csrf
                        @include('turma._form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection