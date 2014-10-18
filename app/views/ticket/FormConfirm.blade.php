@extends('layout.default')

@section('content')

<div id=content>
<!-- Start .content-wrapper -->
<div class=content-wrapper>
<div class=outlet>
<!-- Start .outlet -->
<!-- Page start here ( usual with .row ) -->
<div class=row>
<!-- Start .row -->
<div class="col-lg-12 col-sm-9">
<!-- Start col-lg-12 -->
<div class="panel panel-default toggle">
<!-- Start .panel -->
<div class=panel-heading>
    <h3 class=panel-title>FORMULARIO CONFIRMACIÓN TICKET</h3>
    @include('includes.TicketActions')
</div>
<div class=panel-body>
<form class="form-horizontal group-border hover-stripped" role=form>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Local:</label>
    <div class="col-lg-5 col-md-5">
        <input class="form-control input-sm" placeholder="Tienda o Oficina" autofocus>
    </div>
    <label class="col-lg-1 col-md-1 col-sm-12 control-label">Fecha:</label>
    <div class="col-lg-4 col-md-4">
        <div class=input-group>
            <input class="form-control datetime-picker1 input-sm">
            <span class=input-group-addon><i class=fa-calendar></i></span></div>
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Persona:</label>
    <div class="col-lg-6 col-md-6">
        <input type=email class="form-control input-sm" placeholder="">
    </div>
    <label class="col-lg-1 col-md-1 col-sm-12 control-label">Cargo:</label>
    <div class="col-lg-3 col-md-3">
        <select class="form-control input-sm">
            <option value=CT>Connecticut
            <option value=DE>Delaware
            <option value=FL>Florida
            <option value=GA>Georgia
            <option value=IN>Indiana
            <option value=ME>Maine
            <option value=MD>Maryland
            <option value=MA>Massachusetts
            <option value=MI>Michigan
            <option value=NH>New Hampshire
        </select>
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Tipo:</label>
    <div class="col-lg-2 col-md-2">
        <select class="form-control input-sm">
            <option value=VT>Incidencia
            <option value=VA>Mejora
            <option value=WV>Proyecto
        </select>
    </div>

    <label class="col-lg-1 col-md-1 col-sm-12 control-label">Clase:</label>
    <div class="col-lg-3 col-md-3">
        <select class="form-control input-sm">
            <option value=CT>Infraestructura
            <option value=DE>Sistema
            <option value=FL>Proceso
        </select>
    </div>
    <label class="col-lg-1 col-md-1 col-sm-12 control-label">Canal:</label>
    <div class="col-lg-3 col-md-3">
        <select class="form-control input-sm">
            <option value=CT>Connecticut
            <option value=DE>Delaware
            <option value=FL>Florida
            <option value=GA>Georgia
            <option value=IN>Indiana
            <option value=ME>Maine
            <option value=MD>Maryland
            <option value=MA>Massachusetts
            <option value=MI>Michigan
            <option value=NH>New Hampshire
        </select>
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Recurrente:</label>
    <label class="col-lg-1 col-md-1 col-sm-12 control-label">
        <input id="ProblemaRecurrente" name="ProblemaRecurrente" type="checkbox" onclick="check()" />
    </label>
    <div class="col-lg-5 col-md-5">
        <select name="Problema" id='Problema' class='form-control m-bot15' disabled='disabled'>
        </select>
    </div>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Prioridad:</label>
    <div class="col-lg-2 col-md-2">
        <select class="form-control input-sm">
            <option value=CT>Baja
            <option value=DE>Alta
            <option value=FL>Media
            <option value=GA>Urgente
        </select>
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Categoria:</label>
    <div class="col-lg-3 col-md-4">
        <select class="form-control input-sm select2">
            <optgroup label="Alaskan/Hawaiian Time Zone">
                <option value=AK>Alaska
                <option value=HI>Hawaii
            </optgroup>
            <optgroup label="Pacific Time Zone">
                <option value=CA>California
                <option value=NV>Nevada
                <option value=OR>Oregon
                <option value=WA>Washington
            </optgroup>
            <optgroup label="Mountain Time Zone">
                <option value=AZ>Arizona
                <option value=CO>Colorado
                <option value=ID>Idaho
                <option value=MT>Montana
                <option value=NE>Nebraska
                <option value=NM>New Mexico
                <option value=ND>North Dakota
                <option value=UT>Utah
                <option value=WY>Wyoming
            </optgroup>
            <optgroup label="Central Time Zone">
                <option value=AL>Alabama
                <option value=AR>Arkansas
                <option value=IL>Illinois
                <option value=IA>Iowa
                <option value=KS>Kansas
                <option value=KY>Kentucky
                <option value=LA>Louisiana
                <option value=MN>Minnesota
                <option value=MS>Mississippi
                <option value=MO>Missouri
                <option value=OK>Oklahoma
                <option value=SD>South Dakota
                <option value=TX>Texas
                <option value=TN>Tennessee
                <option value=WI>Wisconsin
            </optgroup>
            <optgroup label="Eastern Time Zone">
                <option value=CT>Connecticut
                <option value=DE>Delaware
                <option value=FL>Florida
                <option value=GA>Georgia
                <option value=IN>Indiana
                <option value=ME>Maine
                <option value=MD>Maryland
                <option value=MA>Massachusetts
                <option value=MI>Michigan
                <option value=NH>New Hampshire
                <option value=NJ>New Jersey
                <option value=NY>New York
                <option value=NC>North Carolina
                <option value=OH>Ohio
                <option value=PA>Pennsylvania
                <option value=RI>Rhode Island
                <option value=SC>South Carolina
                <option value=VT>Vermont
                <option value=VA>Virginia
                <option value=WV>West Virginia
            </optgroup>
        </select>
    </div>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">SubCategoria:</label>
    <div class="col-lg-6 col-md-4">
        <select class="form-control input-sm">
            <option value=CT>Connecticut
            <option value=DE>Delaware
            <option value=FL>Florida
            <option value=GA>Georgia
            <option value=IN>Indiana
            <option value=ME>Maine
            <option value=MD>Maryland
            <option value=MA>Massachusetts
            <option value=MI>Michigan
            <option value=NH>New Hampshire
        </select>
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Especifico:</label>
    <div class="col-lg-3 col-md-3">
        <select class="form-control input-sm">
            <option value=CT>Connecticut
            <option value=DE>Delaware
            <option value=FL>Florida
            <option value=GA>Georgia
            <option value=IN>Indiana
            <option value=ME>Maine
            <option value=MD>Maryland
            <option value=MA>Massachusetts
            <option value=MI>Michigan
            <option value=NH>New Hampshire
        </select>
    </div>
    <label class="col-lg-1 col-md-1 col-sm-12 control-label">Activo:</label>
    <div class="col-lg-2 col-md-2">
        <input class="form-control input-sm" type="text"/>
    </div>
    <div class="col-lg-4 col-md-4">
        <button id=error-notice type=button class="btn btn-danger mr4 mb4" disabled="">Existe</button>
        <button id=sticky-notice type=button class="btn btn-info mr4 mb4" disabled="">No Existe</button>
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Descripción:</label>
    <div class="col-lg-10 col-md-10">
        <textarea class="form-control limitTextarea" maxlength=250 rows=3></textarea>
    </div>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Adjunto:</label>
    <div class="col-lg-6 col-md-6">
        <input type=file>
    </div>
    <label class="col-lg-3 col-md-3 col-sm-12 control-label">Atención Rapida:</label>
    <label class="col-lg-1 col-md-1 col-sm-12 control-label">
        <input id="ProblemaRecurrente" name="ProblemaRecurrente" type="checkbox" onclick="check()" />
    </label>
</div>
<div class=form-group>
    <label class="col-lg-2 col-md-10 col-sm-12 control-label"></label>
    <button type=button class="btn btn-success btn-alt">Registrar</button>
    </label>

</div>
</form>
</div>
</div>
<!-- End .panel -->
</div>
<!-- End col-lg-12 -->

<!-- Start .row -->
<div class="col-lg-3 col-sm-3">
    <!-- Start col-lg-12 -->
    <div class="panel panel-default toggle">
        <!-- Start .panel -->
        <div class=panel-heading>
            <h3 class=panel-title>INFORMACIÓN SOLICITANTE</h3>
        </div>
        <div class=panel-body>
            <form class=form-horizontal role=form>
                    <p>Razón Social:<input type="text" class="form-control input-sm" id="rs" name="rs" class="rs" disabled="disabled"/></p>
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
<!-- End col-lg-12 -->
</div>
<!-- End .row -->
<!-- Page End here -->
</div>
<!-- End .outlet -->
</div>
<!-- End .content-wrapper -->
<div class=clearfix></div>
</div>

@stop


