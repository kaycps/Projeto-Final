<div class="form-group {{ $errors->has('descrição') ? 'has-error' : ''}}">
    <label for="descrição" class="col-md-4 control-label">{{ 'Descrição' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="descrição" type="text" id="descrição" value="{{ $quotum->descrição or ''}}" >
        {!! $errors->first('descrição', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
