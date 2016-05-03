<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Админ | страница авторизации</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    {{ HTML::style('admin_themes/css/bootstrap.min.css') }}
    {{ HTML::style('admin_themes/css/bootstrap-responsive.min.css') }}
    {{ HTML::style('admin_themes/css/style.css') }}
    {{ HTML::style('admin_themes/css/style-responsive.css') }}
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        {{ HTML::style('admin_themes/css/ie.css')}}
    <![endif]-->

    <!--[if IE 9]>
        {{ HTML::style('admin_themes/css/ie9.css')}}
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="/admin_themes/img/favicon.ico">
    <!-- end: Favicon -->

    <style type="text/css">
        body { background: url(admin_themes/img/bg-login.jpg) !important; }
    </style>



</head>

<body>
<div class="container-fluid-full">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="login-box">
                <div class="icons">
                    <a href="/"><i class="halflings-icon home"></i></a>
                </div>
                {{ Form::open(['route' => 'admin.store']) }}
                    <fieldset>

                        <div class="input-prepend" title="Username">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="email" id="username" type="email" placeholder="Введите Email" required="required"/>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="password" id="password" type="password" placeholder="Введите пароль" required="required"/>
                        </div>
                        <div class="clearfix"></div>

                        <div class="button-login">
                            <button type="submit" class="btn btn-primary">Войти в админку!</button>
                        </div>
                        <div class="clearfix"></div>
                {{ Form::close() }}
            </div><!--/span-->
        </div><!--/row-->


    </div><!--/.fluid-container-->

</div><!--/fluid-row-->

</body>
</html>
