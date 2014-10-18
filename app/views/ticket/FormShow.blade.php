@extends('layout.default')


@section('scripts')
{{ HTML::script('assets/js/pages/buttons.js') }}
@endsection


@section('content')

<div id="content">
    <div class="content-wrapper">
        <div class=outlet>
            <div class="row">
                <div class="col-lg-12 col-sm-9">
                    <div class="panel panel-default toggle">
                        <div class=panel-heading>
                            <h3 class=panel-title>VER TICKET</h3>
                            @include('includes.TicketActions')
                        </div>
                        <div class=panel-body>
                            {{ Form::open(['route' => 'show_ticket', 'method' => 'GET', 'role' => 'form', 'class' => 'form-horizontal group-border hover-stripped', 'files' => true]) }}
                            <div class=form-group>
                                <div>
                                    <label class="col-lg-2 col-md-2 col-sm-12 control-label">Ticket:</label>
                                    <div class="col-lg-2 col-md-2">
                                        {{ Form::text('id', $Ticket->id, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                    </div>
                                </div>
                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">Local:</label>
                                <div class="col-lg-3 col-md-3">
                                    {{ Form::text('Local',$Ticket->applicants->Description, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                </div>
                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">Fecha:</label>
                                <div class="col-lg-3 col-md-3">
                                    {{ Form::text('DateTicket',$Ticket->DateTicket, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                </div>
                            </div><!-- Local Fecha -->
                            <div class=form-group>
                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Persona:</label>
                                <div class="col-lg-6 col-md-6">
                                    {{ Form::text('Person',$Ticket->Persons->search, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}

                                </div>

                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">Cargo:</label>
                                <div class="col-lg-3 col-md-3">
                                    {{ Form::text('Charge', $Ticket->Charges->Description, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                </div>
                            </div>
                            <div class=form-group>
                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Tipo:</label>
                                <div class="col-lg-3 col-md-3">
                                    {{ Form::text('Type', $Ticket->Types->Description, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                </div>

                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">Clase:</label>
                                <div class="col-lg-3 col-md-3">
                                    {{ Form::text('Class', $Ticket->Classes->Description, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                </div>
                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">Canal:</label>
                                <div class="col-lg-2 col-md-2">
                                    {{ Form::text('Channel', $Ticket->Channels->Description, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                </div>
                            </div>
                            <div class=form-group>
                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Categoria:</label>
                                <div class="col-lg-3 col-md-4">
                                    {{ Form::text('Category', $Ticket->Categories->Description, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                </div>
                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">SubCategoria:</label>
                                <div class="col-lg-6 col-md-4">
                                    {{ Form::text('SubCategory', $Ticket->SubCategories->Description, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                </div>
                            </div>
                            <div class=form-group>
                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Especifico:</label>
                                <div class="col-lg-3 col-md-3">
                                    {{ Form::text('Specify', $Ticket->Specifies->Description, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                </div>
                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">Activo:</label>
                                <div class="col-lg-2 col-md-2">
                                    {{ Form::text('Active', $Ticket->Active,['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                </div>
                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Prioridad:</label>
                                <div class="col-lg-2 col-md-2">
                                    {{ Form::text('Priority', $Ticket->Priorities->Description, ['class' => 'form-control input-sm', 'disabled' => 'disabled']) }}
                                </div>

                            </div>
                            <div class=form-group>
                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Descripción:</label>
                                <div class="col-lg-10 col-md-10">
                                    {{ Form::textarea('Description', $Ticket->Description, array('class' => 'form-control limitTextarea', 'maxlength' => '350', 'rows' => '3', 'disabled' => 'disabled')) }}
                                </div>
                            </div>
                            <div class=form-group>
                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Adjunto:</label>
                                <div class="col-lg-6 col-md-6">
                                    {{ Form::file('attached', ['disabled' => 'disabled']) }}
                                </div>
                                <label class="col-lg-3 col-md-3 col-sm-12 control-label">Atención Rapida:</label>
                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">
                                    <input id="" name="" type="checkbox" onclick="check()" disabled/>
                                </label>
                            </div>
                            <div class=form-group>
                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">{{ $Ticket->User_Id }}</label>
                                <label class="col-lg-2 col-md-2 col-sm-12 control-label">Registado Por:</label>
                                <label class="col-lg-3 col-md-3 col-sm-12 control-label">Fecha Registro:</label>
                                <label class="col-lg-3 col-md-3 col-sm-12 control-label">Ultima Actualización:</label>
                                <label class="col-lg-1 col-md-1 col-sm-12 control-label">Estado:</label>



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


