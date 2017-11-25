<div class="form-group {{ $errors->has('homologado') ? 'has-error' : ''}}">
    <label for="homologado" class="col-md-4 control-label">{{ 'Homologado' }}</label>
    <div class="col-md-6">
        <div class="radio">
    <label><input name="{{ homologado }}" type="radio" value="1" {{ (isset($exemption) && 1 == $exemption->homologado) ? 'checked' : '' }}> Yes</label>
</div>
<div class="radio">
    <label><input name="{{ homologado }}" type="radio" value="0" @if (isset($exemption)) {{ (0 == $exemption->homologado) ? 'checked' : '' }} @else {{ 'checked' }} @endif> No</label>
</div>
        {!! $errors->first('homologado', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('motivo') ? 'has-error' : ''}}">
    <label for="motivo" class="col-md-4 control-label">{{ 'Motivo' }}</label>
    <div class="col-md-6">
        <input class="form-control" name="motivo" type="text" id="motivo" value="{{ $exemption->motivo or ''}}" >
        {!! $errors->first('motivo', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        <input class="btn btn-primary" type="submit" value="{{ $submitButtonText or 'Create' }}">
    </div>
</div>
