<!-- navigation menu -->
<nav id="nav">
    <ul>
        @foreach(app('menu') as $m)
        <li><a href="{{ $m->alias }}">{{{ $m->nameru }}}</a></li>
        @endforeach
        @if(Auth::check())
        <li><a href="/admin">Войти в админку</a></li>
        @endif
    </ul>
</nav>