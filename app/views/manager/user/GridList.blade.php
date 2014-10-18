@extends('layout.default')

@section('scripts')
{{ HTML::script('assets/js//pages/forms.js') }}
@endsection


@section('content')

<div id=content>
    <div class=content-wrapper>
        <div class=row>
            <div class="col-lg-12 heading">
            </div>
        </div>
        <div class=outlet>
            <div class=row>
            </div>
            <div class="col-lg-12 ui-sortable">
                <div class="panel panel-primary panelMove toggle panelRefresh panelClose">
                    <div class=panel-heading>
                        <h4 class=panel-title>Lista de Usuarios</h4>
                    </div>
                    <div class=panel-body>
                        <div class=panel-body>
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>N</th>
                                    <th>Usuario</th>
                                    <th>Nombre</th>
                                    <th>Correo</th>
                                    <th>Tipo</th>
                                    <th>Grupo</th>
                                    <th>Estado</th>
                                    <th>Fecha Registro</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($Users as $User)
                                <tr class="odd gradeX">
                                    <td><a href="#">{{ $User->id }}</a></td>
                                    <td>{{ $User->username }}</td>
                                    <td>{{ $User->FullName }}</td>
                                    <td>{{ $User->email }}</td>
                                    <td>{{ $User->type }}</td>
                                    <td>{{ $User->Class_Id }}</td>
                                    <td>{{ $User->Status }}</td>
                                    <td>{{ $User->created_at }}</td>
                                    <td></td>

                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <center>{{ $Users->links() }}</center>



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=clearfix></div>
    </div>

    @stop
