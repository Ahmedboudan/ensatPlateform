<?php
    session_start();
    if(isset($_POST["up_pass_submit"])){
        if(!empty($_POST['up_pass']) && !empty($_POST['up_repeat_pass'])){
            if($_POST['up_pass']==$_POST['up_repeat_pass']){
                require('connexion.php');
                $pass = $_POST['up_pass'];
                $req = " UPDATE etudiant  SET MotPass = '".addslashes($pass)."'  WHERE MotPass = '".addslashes($_SESSION['pass'])."' ;";
                $query = mysqli_query($conn,$req);
                
                header('location:signin.php');
                echo "<h2> Votre mot de passe est correctement changée</h2>";

                }
                else{
                    echo "<h2>Les deux mots de passe ne sont pas identiques </h2>";
                }        }
        else { 
    }
}  
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Update password</title>
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
             width:90%;
             border:none;
             margin-bottom:5px;
         }
 </style>
 <body>
 <form action="updatePass.php" method="post" enctype="multipart/form-data">
     <h2>Changer mot de passe</h2>
     <div class="contenu">
        <table>
            <tr>
                <td><input type="password" name="up_pass" placeholder="New password..."></td>
            </tr>
            <tr>
                <td><input type="password" name="up_repeat_pass" placeholder="Repeat new password..."  ></td>
            </tr>
            <tr>
                <td><input type="submit" name="up_pass_submit" value="Changer"></td>
            </tr>
        </table>
     </div>    
</form>
  
 </body>
 </html>