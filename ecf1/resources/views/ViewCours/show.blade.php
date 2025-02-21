<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails du Cours</title>
</head>
<body>
    <h1>Détails du Cours</h1>
    <h2>{{ $cour->name }}</h2>
    <p>{{ $cour->id }}</p>
    <a href="{{ route('cours.accueil') }}">Retour à la liste des cours</a>
</body>
