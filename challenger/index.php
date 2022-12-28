<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Compte Bancaire</title>
</head>
<body>

    <section class="newUser">

        <!-- Formulaire pour créer un nouvel Utilisateur -->
        <form action="" method="POST">

            <h1>Créer un nouvel utilisateur</h1>

            <table>
                    <tr>
                        <td>
                            <label for="name">Prénom </label>
                        </td>
                        <td>
                            <input type="text" name="name" id="name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="age">Âge </label>
                        </td>
                        <td>
                            <input type="text" name="age" id="age" required>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="account">Solde bancaire</label>
                        </td>
                        <td>
                            <input type="text" name="account" id="account" required>
                        </td>
                    </tr>

            </table>
            
            <input type="submit" value="Valider">

            </form>
        

    </section>

    
    <section class="usersSection">

        <!-- Utilisateur 1 -->
        <div class="user"></div>
        <!-- Utilisateur 2 -->
        <div class="user"></div>
        <!-- Utilisateur 3 -->
        <div class="user"></div>
        <!-- Utilisateur 4 -->
        <div class="user"></div>

    </section>
    
</body>
</html>