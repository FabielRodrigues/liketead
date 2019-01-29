@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Cadastrar Professor</div>

                    <div class="card-body">
                        {!! Form::open(['route' => 'professor.store', 'method' => 'post']) !!}
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