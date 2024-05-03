<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-26Z907P14B"></script>
        <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-26Z907P14B');
        </script>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel Landscape</title>
        @vite('resources/css/app.css')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

        <script>       
            window.csrfToken = "{{ csrf_token() }}";
        </script>

    </head>
    <body> 
        <div id="app">
            <navbar-component></navbar-component>
            <div class="container">
                @yield('content')
            </div>
        </div>

        @extends('footer')

        @vite('resources/js/app.js')
        
        <script>       
            document.querySelector('.navbar').addEventListener('click', function(e) {           
                if (e.target.tagName === 'A') {          
                    document.querySelector('.navbar a.active').classList.remove('active');
                    e.target.classList.add('active');
                }
            });
        </script>
    </body>
</html>