<?php
    require("connexion.php");
    if(isset($_POST['submit'])){
        if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['pass']) && !empty($_POST['cne'])){
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $pass = $_POST['pass'];
            $cne = $_POST['cne'];
            $photo = $_FILES['img']['name'];
            $upload = "image/".$photo ;
            move_uploaded_file($_FILES['img']['tmp_name'],$upload);
            $requette = "INSERT INTO etudiant(nomComplet,email,MotPass,CNE,imguser)
             VALUES('$nom','$email','$pass','$cne','$photo') ";
            $data =mysqli_query($conn,$requette);
            if($data){
                printf(" <h2>Votre données sont correctement saisées <a href='signin.php'>sign in</a> </h2> <br>");
                
                 require('signup.php');
            } 
        }else{
            echo "<h2 align=center color:blue> Tous les champs sont obligatoires ! </h2>";
            require('signup.php');
        }
    }
 ?>