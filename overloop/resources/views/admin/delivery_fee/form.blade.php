<div class="form-group {{ $errors->has('dikirim_ke') ? 'has-error' : ''}}">
    <label for="dikirim_ke" class="control-label">{{ 'Dikirim Ke' }}</label>
    <input class="form-control" name="dikirim_ke" type="text" id="dikirim_ke" value="{{ isset($delivery_fee->dikirim_ke) ? $delivery_fee->dikirim_ke : ''}}" >
    {!! $errors->first('dikirim_ke', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('ongkir') ? 'has-error' : ''}}">
    <label for="ongkir" class="control-label">{{ 'Ongkir' }}</label>
    <input class="form-control" name="ongkir" type="text" id="ongkir" value="{{ isset($delivery_fee->ongkir) ? $delivery_fee->ongkir : ''}}" >
    {!! $errors->first('ongkir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('estimasi_tiba') ? 'has-error' : ''}}">
    <label for="estimasi_tiba" class="control-label">{{ 'Estimasi Tiba' }}</label>
    <input class="form-control" name="estimasi_tiba" type="text" id="estimasi_tiba" value="{{ isset($delivery_fee->estimasi_tiba) ? $delivery_fee->estimasi_tiba : ''}}" >
    {!! $errors->first('estimasi_tiba', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    <input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>
