<?php
    session_start();
    echo " <h2> Bienvenue monsieur ".$_SESSION['nometudiant']." </h2>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    td{
        width:142px;
        height:122px;
        background-color: white;
        color:darkblue;
        font-weight:bold;
     }
     .menu2 li a{
        text-decoration: none;
        font-style: normal;
        font-size: 18px;
        font-weight: bold;
        font-family: serif;
        display: flex;
        align-items: center;
        padding-left: 20px;
        padding-right: 20px;
        height: inherit;
}
footer{
  bottom:0;
  display: flex;
  position: absolute;
  background-color: #483d8b;
  align-self: center;
  color: white;
  justify-content: center;
  align-items: center;
  margin: auto;
  width:100%;
  height:50px;
}
.menu2 li a:hover{
  background-color: #FFA500;
}
     .menu2 li{
        height: 45px;
            }
     .menu2{
        list-style: none;
        display: flex;
        justify-content: center;
        flex-direction: row;
        background-color: #483d8b;
        width: auto;
        align-items: center;
        height: 45px;
        margin: auto;
        margin-top:20px;
     }
     li{
         display: inline-block;
         list-style:none;
         color:darkblue;
      }
      body{
          position:relative;
      }

    table{
        color:darkblue;
        background-color:darkorange;
        border: 3px solid yellow;
        display:flex;
        width:600px;
        margin:auto;
        justify-content:center;
        align:center;
    }
    img{
        width:140px;
        height:120px;
    }
</style>
<body>
    <table border=1>
        <tr>
            <td> Nom complet de l'utilisateur</td>
            <td>E-mail</td>
            <td>Code eleve </td>
            <td>Image</td>
        </tr>
        <tr>
            <td><?php echo $_SESSION['nometudiant']?></td>
            <td><?php echo $_SESSION['emailetudiant']?></td>
            <td><?php echo $_SESSION['cneetudiant']?></td>
            <td><?php echo "<img src=".$_SESSION['image'].">" ?></td>
        </tr>
    </table>
      <ul class="menu2">
        <li><a href="home.php">Liste d'etudiants</a></li>
        <li><a href="signup.php">Ajouter un etudiant</a></li>
        <li><a href="updatePass.php">Changer mot de passe</a></li>
        <li><a href="updateMail.php">Changer E-mail</a></li>
         <li><a href="logout.php">Logout</a></li>
    </ul>
  </body>
  <footer><footer> <b>&copy Ecole Nationale des Sciences Appliquées de Tanger 2021- Tous droits réservés. <b></footer></footer>
</html>