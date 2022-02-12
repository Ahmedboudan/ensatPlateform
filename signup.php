<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="style.css" >
</head>
<body>
        <h2> Sign UP</h2>
        <form action="verifySignup.php" method="post" enctype="multipart/form-data">
            <div class="contenu_principal">
                <table>
                    <tr>
                        <td><label >Nom et prenom </label></td>
                        <td><input type="text" name="nom" ></td>
                    </tr>
                    <tr>
                        <td><label >Email </label></td>
                        <td><input type="email" name="email" ></td>
                    </tr>
                    <tr>
                    <td><label >Mot de passe </label></td>
                    <td><input type="password" name="pass" ></td>
                    </tr>
                    <tr>
                        <td><label >Code eleve:CNE </label></td>
                        <td><input type="text" name="cne" ></td>
                    </tr>
                    <tr>
                    <td><label >Image eleve</label></td>
                    <td><input type="file" name="img" ></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="Soumettre"></td>
                    </tr>
                </table>
            </div>
        </form>
 </body>
</html>