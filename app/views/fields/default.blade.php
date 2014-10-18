<div class="form-group">
    {{ Form::label($name, $label) }}
    {{ $control }}
    @if ($error)
    <span class="label label-danger mr10 mb10">{{ $error }}</span>
    @endif
</div>