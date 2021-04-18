<ol class="breadcrumb">
    @forelse($pages as $page => $url)
        @if($url != null)
            <li class="breadcrumb-item"><a href="{{ $url }}">{{ $page }}</a></li>
        @else
            <li class="breadcrumb-item active">{{ $page }}</li>
        @endif
    @empty
    @endforelse
</ol>
