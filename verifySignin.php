<?php
    require("connexion.php");
    if(isset($_POST['login_submit'])){
        if(empty($_POST['login_email']) || empty($_POST['login_pass'])){
            echo(" <h2>Veillez remplir tous les champs ! </h2>");
            require('signin.php');
        }
        else{
            $user = $_POST['login_email'];
            $pass = $_POST['login_pass'];
            $req = "SELECT * FROM etudiant WHERE email =  '".addslashes($user)."'  AND MotPass = '".addslashes($pass)."' ; ";
            $query = mysqli_query($conn,$req);
             if(mysqli_num_rows($query)>0){
                $data = mysqli_fetch_assoc($query);
                if(($pass == $data['MotPass']) && ($user == $data['email']) ){
                    session_start();
                    $_SESSION['nometudiant'] = $data['nomComplet'];
                    $_SESSION['emailetudiant'] = $data['email'];
                    $_SESSION['cneetudiant'] = $data['CNE'];
                    $_SESSION['image'] = $data['imguser'];
                    $_SESSION['pass'] = $data['MotPass'];
                    header('location:profil.php');
                 }
            }
            else{
                echo " <h2>Invalide email ou mot de passe. Resseyez </h2>";
                require('signin.php');

            }
            
        }
    }
?>