<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Mary Kay</title>
    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/orbit-1.2.3.css') }}

    {{ HTML::script('js/jquery-1.5.1.min.js') }}
    {{ HTML::script('js/jquery.orbit-1.2.3.min.js') }}

    <!--[if IE]>
    <style type="text/css">
        .timer { display: none !important; }
        div.caption { background:transparent; filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000,endColorstr=#99000000);zoom: 1; }
    </style>
    <![endif]-->

    <!-- Run the plugin -->
    <script type="text/javascript">
        $(window).load(function() {
            $('#featured').orbit();
        });
    </script>
</head>
<body>
    @yield('content')
</body>
</html>