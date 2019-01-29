@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Editar Professor</div>

                    <div class="card-body">
                        {!! Form::model($professor, ['route' => ['professor.update', $professor->id], 'method' => 'post']) !!}
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