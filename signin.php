<?php
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>sign in</title>
        <link rel="stylesheet" href="style.css">
     </head>
     <style>
         .contenu{
             height:260px;
             width:400px;
             background-color:rgb(183, 236, 97);
             display:flex;
             margin:auto;
             align-items:center;
             justify-content:center;
             border-radius:5px;
           }
         input{
             width:86%;
             border:none;
             margin-bottom:5px;
         }
     </style>
    <body>
            <h2> Sign in</h2>
            <form action="verifySignin.php" method="post" enctype="multipart/data-form">
                <div class="contenu">
                    <table>
                        <tr>
                            <td><input type="email" name="login_email" placeholder="Entrer votre email"></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="login_pass" placeholder="Mot de passe"><br></td>
                        </tr>
                        <tr>
                            <td> <input type="submit" name="login_submit" value="Log in"></td>
                        </tr>
                        <tr>
                        <td><button><a href="signup.php">Sign up</a></button></td>
                        </tr>
                    </table>
                </div>
            </form >
    </body>
    </html>
