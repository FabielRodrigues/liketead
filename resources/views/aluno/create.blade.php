@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cadastrar Aluno</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'aluno.store', 'method' => 'post']) !!}
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