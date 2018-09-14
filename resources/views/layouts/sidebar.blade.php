<div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
        @foreach ($archives as $arch)
        <li>
            <a href="/?month={{ $arch['month'] }}&year={{ $arch['year'] }}">{{ $arch['month'] . ' ' . $arch['year'] }}
        </li>
        @endforeach
    </ol>
</div>
