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
    <h3 class=panel-title>FORMULARIO ATENCIÓN RAPIDA</h3>
</div>
<div class=panel-body>
<form class="form-horizontal group-border hover-stripped" role=form>
<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Diagnostico:</label>
    <div class="col-lg-10 col-md-10">
        <textarea class="form-control limitTextarea" maxlength=250 rows=3></textarea>
    </div>
</div>

<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Solución:</label>
    <div class="col-lg-10 col-md-10">
        <textarea class="form-control limitTextarea" maxlength=250 rows=3></textarea>
    </div>
</div>

<div class=form-group>
    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Recomendaciones:</label>
    <div class="col-lg-10 col-md-10">
       <textarea class="form-control limitTextarea" maxlength=250 rows=3></textarea>
    </div>
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


