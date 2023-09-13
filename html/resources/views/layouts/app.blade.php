<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>{{ $data['meta']['title'] }}</title>
    <meta name="robots" content="index, follow"/>
    <meta http-equiv="Content-Security-Policy" content="default-src 'self' 'unsafe-inline' 'unsafe-eval' https: cdnjs.cloudflare.com code.jquery.com maps.googleapis.com"/>
    <meta name="keywords" content="{{ $data['meta']['keywords'] }}"/>
    <link rel="canonical" href="{{ $data['meta']['canonical'] }}">
    <meta name="description" content="{{ $data['meta']['description'] }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ asset('images/favicon_gold.svg') }}">

    @if ($data['meta']['preloads'])
    <!-- Preloads -->
    @foreach ($data['meta']['preloads'] as $preload_link)
    <link   type="text/css" 
            rel="preload" as="style" 
            href="{{ $preload_link }}" 
            onload="this.onload=null;this.rel='stylesheet'">
    @endforeach
    @endif
    <script>
        // <noscript class="loadLater"></noscript>
        document.addEventListener("DOMContentLoaded", function(event) {
            var loadLater = document.querySelector('.loadLater');
            var head = document.querySelector('head');
            if(loadLater && head){
                head.insertAdjacentHTML('beforeend', loadLater.innerHTML);
            }
        });
    </script>
    

    @if ($data['meta']['preconnects'])
    <!-- Preconnects -->
    @foreach ($data['meta']['preconnects'] as $preconnect_link)
    <link rel="preconnect" href="{{ $preconnect_link }}">
    @endforeach
    @endif

    @if ($data['meta']['links'])
    <!-- Links -->
    @foreach ($data['meta']['links'] as $link)
    <link href="{{ $link }}" rel="stylesheet">
    @endforeach
    @endif
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('layouts/header')

    @yield('content')

    @include('layouts/footer')


    @if (isset($data['meta']['scripts']))
        @foreach ($data['meta']['scripts'] as $script)
            <script src="{{ $script }}"></script>
        @endforeach
    @endif
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>