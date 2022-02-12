<?php
    session_start();
    require('connexion.php');
    $req = "SELECT * FROM etudiant ORDER BY id";
    $query = mysqli_query($conn,$req);
    printf("<h2> Bienvenue ".$_SESSION['nometudiant']." ,voici la listes des etudiants </h2> <hr><hr>");
    printf("<h2> La liste des etudiants </h2>");
    echo "<table border=1>" ;
    echo "<tr ><td> Nom et Prenom </td> <td> E-mail </td> <td> Code eleve</td> <td> Images </td> </tr> ";
    foreach($query as $row){
        echo "<tr> <td>".$row['nomComplet']."</td> ";
        echo "<td >".$row['email']."</td> ";
        echo "<td >".$row['CNE']."</td>";
        echo " <td> <img src=".$row['imguser']." </td> </tr> ";
    }
    echo "</table>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    img{
        width:190px;
        height:120px;
    }
    td{
        width:210px;
        height:100px;
        background-color: white;
        color:darkblue;
        font-weight:bold;
     }
    table{
        color:darkblue;
        background-color:darkorange;
        border: 3px solid yellow;
        display:flex;
        width:800px;
        margin:auto;
        justify-content:center;
        align:center;
    }
</style>
<body>
    
</body>
 </html>
