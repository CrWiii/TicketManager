@extends('layout.default')

@section('scripts')
{{ HTML::script('assets/js/pages/buttons.js') }}
{{ HTML::script('assets/js/select.js') }}
{{ HTML::script('assets/js/autocomplete.js') }}
@endsection


@section('content')

<div id=content>
    <div class=content-wrapper>
        <div class=outlet>
            <div class="col-lg-12 ui-sortable">
                <div class="panel panel-primary panelMove toggle panelRefresh panelClose">
                    <div class=panel-heading>
                        <h4 class=panel-title>LISTA DE TICKETS</h4>
                    </div>
                    <div class=panel-body>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 text-center">
                                    <!--<div class="col-lg-12 col-md-12 text-center">-->
                                        <div class=form-group>
                                            <label class="col-lg-1 col-md-1 col-sm-12 control-label">Local:</label>
                                            <div class="col-lg-2 col-md-2">
                                                {{ Form::text('Local', null,['class' => 'form-control input-sm', 'autofocus'=>'autofocus', 'id' => 'local']) }}
                                            </div>
                                            <label class="col-lg-1 col-md-1 control-label">Estado:</label>
                                            <div class="col-lg-2 col-md-2">
                                                {{Form::select('State_Id', $TM_State, null, array('class' => 'form-control input-sm', 'id' => 'State'))}}
                                            </div>
                                            <label class="col-lg-1 col-md-1 control-label">Clase:</label>
                                            <div class="col-lg-2 col-md-2">
                                                {{Form::select('Class_Id', $TM_Class, null, array('class' => 'form-control input-sm', 'id' => 'Class'))}}
                                            </div>

                                            <label class="col-lg-1 col-md-1 control-label">Situación:</label>
                                            <div class="col-lg-2 col-md-2">
                                                <select name="" id="" class="form-control input-sm"></select>
                                            </div>
                                        </div>

                                        <hr/>

                                        <div class="form-group">
                                            <label class="col-lg-1 col-md-1 control-label">Asignado:</label>
                                            <div class="col-lg-2 col-md-2">
                                                {{ Form::text('Local', null,['class' => 'form-control input-sm', 'id' => 'local']) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-1 col-md-1 control-label">Categoria:</label>
                                            <div class="col-lg-2 col-md-2">
                                                <select name="Category_Id" id="Category" class='form-control input-sm'><option value="">Seleccione Categorias</option></select>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class=form-group>
                                            <label class="col-lg-2 col-md-10 control-label"></label>
                                            <button type="submit" class="btn btn-success btn-alt">Buscar</button>
                                            </label>

                                        </div>
                        </div>
                                    <hr/>
                        <div class=panel-body>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>N</th>
                                    <!--<th>Fecha Registro</th>-->
                                    <th>Fecha Ticket</th>
                                    <th>Solicitante</th>
                                    <th>Responsable</th>
                                    <th>Estado</th>
                                    <th>Categoria</th>
                                    <th>Subcategoria</th>
                                    <!--<th>Especifico</th>-->
                                    <!--<th>Prioridad</th>-->
                                    <th>Canal</th>
                                    <th>Situación</th>
                                </tr>
                                </thead>
                                <tbody>
                                <!--
                                USER::Mostrar[PARA TOMAR ACTION] los Tickets con ESTADO ASIGNADO a los cuales EL USUARIO LOGEADO ES RESPONSABLE
                                USER::Mostrar[PARA SOLO VISUALIZAR] TODOS LOS TICKETS
                                MANAGER::Mostrar[PARA TOMAR ACTION] los Tickets con ESTADO REGISTRADO condicionando a la CLASS que pertenecer el manager
                                MANAGER::Mostrar[PARA SOLO VISUALIZAR] TODOS LOS TICKETS
                                -->

                                @foreach($Tickets as $Ticket)
                                <tr class="odd gradeX">
                                    <td><a href="{{ route('show_ticket', [$Ticket->id]) }}">{{ $Ticket->id }}</a></td>
                                    <!--<td>{{ $Ticket->created_at }}</td>-->
                                    <td>{{ $Ticket->DateTicket }}</td>
                                    <td>{{ $Ticket->applicants->Description }}</td>
                                    <td>{{ $Ticket->Responsible->username }}</td>
                                    <td>{{ $Ticket->States->Description }}</td>
                                    <td>{{ $Ticket->Categories->Description }}</td>
                                    <td>{{ $Ticket->SubCategories->Description }}</td>
                                    <!--<td>{{ $Ticket->Specifies->Description }}</td>-->
                                    <!--<td>{{ $Ticket->Priorities->Description }}</td>-->
                                    <td>{{ $Ticket->Channels->Description }}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <center>{{ $Tickets->links() }}</center>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=clearfix>
    </div>
</div>
</div>

@stop
