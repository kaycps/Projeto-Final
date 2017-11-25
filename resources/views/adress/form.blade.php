<div class="form-group {{ $errors->has('Rua') ? 'has-error' : ''}}">
    <label for="Rua" class="col-md-4 control-label">{{ 'Rua' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="Rua" type="text" id="Rua" value="{{ $adress->Rua or ''}}" >
        {!! $errors->first('Rua', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('numeroEndereço') ? 'has-error' : ''}}">
    <label for="numeroEndereço" class="col-md-4 control-label">{{ 'Numeroendereço' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="numeroEndereço" type="number" id="numeroEndereço" value="{{ $adress->numeroEndereço or ''}}" >
        {!! $errors->first('numeroEndereço', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cep') ? 'has-error' : ''}}">
    <label for="cep" class="col-md-4 control-label">{{ 'Cep' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cep" type="text" id="cep" value="{{ $adress->cep or ''}}" >
        {!! $errors->first('cep', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('bairro') ? 'has-error' : ''}}">
    <label for="bairro" class="col-md-4 control-label">{{ 'Bairro' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="bairro" type="text" id="bairro" value="{{ $adress->bairro or ''}}" >
        {!! $errors->first('bairro', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('complemento') ? 'has-error' : ''}}">
    <label for="complemento" class="col-md-4 control-label">{{ 'Complemento' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="complemento" type="text" id="complemento" value="{{ $adress->complemento or ''}}" >
        {!! $errors->first('complemento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('cidade') ? 'has-error' : ''}}">
    <label for="cidade" class="col-md-4 control-label">{{ 'Cidade' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="cidade" type="text" id="cidade" value="{{ $adress->cidade or ''}}" >
        {!! $errors->first('cidade', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('estado') ? 'has-error' : ''}}">
    <label for="estado" class="col-md-4 control-label">{{ 'Estado' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="estado" type="text" id="estado" value="{{ $adress->estado or ''}}" >
        {!! $errors->first('estado', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('paris') ? 'has-error' : ''}}">
    <label for="paris" class="col-md-4 control-label">{{ 'Paris' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="paris" type="text" id="paris" value="{{ $adress->paris or ''}}" >
        {!! $errors->first('paris', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('tipo') ? 'has-error' : ''}}">
    <label for="tipo" class="col-md-4 control-label">{{ 'Tipo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="tipo" type="text" id="tipo" value="{{ $adress->tipo or ''}}" >
        {!! $errors->first('tipo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
