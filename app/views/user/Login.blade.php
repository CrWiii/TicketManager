<!DOCTYPE html>
<html lang="es-ES">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset=utf-8>
    <title>Login</title>
    <!-- Mobile specific metas -->
    <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- Force IE9 to render in normal mode -->
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <!-- Import google fonts - Heading first/ text second -->
    <link rel=stylesheet type=text/css href="http://fonts.googleapis.com/css?family=Open+Sans:400,700|Droid+Sans:400,700">
    <!--[if lt IE 9]>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:700" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400" rel="stylesheet" type="text/css" />
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans:700" rel="stylesheet" type="text/css" />
    <![endif]-->
    <!-- Css files -->
    <!-- build:css assets/css/main.min.css -->
    <!-- Icons -->
    <link href="{{ asset('assets/css/icons.css') }}" rel=stylesheet>
    <!-- jQueryUI -->
    <link href="{{ asset('assets/css/sprflat-theme/jquery.ui.all.css') }}" rel=stylesheet>
    <!-- Bootstrap stylesheets (included template modifications) -->
    <link href="{{ asset('assets/css/bootstrap.css') }}" rel=stylesheet>
    <!-- Plugins stylesheets (all plugin custom css) -->
    <link href="{{ asset('assets/css/plugins.css') }}" rel=stylesheet>
    <!-- Main stylesheets (template main css file) -->
    <link href="{{ asset('assets/css/main.css' ) }}" rel=stylesheet>
    <!-- Custom stylesheets ( Put your own changes here ) -->
    <link href="{{ asset('assets/css/custom.css') }}" rel=stylesheet>
    <!-- endbuild -->
    <!-- Fav and touch icons -->
    <link rel=apple-touch-icon-precomposed sizes=144x144 href="{{ asset('assets/img/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel=apple-touch-icon-precomposed sizes=114x114 href="{{ asset('assets/img/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel=apple-touch-icon-precomposed sizes=72x72 href="{{ asset('assets/img/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel=apple-touch-icon-precomposed href="{{ asset('assets/img/ico/apple-touch-icon-57-precomposed.png') }}">
    <link rel=icon href="{{ asset('assets/img/ico/favicon.ico type=image/png') }}">
    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name=msapplication-TileColor content=#3399cc>
</head>
<body class=login-page>
<!-- Start #login -->
<div id=login class="animated bounceIn"><img id=logo src="" alt=sprFlat Logo">
    <!-- Start .login-wrapper -->
    <div class=login-wrapper>
        <ul id=myTab class="nav nav-tabs nav-justified bn">
                <li><a href=#log-in data-toggle=tab>Login</a></li>

        </ul>
        <div id=myTabContent class="tab-content bn">
            <div class="tab-pane fade active in" id=log-in>
                {{ Form::open(['route' => 'login', 'method' => 'POST', 'role' => 'form', 'class' => 'form-horizontal mt10']) }}
                @if (Session::has('login_error'))
                    <div class="alert alert-danger fade in">
                        <button type=button class=close data-dismiss=alert aria-hidden=true>&times;</button>
                        Credenciales <strong>no validas</strong></div>
                @endif
                    <div class=form-group>
                        <div class=col-lg-12>
                            {{ Form::text('username', null,['class' => 'form-control left-icon', 'placeholder' => 'INGRESA TU USUARIO']) }}
                            <i class="ec-user s16 left-input-icon"></i></div>
                    </div>
                    <div class=form-group>
                        <div class=col-lg-12>
                            {{ Form::password('password', ['class' => 'form-control left-icon', 'placeholder' => 'INGRESA TU CONTRASEÑA']) }}
                            <i class="im-key2 s16 left-input-icon"></i></div>
                        <i class="ec-locked s16 left-input-icon"></i> <span class=help-block><a href="{{ route('sign_up') }}"><small>Registrarme</small></a></span>

                    </div>
                    <div class=form-group>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-8">
                            <!-- col-lg-12 start here -->
                            <label class=checkbox>
                                <!--<input type=checkbox name=remember id=remember value=option>-->
                                {{ Form::checkbox('remember') }}
                                Recordarme ?</label>
                        </div>

                        <!-- col-lg-12 end here -->
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-4">
                            <!-- col-lg-12 start here -->
                            <button class="btn btn-success pull-right" type=submit>Login</button>
                        </div>
                        <!-- col-lg-12 end here -->
                    </div>
                {{ Form::close() }}
            </div>

        </div>
    </div>
    <!-- End #.login-wrapper -->
</div>
<!-- End #login -->
<!-- Javascripts -->
<!-- Load pace first -->
</body>
<script src="{{ asset('assets/plugins/core/pace/pace.min.js') }}"></script>
<!-- Important javascript libs(put in all pages) -->
<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-2.1.1.min.js">\x3C/script>')</script>
<script src="{{ asset('assets/js/libs/jquery-ui-1.10.4.min.js') }}"></script>
<script>window.jQuery || document.write('<script src="assets/js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')</script>
<!--[if lt IE 9]>
<script type="text/javascript" src="{{ asset('assets/js/libs/excanvas.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/html5.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/js/libs/respond.min.js') }}"></script>
<![endif]-->
<!-- build:js assets/js/pages/login.js -->
<!-- Bootstrap plugins -->
<script src="{{ asset('assets/js/bootstrap/bootstrap.js') }}"></script>
<!-- Form plugins -->
<script src="{{ asset('assets/plugins/forms/icheck/jquery.icheck.js') }}"></script>
<script src="{{ asset('assets/plugins/forms/validation/jquery.validate.js') }}"></script>
<script src="{{ asset('assets/plugins/forms/validation/additional-methods.min.js') }}"></script>
<!-- Init plugins olny for this page -->
<!--<script src="{{ asset('assets/js/pages/login.js') }}"></script>-->
<!-- endbuild -->
<!--<script src="{{ asset('assets/js/pages/login.js') }}"></script>-->
<!-- Google Analytics:  -->


</html>
