<?php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulaire PHP</title>
</head>
<body>
<h2>Formulaire PHP</h2>
<form method="get" action="/formulaireControlleur">
    <label for="nom">Nom :</label>
    <input type="text" name="nom" id="nom" required><br><br>

    <label for="prenom">Prénom :</label>
    <input type="text" name="prenom" id="prenom" required><br><br>

    <label for="age">Âge :</label>
    <input type="number" name="age" id="age" required><br><br>

    <label for="courriel">Courriel :</label>
    <input type="email" name="courriel" id="courriel" required><br><br>

    <input type="submit" value="Envoyer">
</form>
</body>
</html>

