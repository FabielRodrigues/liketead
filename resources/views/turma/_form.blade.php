<div class="form-group row">
    <label for="disciplina" class="col-md-4 col-form-label text-md-right">Disciplina</label>

    <div class="col-md-6">
        {!! Form::text('disciplina', null, ['class' => 'form-control'], 'autofocus') !!}
        @if ($errors->has('disciplina'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('disciplina') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="nome" class="col-md-4 col-form-label text-md-right">Nome</label>

    <div class="col-md-6">
        {!! Form::text('nome', null, ['class' => 'form-control']) !!}
        @if ($errors->has('nome'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('nome') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="periodo" class="col-md-4 col-form-label text-md-right">Período</label>

    <div class="col-md-6">
        {!! Form::text('periodo', null, ['class' => 'form-control']) !!}
        @if ($errors->has('periodo'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('periodo') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="inicio" class="col-md-4 col-form-label text-md-right">Ínicio</label>

    <div class="col-md-6">
        {!! Form::text('inicio', null, ['class' => 'form-control selectonfocus']) !!}
        @if ($errors->has('inicio'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('inicio') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="fim" class="col-md-4 col-form-label text-md-right">Fim</label>

    <div class="col-md-6">
        {!! Form::text('fim', null, ['class' => 'form-control selectonfocus']) !!}
        @if ($errors->has('fim'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('fim') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="descricao" class="col-md-4 col-form-label text-md-right">Descrição</label>

    <div class="col-md-6">
        {!! Form::text('descricao', null, ['class' => 'form-control']) !!}
        @if ($errors->has('descricao'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('descricao') }}</strong>
            </span>
        @endif
    </div>
</div>


<div class="form-group row mb-0">
    <div class="col-md-6 offset-md-4">
        <button type="submit" class="btn btn-primary">
            ENVIAR
        </button>
    </div>
</div>