@extends('layout.default')

@section('scripts')
{{ HTML::script('assets/js//pages/forms.js') }}
{{ HTML::script('assets/js/select2.js') }}
{{ HTML::script('assets/js/ajax.js') }}
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
    <h3 class=panel-title>FORMULARIO DIAGNISTICO TICKET</h3>
</div>
<div class=panel-body>
    {{ Form::open(['route' => 'diagnose_ticket', 'method' => 'POST', 'role' => 'form', 'class' => 'form-horizontal group-border hover-stripped']) }}

<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Datos Ticket:</label>
    <div class="col-lg-4 col-md-4">

    </div>
</div>

<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Clase:</label>
    <div class="col-lg-3 col-md-3">
        {{Form::select('Class_Id', $TM_Class, null, array('class' => 'form-control input-sm', 'id' => 'Class'))}}
        {{ $errors->first('Class_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
        {{ Form::hidden('Ticket_Id', $Ticket->id, ['class' => 'form-control input-sm']) }}
        {{ Form::hidden('User_Id', Auth::user()->id, ['class' => 'form-control input-sm']) }}
    </div>
    <label class="col-lg-3 col-md-3 col-sm-12 control-label">Categoria:</label>
    <div class="col-lg-3 col-md-3">
        <select name="Category_Id" id="Category" class='form-control input-sm'><option value="">Seleccione Categorias</option></select>
        {{ $errors->first('Category_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">SubCategoria:</label>
    <div class="col-lg-4 col-md-4">
        <select name="SubCategory_Id" id="SubCategory" class='form-control input-sm'><option value="">Seleccione SubCategoria</option></select>
        {{ $errors->first('SubCategory_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Especifico:</label>
    <div class="col-lg-3 col-md-3">
        <select name="Specify_Id" id="Specify" class='form-control input-sm'><option value="">Seleccione Especifico</option></select>
        {{ $errors->first('Specify_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Diagnistico:</label>
    <div class="col-lg-6 col-md-6">
        <textarea class="form-control limitTextarea" maxlength=250 rows=3 name="Diagnose"></textarea>
    </div>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Fecha Diagnistico:</label>
    <div class="col-lg-2 col-md-2">
        {{ Form::text('DiagnoseDate', null,['class' => 'form-control input-sm','id' => 'datetimepicker', 'autocomplete' => 'off']) }}
        {{ $errors->first('DiagnoseDate', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Posible Solución:</label>
    <div class="col-lg-6 col-md-6">
        <textarea class="form-control limitTextarea" maxlength=250 rows=3 name="possibleSolve"></textarea>
    </div>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Fecha Posible Solución:</label>
    <div class="col-lg-2 col-md-2">
        {{ Form::text('possibleSolveDate', null,['class' => 'form-control input-sm','id' => 'datetimepicker2', 'autocomplete' => 'off']) }}
        {{ $errors->first('possibleSolveDate', '<span class="label label-danger mr10 mb10">:message</span>') }}
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

</div>

</div>

</div>

</div>

<div class=clearfix></div>
</div>

@stop


