<?php
     session_start();
    if(isset($_POST["up_email_submit"])){
        if(!empty($_POST['up_email']) && !empty($_POST['repeat_up_email'])){
            if($_POST['up_email']==$_POST['repeat_up_email']){
                require('connexion.php');
                $email = $_POST['up_email'];
                $req = " UPDATE etudiant  SET email = '".addslashes($email)."' WHERE MotPass = '".addslashes($_SESSION['emailetudiant'])."' ;";
                $query = mysqli_query($conn,$req);
                if($query){
                    header('location:signin.php');
                }
               
                }
                else{
                    echo "<h2>Les deux e-mails ne sont pas identiques </h2>";
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
     <title>Update email</title>
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
 <form action="updateMail.php" method="post" enctype="multipart/form-data">
     <h2>Changer E-mail</h2>
     <div class="contenu">
        <table>
            <tr>
                <td><input type="email" name="up_email" placeholder="New E-mail..."></td>
            </tr>
            <tr>
                <td><input type="email" name="repeat_up_email" placeholder="Repeat New email"  ></td>
            </tr>
            <tr>
                <td><input type="submit" name="up_email_submit" value="Changer"></td>
            </tr>
        </table>
     </div>    
</form>
  
 </body>
 </html>