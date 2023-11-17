<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Fabrique - Accueil</title>
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>
<body>
    <header>
        <h1>Bienvenue à La Fabrique</h1>
        <p>Votre espace d'apprentissage</p>
    </header>
  
    <main>
        <section class="description">
            <h2>À Propos de La Fabrique</h2>
            <br>
            <p>
                La Fabrique est un espace d'apprentissage moderne et innovant où vous pouvez développer de nouvelles compétences. Notre installation est équipée des dernières technologies pour vous aider à réussir dans votre formation.
            </p>
            <br>
        </section>
        <div class="image">
<img src="{{asset('image/image5.png')}}" alt="" width="100%" height="400px">
        </div>
        <br>
        <br>
        <div class="actions">
            <a href="/authen" class="button">Se Connecter</a>
            <a href="/form" class="button">S'Inscrire</a>
        </div>
    </main>
    @if(session('status'))
        <div class="alert alert-danger">
            {{ session('status') }}
        </div>
    @endif
    <footer>
        <p>&copy; 2023 La Fabrique</p>
    </footer>
</body>
</html>
