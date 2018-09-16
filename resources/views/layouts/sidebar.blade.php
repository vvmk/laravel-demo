<div class="sidebar-module">
    <h4>Archives</h4>
    <ol class="list-unstyled">
        @foreach ($archives as $arch)
        <li>
            <a href="/?month={{ $arch['month'] }}&year={{ $arch['year'] }}">{{ $arch['month'] . ' ' . $arch['year'] }}</a>
        </li>
        @endforeach
    </ol>
</div>

<div class="sidebar-module">
    <h4>Tags</h4>
    <ol class="list-unstyled">
        @foreach ($tags as $tag)
        <li>
            <a href="/posts/tags/{{ $tag->name }}">{{ $tag->name }}</a>
        </li>
        @endforeach
    </ol>
</div>
