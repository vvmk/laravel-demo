<div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyledv u">
        @foreach ($archives as $arch)
        <li>
            <a href="#">{{ $arch['month'] . ' ' . $arch['year'] }}
        </li>
        @endforeach
    </ol>
</div>
