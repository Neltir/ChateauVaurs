<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Référencement -->
    <meta name="description" content="Ce château authentique, très calme, 
    situé dans un parc arboré avec kiosque vous invite à profiter du charme de la campagne lors d’un séjour. 
    A moins de 300 m du parc de loisirs de Beaulieu/Dordogne avec piscine municipale, tennis, canoë-kayak pêche. 
    A 700 m du centre-ville de Beaulieu-sur-Dordogne.">
    <meta name="keyword" content="chambre d’hôte, hôte, appartement, réservation, séjour, nuitée, visite, 
    Château, Dordogne, Corrèze, France, campagne, authentique, rural, calme, local, tourisme, visite, 
    gouffre, padirac, grotte, lacave, collonge-la-rouge, turenne, rocamadour, castelnaud, lascaux, piscine, 
    tennis, canoë-kayak, pêche, centre-ville, loisir, sport, vacance, location, hébergement, réservation, hébergement, week-end, 
    expérience, confiance, découvrir, saison, destination, nature, voyage, citybreak, région">
    <!-- CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/style.css'); }}">
    <!-- Fonts : C&tamaran & Libre Baskerville -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Catamaran&family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">
    <title>Château de Vaurs - Gîte à Beaulieu-sur-Dordogne</title>
</head>
<body>
    <header>
    <!-- Navbar fixée top + logo -->
    <div class="navbar">
        <div class="title">
            <h1>Château de Vaurs</h1>
            <img src="{{ URL::asset('img/rossignol.png'); }}" alt="">
        </div>
        <ul>
            <li><a href="/">Accueil</a></li>
            <li><a href="/appartements">Appartements</a></li>
            <li><a href="/agenda">Agenda</a></li>
            <li><a href="/contact">Contact</a></li>
        </ul>
    </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
    <!-- Mentions légales CGU, cookies et contact -->
    </footer>
</body>
</html>