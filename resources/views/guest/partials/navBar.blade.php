<nav class="header-nav">
    <ul class="nav-ul">
        @foreach ($menu as $item)
            <li><a class="nav-a" href="{{ route($item['route']) }}">{{ $item['label'] }}</a></li>
        @endforeach
    </ul>
</nav>
