<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">

    <title>Formulaire de connexion ajax</title>
</head>
<body>
<div id="resultat"></div>

<h1>Un formulaire de connexion en AJAX</h1>

<form>
<p>
    Nom d'utilisateur : <input type="text" name = "username " id="username" />
    Mot de passe : <input type="password" name = "password" id="password" />
    <input type="submit" id="submit" value="Se connecter !" />
</p>
</form>
    
<script src="http://code.jquery.com/jquery-3.3.1.min.js"integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="crossorigin="anonymous"></script>
<script src="jquery.js"></script>
</body>
</html>