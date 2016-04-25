<!-- navigation menu -->
<nav id="nav">
    <ul>
        @foreach(app('menu') as $m)
        <li><a href="{{ $m->alias }}">{{{ $m->nameru }}}</a></li>
        @endforeach
    </ul>
</nav>