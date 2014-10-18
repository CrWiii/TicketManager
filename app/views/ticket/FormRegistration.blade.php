@extends('layout.default')

@section('scripts')
{{ HTML::script('assets/js//pages/forms.js') }}
{{ HTML::style( 'assets/css/jquery.datetimepicker.css', array('media' => 'screen')) }}
{{ HTML::script('assets/js/jquery.datetimepicker.js') }}
{{ HTML::script('assets/js/select.js') }}
{{ HTML::script('assets/js/autocomplete.js') }}
{{ HTML::script('assets/js/dateTimePicker.js') }}
@endsection

@section('content')

<style>
    .ui-autocomplete {
        max-height: 100px;
        overflow-y: auto;
        /* prevent horizontal scrollbar */
        overflow-x: hidden;
    }
    /* IE 6 doesn't support max-height
     * we use height instead, but this forces the menu to always be this tall
     */
    * html .ui-autocomplete {
        height: 100px;
    }
</style>

<div id="content">
<div class="content-wrapper">
<div class=outlet>

<div class="row">

<div class="col-lg-12 col-sm-9">

<div class="panel panel-default toggle">

<div class=panel-heading>
    <h3 class=panel-title>FORMULARIO REGISTRO TICKET</h3>
</div>
<div class=panel-body>
{{ Form::open(['route' => 'register_ticket', 'method' => 'POST', 'role' => 'form', 'class' => 'form-horizontal group-border hover-stripped', 'files' => true]) }}
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Local:</label>
    <div class="col-lg-4 col-md-4">
        {{ Form::text('Local', null,['class' => 'form-control input-sm', 'placeholder' => 'TIENDA O OFICINA QUE REPORTA', 'autofocus'=>'autofocus', 'id' => 'local']) }}
        {{ $errors->first('Local_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
        {{ Form::hidden('Local_Id', null,['class' => 'form-control input-sm', 'id' => 'Local_Id']) }}
    </div>
    <label class="col-lg-1 col-md-1 col-sm-12 control-label">Fecha:</label>
    <div class="col-lg-3s col-md-3">
        {{ Form::text('DateTicket', null,['class' => 'form-control input-sm','id' => 'datetimepicker', 'autocomplete' => 'off']) }}
        {{ $errors->first('DateTicket', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
</div><!-- Local Fecha -->
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Persona:</label>
    <div class="col-lg-6 col-md-6">
        {{ Form::text('Person',null, ['class' => 'form-control input-sm', 'placeholder' => 'NOMBRE DE PERSONA QUE REPORTA', 'id' => 'Person' ]) }}
        {{ Form::hidden('Person_Id', null,['class' => 'form-control input-sm', 'id' => 'Person_Id']) }}
        {{ $errors->first('Person_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>

    <label class="col-lg-1 col-md-1 col-sm-12 control-label">Cargo:</label>
    <div class="col-lg-3 col-md-3">
        {{Form::select('Charge_Id', $TM_Charge, null, array('class' => 'form-control input-sm'))}}
        {{ $errors->first('Charge_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Tipo:</label>
    <div class="col-lg-3 col-md-3">
        {{Form::select('Type_Id', $TM_Type, null, array('class' => 'form-control input-sm'))}}
        {{ $errors->first('Type_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>

    <label class="col-lg-1 col-md-1 col-sm-12 control-label">Clase:</label>
    <div class="col-lg-3 col-md-3">
        {{Form::select('Class_Id', $TM_Class, null, array('class' => 'form-control input-sm', 'id' => 'Class'))}}
        {{ $errors->first('Class_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
    <label class="col-lg-1 col-md-1 col-sm-12 control-label">Canal:</label>
    <div class="col-lg-2 col-md-2">
        {{Form::select('Channel_Id', $TM_Channel, null, array('class' => 'form-control input-sm'))}}
        {{ $errors->first('Channel_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Categoria:</label>
    <div class="col-lg-3 col-md-4">
        <select name="Category_Id" id="Category" class='form-control input-sm'><option value="">Seleccione Categorias</option></select>
        {{ $errors->first('Category_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">SubCategoria:</label>
    <div class="col-lg-6 col-md-4">
        <select name="SubCategory_Id" id="SubCategory" class='form-control input-sm'><option value="">Seleccione SubCategoria</option></select>
        {{ $errors->first('SubCategory_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Especifico:</label>
    <div class="col-lg-3 col-md-3">
        <select name="Specify_Id" id="Specify" class='form-control input-sm'><option value="">Seleccione Especifico</option></select>
        {{ $errors->first('Specify_Id', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
    <label class="col-lg-1 col-md-1 col-sm-12 control-label">Activo:</label>
    <div class="col-lg-2 col-md-2">
        {{ Form::text('Active', null,['class' => 'form-control input-sm']) }}
        {{ $errors->first('Active', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Prioridad:</label>
    <div class="col-lg-2 col-md-2">
        {{Form::select('Priority_Id', $TM_Priority, null, array('class' => 'form-control input-sm'))}}
    </div>

</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Descripción:</label>
    <div class="col-lg-10 col-md-10">
        {{ Form::textarea('Description', null, array('class' => 'form-control limitTextarea', 'maxlength' => '350', 'rows' => '3')) }}
        {{ $errors->first('Description', '<span class="label label-danger mr10 mb10">:message</span>') }}
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Adjunto:</label>
    <div class="col-lg-6 col-md-6">
        {{ Form::file('attached') }}
    </div>
    <label class="col-lg-3 col-md-3 col-sm-12 control-label">Atención Rapida:</label>
    <label class="col-lg-1 col-md-1 col-sm-12 control-label">
        <input id="ProblemaRecurrente" name="ProblemaRecurrente" type="checkbox" onclick="check()" />
    </label>
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

<div class="col-lg-3 col-sm-3">
    <!-- Start col-lg-12 -->
    <div class="panel panel-default toggle">
        <!-- Start .panel -->
        <div class=panel-heading>
            <h3 class=panel-title>INFORMACIÓN SOLICITANTE</h3>
        </div>
        <div class=panel-body>
            <form class=form-horizontal role=form>
                    <p>Razón Social:<input type="text" class="form-control input-sm" id="Local_Id" name="rs" class="rs" disabled="disabled"/></p>
                    <p>Ruc:<input type="text" class="form-control input-sm" id="ruc" name="ruc" disabled="disabled"/></p>
                    <p>Direccion:<input type="text" class="form-control input-sm" id="adreess" name="Direccion" disabled="disabled"/></p>
                    <p>IP Servidor:<input type="text" class="form-control input-sm" id="ip" name="ip" disabled="disabled"/></p>
                    <p>Maneja Delivery:<input type="text" class="form-control input-sm" id="Delivery" name="Delivery" disabled="disabled"/></p>
                    <p>RPC:<input type="text" class="form-control input-sm" id="RPC" name="RPC" disabled="disabled"/></p>
                    <p>Anexo:<input type="text" class="form-control input-sm" id="Anexo" name="Anexo" disabled="disabled"/></p>
                    <p>Telefono Fijo:<input type="text" class="form-control input-sm" id="TelefonoFijo" name="TelefonoFijo" disabled="disabled"/></p>
                    <p>Terminal A:<input type="text" class="form-control input-sm" id="UTA" name="UTA" disabled="disabled"/></p>
                    <p>Terminal C:<input type="text" class="form-control input-sm" id="UTC" name="UTC" disabled="disabled"/></p>
                    <p>@ Adminsitracion:<input type="text" class="form-control input-sm" id="CorreoAdminsitracion" name="CorreoAdminsitracion" disabled="disabled"/></p>
                    <p>@ Control:<input type="text" class="form-control input-sm" id="CorreoControl" name="CorreoControl" disabled="disabled"/></p>
                    <p>Marca:<input type="text" class="form-control input-sm" type="text" class="form-control" id="Marca" name="Marca" disabled="disabled"/></p>
                    <p>Sector:<input type="text" class="form-control input-sm" id="Sector" name="Sector" disabled="disabled"/></p>
                    <p>Zona:<input type="text" class="form-control input-sm" id="Zona" name="Zona" disabled="disabled"/></p>

                <!-- End .form-group  -->
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


