@if ($data['breadcrumbs'] != false)
    <nav class="breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs__ul">
                <li><a title="Chasse immobilière Ile de France et Paris" href="{{ route('home') }}">La Fabrique à Toits</a></li>
                @foreach ($data['breadcrumbs'] as $breadcrumb)
                    @if ($breadcrumb['url'])
                        <li>
                            <a  href="{{ $breadcrumb['url']}}"
                                title="{{ $breadcrumb['title']}}">
                                {{ $breadcrumb['name'] }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </nav>
@endif