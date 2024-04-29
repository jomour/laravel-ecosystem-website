<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel Landscape</title>
        @vite('resources/css/app.css')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

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