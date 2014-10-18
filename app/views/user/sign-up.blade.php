<!DOCTYPE html>
<html lang="es-ES">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset=utf-8>
    <title>Login | sprFlat - Admin Template</title>
    <!-- Mobile specific metas -->
    <meta name=viewport content="width=device-width,initial-scale=1,maximum-scale=1">
    <!-- Force IE9 to render in normal mode -->
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name=author content=SuggeElson>
    <meta name=description content="sprFlat admin template - new premium responsive admin template. This template is designed to help you build the site administration without losing valuable time.Template contains all the important functions which must have one backend system.Build on great twitter boostrap framework">
    <meta name=keywords content="admin, admin template, admin theme, responsive, responsive admin, responsive admin template, responsive theme, themeforest, 960 grid system, grid, grid theme, liquid, jquery, administration, administration template, administration theme, mobile, touch , responsive layout, boostrap, twitter boostrap">
    <meta name=application-name content="sprFlat admin template">
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
<div id=login class="animated bounceIn"><img id=logo src="{{ asset('assets/img/logo.png') }}" alt=sprFlat Logo">
    <!-- Start .login-wrapper -->
    <div class=login-wrapper>
        <ul id=myTab class="nav nav-tabs nav-justified bn">
            <li><a href=#register data-toggle=tab>Register</a></li>
        </ul>
        <div id=myTabContent class="tab-content bn">
            <div class="tab-pane fade active in" id=register>
                {{ Form::open(['route' => 'register', 'method' => 'POST', 'role' => 'form', 'class' => 'form-horizontal mt20','novalidate']) }}
                <div class=form-group>
                    <div class=col-lg-12>
                        <!-- col-lg-12 start here -->
                        {{ Form::text('username', null,['class' => 'form-control left-icon', 'placeholder' => 'INGRESA TU USUARIO']) }}
                        <i class="ec-user s16 left-input-icon"></i>
                        {{ $errors->first('username', '<span class="label label-danger mr10 mb10">:message</span>') }}
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
                <div class=form-group>
                    <div class=col-lg-12>
                        <!-- col-lg-12 start here -->
                        {{ Form::text('FullName', null,['class' => 'form-control left-icon', 'placeholder' => 'INGRESA TU NOMBRE']) }}
                        <i class="ec-mail s16 left-input-icon"></i>
                        {{ $errors->first('FullName', '<span class="label label-danger mr10 mb10">:message</span>') }}
                    </div>
                    <!-- col-lg-12 end here -->
                </div>

                <div class=form-group>
                    <div class=col-lg-12>
                        <!-- col-lg-12 start here -->
                        {{ Form::text('email', null,['class' => 'form-control left-icon', 'placeholder' => 'INGRESA TU CORREO']) }}
                        <i class="ec-mail s16 left-input-icon"></i>
                        {{ $errors->first('email', '<span class="label label-danger mr10 mb10">:message</span>') }}
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
                <div class=form-group>
                    <div class=col-lg-12>
                        <!-- col-lg-12 start here -->
                        {{ Form::password('password', ['class' => 'form-control left-icon', 'placeholder' => 'INGRESA TU CONTRASEÑA']) }}
                        <i class="ec-locked s16 left-input-icon"></i>
                        {{ $errors->first('password', '<span class="label label-danger mr10 mb10">:message</span>') }}
                    </div>
                    <!-- col-lg-12 end here -->
                    <div class="col-lg-12 mt15">
                        <!-- col-lg-12 start here -->
                        {{ Form::password('password_confirmation', ['class' => 'form-control left-icon', 'placeholder' => 'REPITE TU CONTRASEÑA']) }}
                        <i class="ec-locked s16 left-input-icon"></i>
                        {{ $errors->first('password_confirmation', '<span class="label label-danger mr10 mb10">:message</span>') }}
                    </div>
                    <!-- col-lg-12 end here -->
                </div>
                <div class=form-group>
                    <div class=col-lg-12>
                        <!-- col-lg-12 start here -->

                        <button type="submit" class="btn btn-success btn-block">Register</button>
                        <span class=help-block><a href="{{ route('home') }}"><small>Login</small></a></span>
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
