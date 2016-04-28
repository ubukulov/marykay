<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    {{ HTML::style('css/admin.css') }}

    {{ HTML::script('js/jquery-1.5.1.min.js') }}
</head>
<body>
<div id="wrap">
    <header id="header">
        <div class="header">
            <h1>
                MARY KAY
            </h1>
        </div>
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer id="footer">
        <div class="footer">

        </div>
    </footer>
</div>
</body>
</html>