<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Larael Landscape</title>
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
        @vite('resources/js/app.js')
        <script>
            // Attache un écouteur d'événement à la barre de navigation pour les clics
            document.querySelector('.navbar').addEventListener('click', function(e) {
                // Assure-toi que l'élément cliqué est bien un lien
                if (e.target.tagName === 'A') {
                    // Trouve l'élément actuellement actif et retire la classe 'active'
                    document.querySelector('.navbar a.active').classList.remove('active');
                    // Ajoute la classe 'active' à l'élément cliqué
                    e.target.classList.add('active');
                }
            });
        </script>
    </body>
</html>