@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="form-group row{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 col-form-label text-md-right">Nome</label>

    <div class="col-md-6">
        {!! Form::text('name', null, ['class' => 'form-control'], 'autofocus') !!}
        @if ($errors->has('name'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row{{ $errors->has('email') ? ' has-error' : '' }}">
    <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>

    <div class="col-md-6">
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
        @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row{{ $errors->has('password') ? ' has-error' : '' }}">
    <label for="password" class="col-md-4 col-form-label text-md-right">Senha</label>

    <div class="col-md-6">
        {!! Form::password('password',['class' => 'form-control', 'required']) !!}

        @if ($errors->has('password'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">CPF</label>

    <div class="col-md-6">
        {!! Form::text('cpf', null, ['class' => 'form-control cpf']) !!}

        @if ($errors->has('cpf'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cpf') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Endereço</label>

    <div class="col-md-6">
        {!! Form::text('endereco', null, ['class' => 'form-control']) !!}

        @if ($errors->has('endereco'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('endereco') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Número</label>

    <div class="col-md-6">
        {!! Form::number('numero', null, ['class' => 'form-control']) !!}

        @if ($errors->has('numero'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('numero') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Cidade</label>

    <div class="col-md-6">
        {!! Form::text('cidade', null, ['class' => 'form-control']) !!}

        @if ($errors->has('cidade'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cidade') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">Estado</label>

    <div class="col-md-6">
        <select name="estado" class="form-control" required>
            <option selected="" disabled value="">Selecione o Estado (UF)</option>
            <option value="Acre">Acre</option>
            <option value="Alagoas">Alagoas</option>
            <option value="Amapá">Amapá</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Bahia">Bahia</option>
            <option value="Ceará">Ceará</option>
            <option value="Distrito Federal">Distrito Federal</option>
            <option value="Espírito Santo">Espírito Santo</option>
            <option value="Goiás">Goiás</option>
            <option value="Maranhão">Maranhão</option>
            <option value="Mato Grosso">Mato Grosso</option>
            <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
            <option value="Minas Gerais">Minas Gerais</option>
            <option value="Pará">Pará</option>
            <option value="Paraíba">Paraíba</option>
            <option value="Paraná">Paraná</option>
            <option value="Pernambuco">Pernambuco</option>
            <option value="Piauí">Piauí</option>
            <option value="Rio de Janeiro">Rio de Janeiro</option>
            <option value="Rio Grande do Sul">Rio Grande do Sul</option>
            <option value="Rio Grande do Norte">Rio Grande do Norte</option>
            <option value="Rondônia">Rondônia</option>
            <option value="Roraima">Roraima</option>
            <option value="Santa Catarina">Santa Catarina</option>
            <option value="São Paulo">São Paulo</option>
            <option value="Sergipe">Sergipe</option>
            <option value="Tocantins">Tocantins</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label for="name" class="col-md-4 col-form-label text-md-right">CEP</label>

    <div class="col-md-6">
        {!! Form::text('cep', null, ['class' => 'form-control cep']) !!}

        @if ($errors->has('cep'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('cep') }}</strong>
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