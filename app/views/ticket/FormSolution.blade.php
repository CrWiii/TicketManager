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
    <h3 class=panel-title>FORMULARIO SOLUCIÓN TICKET</h3>
</div>
    <div class=panel-body>
        {{ Form::open(['route' => 'solve_ticket', 'method' => 'POST', 'role' => 'form', 'class' => 'form-horizontal group-border hover-stripped']) }}

        <div class=form-group>
            <label class="col-lg-2 col-md-2 col-sm-12 control-label">Datos Ticket:</label>
            <div class="col-lg-4 col-md-4">

            </div>
        </div>

        <div class=form-group>
            <label class="col-lg-2 col-md-2 col-sm-12 control-label">Solución:</label>
            <div class="col-lg-6 col-md-6">
                <textarea class="form-control limitTextarea" maxlength=250 rows=3 name="solve"></textarea>
                {{ Form::hidden('Ticket_Id', $Ticket->id, ['class' => 'form-control input-sm']) }}
                {{ Form::hidden('User_Id', Auth::user()->id, ['class' => 'form-control input-sm']) }}
            </div>

            <label class="col-lg-2 col-md-2 col-sm-12 control-label">Fecha Solución:</label>
            <div class="col-lg-2 col-md-2">
                {{ Form::text('solveDate', null,['class' => 'form-control input-sm','id' => 'datetimepicker', 'autocomplete' => 'off']) }}
                {{ $errors->first('solveDate', '<span class="label label-danger mr10 mb10">:message</span>') }}
            </div>

        </div>
        <div class=form-group>
            <label class="col-lg-2 col-md-2 col-sm-12 control-label">Recomendaciones:</label>
            <div class="col-lg-10 col-md-10">
                <textarea class="form-control limitTextarea" maxlength=250 rows=3 name="recommendations"></textarea>
            </div>
        </div>
        <div class=form-group>
            <label class="col-lg-2 col-md-10 col-sm-12 control-label"></label>
            <button type="submit" class="btn btn-success btn-alt">Registrar</button>
            </label>

        </div>
        {{ Form::close() }}
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


