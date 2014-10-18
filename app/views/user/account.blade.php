@extends('layout.default')

@section('scripts')
{{ HTML::script('assets/js//pages/forms.js') }}

@endsection

@section('content')


<div id=content>

    <div class=content-wrapper>
        <div class=row>

            <div class="col-lg-12 heading">
                <h3 class=page-header><i class=ec-user></i>Edita tu Cuenta:</h3>
            </div>

        </div>

        <div class=outlet>
            <div class=row>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default plain profile-widget">
                        <div class="panel-heading white-bg pl0 pr0"></div>
                        <div class=panel-body>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class=profile-avatar><img class=img-responsive src=assets/img/avatars/132.jpg alt=@roybarberuk></div>
                            </div>
                            <div class="col-lg-8 col-md-12 col-sm-12">
                                <div class=profile-name>{{ Auth::user()->FullName }} <span class="label label-success">{{ Auth::user()->type }}</span></div>
                                <div class=profile-name><h5>{{ Auth::user()->emaio }}</h5> </div>
                                <div class=profile-name><h5>{{ Auth::user()->username }}</h5></div>
                                <div class=profile-name><h5>{{ Auth::user()->StatusTitle }}</h5></div>
                                <div class=profile-name><h5>{{ Auth::user()->created_at }}</h5></div>
                                <div class=profile-quote>
                                    <p></p>
                                </div>
                                <div class=profile-stats-info><a href=# class=tipB title="Ticket's Registrados"><i class=im-eye2></i> <strong>5600</strong></a> <a href=# class=tipB title="Ticket's Pendientes"><i class=im-bubble></i> <strong>75</strong></a> <a href=# class=tipB title="Ticket's Solucionados"><i class=im-heart></i> <strong>45</strong></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="panel panel-default plain profile-widget">
                        <div class="panel-heading white-bg pl0 pr0"></div>
                        <div class="panel-footer white-bg">

                            <div class="tab-pane fade active in" id=register>
                                {{ Form::model($user, ['route' => 'update_account', 'method' => 'PUT', 'role' => 'form', 'class' => 'form-horizontal mt20','novalidate']) }}

                                {{ Field::input('text', 'username') }}

                                {{ Field::input('text', 'FullName') }}

                                {{ Field::input('email', 'email') }}

                                {{ Field::input('password', 'password') }}

                                {{ Field::password('password_confirmation', ['placeholder' => 'Repite tu clave']) }}

                                <div class=col-lg-12>
                                    <button type="submit" class="btn btn-success btn-block">Actualizar</button>
                                </div>
                                <!-- col-lg-12 end here -->
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