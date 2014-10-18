@extends('layout.default')

@section('scripts')
{{ HTML::script('assets/js//pages/forms.js') }}
{{ HTML::style( 'assets/css/jquery.datetimepicker.css', array('media' => 'screen')) }}
{{ HTML::script('assets/js/jquery.datetimepicker.js') }}
{{ HTML::script('assets/js/dateTimePicker.js') }}
@endsection

@section('content')

<div id=content>

<div class=content-wrapper>
<div class=outlet>
<div class=row>
<div class="col-lg-12 col-sm-10">
<div class="panel panel-default toggle">
<div class=panel-heading>
    <h3 class=panel-title>FORMULARIO ASIGNACIÓN TICKET</h3>
</div>
    <div class=panel-body>
    {{ Form::open(['route' => 'assign_ticket', 'method' => 'POST', 'role' => 'form', 'class' => 'form-horizontal group-border hover-stripped', 'files' => true]) }}
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Datos Ticket:</label>
        <div class="col-lg-4 col-md-4">

        </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Responsable:</label>
    <div class="col-lg-4 col-md-4">
        {{ Form::select('User_Id', $Responsible, null, array('class' => 'form-control input-sm')) }}
        {{ $errors->first('User_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
        {{ Form::hidden('Ticket_Id', $Ticket->id,['class' => 'form-control input-sm', 'id' => 'Ticket_Id']) }}
    </div>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Fecha Limite:</label>
    <div class="col-lg-3s col-md-3">
        {{ Form::text('deadline', null,['class' => 'form-control input-sm','id' => 'datetimepicker', 'autocomplete' => 'off']) }}
        {{ $errors->first('deadline', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Indicaciones:</label>
    <div class="col-lg-10 col-md-10">
        <textarea class="form-control limitTextarea" maxlength=250 rows=3 name="Indications"></textarea>
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Adjunto:</label>
    <div class="col-lg-6 col-md-6">
        <input type="file" name="attached">
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-10 col-sm-12 control-label"></label>
    <button type="submit" class="btn btn-success btn-alt">Asignar</button>
    </label>

</div>
</form>
</div>
</div>
<!-- End .panel -->
</div>


</div>

</div>

</div>

<div class=clearfix></div>
</div>

@stop


