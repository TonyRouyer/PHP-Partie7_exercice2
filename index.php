<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 7 exercice 2</title>
        <style>
            form {
                display: flex;
                flex-direction: column;
                width: 50%;
                margin: 0 auto;
            }
            label {
                margin-top: 10px;
            }
            #firstname, #lastname {
                border: 0px;
                border-bottom: 1px Solid black;
            }
            #sendBtn {
                width: 10%;
                margin-top: 10px;
            }
        </style>
    </head>
    <body>
        <form action="user.php" method="POST">
            <label for="firstname">Prénom : <input type="text" id="firstname" name="firstname" /></label>
            <label for="lastname">Nom : <input type="text" id="lastname" name="lastname" /></label>
            <input type="submit" id="sendBtn" />
        </form>
    </body>
</html>