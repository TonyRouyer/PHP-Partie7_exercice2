<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="style.css" type="text/css" />
    <title>Partie 7 Exo 1</title>
</head>
<body>
    <form method="POST" action="user.php">
        <fieldset>
            <legend>Formulaire</legend>
                <label for="lastname">Nom :</label>
                <input type="text" id="lastname" name="lastname" />
                <label for="firstname">Prénom :</label>
                <input type="text" id="firstname" name="firstname" />
                <input type="submit" value="Valider" />
        </fieldset>
    </form>
</body>
</html>