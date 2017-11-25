<div class="form-group {{ $errors->has('dataInicio') ? 'has-error' : ''}}">
    <label for="dataInicio" class="col-md-4 control-label">{{ 'Datainicio' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dataInicio" type="datetime-local" id="dataInicio" value="{{ $selectprocess->dataInicio or ''}}" >
        {!! $errors->first('dataInicio', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dataFim') ? 'has-error' : ''}}">
    <label for="dataFim" class="col-md-4 control-label">{{ 'Datafim' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dataFim" type="datetime-local" id="dataFim" value="{{ $selectprocess->dataFim or ''}}" >
        {!! $errors->first('dataFim', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('ativo') ? 'has-error' : ''}}">
    <label for="ativo" class="col-md-4 control-label">{{ 'Ativo' }}</label>
    <div class="col-md-6">
        <div class="radio">
    
</div>
<div class="radio">
    
</div>
        {!! $errors->first('ativo', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('nome') ? 'has-error' : ''}}">
    <label for="nome" class="col-md-4 control-label">{{ 'Nome' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="nome" type="text" id="nome" value="{{ $selectprocess->nome or ''}}" >
        {!! $errors->first('nome', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('descrição') ? 'has-error' : ''}}">
    <label for="descrição" class="col-md-4 control-label">{{ 'Descrição' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descrição" type="text" id="descrição" value="{{ $selectprocess->descrição or ''}}" >
        {!! $errors->first('descrição', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
