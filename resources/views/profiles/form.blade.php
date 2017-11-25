<div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="col-md-4 control-label">{{ 'Nome' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nome" type="text" id="nome" value="{{ $profile->nome or ''}}" >
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('RG') ? 'has-error' : ''}}">
    <label for="RG" class="col-md-4 control-label">{{ 'Rg' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="RG" type="text" id="RG" value="{{ $profile->RG or ''}}" >
        {!! $errors->first('RG', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('CPF') ? 'has-error' : ''}}">
    <label for="CPF" class="col-md-4 control-label">{{ 'Cpf' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="CPF" type="text" id="CPF" value="{{ $profile->CPF or ''}}" >
        {!! $errors->first('CPF', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('DataNascimento') ? 'has-error' : ''}}">
    <label for="DataNascimento" class="col-md-4 control-label">{{ 'Data de nascimento' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="DataNascimento" type="date" id="DataNascimento" value="{{ $profile->DataNascimento or ''}}" >
        {!! $errors->first('DataNascimento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Sexo') ? 'has-error' : ''}}">
    <label for="Sexo" class="col-md-4 control-label">{{ 'Sexo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Sexo" type="text" id="Sexo" value="{{ $profile->Sexo or ''}}" >
        {!! $errors->first('Sexo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('NomePai') ? 'has-error' : ''}}">
    <label for="NomePai" class="col-md-4 control-label">{{ 'Nome do pai' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="NomePai" type="text" id="NomePai" value="{{ $profile->NomePai or ''}}" >
        {!! $errors->first('NomePai', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('NomeMãe') ? 'has-error' : ''}}">
    <label for="NomeMãe" class="col-md-4 control-label">{{ 'Nome da mãe' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="NomeMãe" type="text" id="NomeMãe" value="{{ $profile->NomeMãe or ''}}" >
        {!! $errors->first('NomeMãe', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Passaporte') ? 'has-error' : ''}}">
    <label for="Passaporte" class="col-md-4 control-label">{{ 'Passaporte' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Passaporte" type="text" id="Passaporte" value="{{ $profile->Passaporte or ''}}" >
        {!! $errors->first('Passaporte', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Naturalidade') ? 'has-error' : ''}}">
    <label for="Naturalidade" class="col-md-4 control-label">{{ 'Naturalidade' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Naturalidade" type="text" id="Naturalidade" value="{{ $profile->Naturalidade or ''}}" >
        {!! $errors->first('Naturalidade', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Telefone') ? 'has-error' : ''}}">
    <label for="Telefone" class="col-md-4 control-label">{{ 'Telefone' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Telefone" type="text" id="Telefone" value="{{ $profile->Telefone or ''}}" >
        {!! $errors->first('Telefone', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('Escolaridade') ? 'has-error' : ''}}">
    <label for="Escolaridade" class="col-md-4 control-label">{{ 'Escolaridade' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Escolaridade" type="text" id="Escolaridade" value="{{ $profile->Escolaridade or ''}}" >
        {!! $errors->first('Escolaridade', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('EmissorRG') ? 'has-error' : ''}}">
    <label for="EmissorRG" class="col-md-4 control-label">{{ 'Emissor rg' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="EmissorRG" type="text" id="EmissorRG" value="{{ $profile->EmissorRG or ''}}" >
        {!! $errors->first('EmissorRG', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
