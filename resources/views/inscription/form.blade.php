<div class="form-group {{ $errors->has('pago') ? 'has-error' : ''}}">
    <label for="pago" class="col-md-4 control-label">{{ 'Pago' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ pago }}" type="radio" value="1" {{ (isset($inscription) && 1 == $inscription->pago) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ pago }}" type="radio" value="0" @if (isset($inscription)) {{ (0 == $inscription->pago) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('pago', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dataPagamento') ? 'has-error' : ''}}">
    <label for="dataPagamento" class="col-md-4 control-label">{{ 'Datapagamento' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dataPagamento" type="datetime-local" id="dataPagamento" value="{{ $inscription->dataPagamento or ''}}" >
        {!! $errors->first('dataPagamento', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('dataInscrição') ? 'has-error' : ''}}">
    <label for="dataInscrição" class="col-md-4 control-label">{{ 'Datainscrição' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="dataInscrição" type="datetime-local" id="dataInscrição" value="{{ $inscription->dataInscrição or ''}}" >
        {!! $errors->first('dataInscrição', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
