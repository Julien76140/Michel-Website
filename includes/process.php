<?php

if(isset($_POST['submit'])) {

    $connect = mysqli_connect("localhost", "root", "", "michel");

    if (!$connect) {
        echo "Echec de la connexion :" . mysqli_connect_error();

    }

    if (isset($_FILES['photo']['name'])&&($_FILES['photo']['error']==UPLOAD_ERR_OK)){

     $chemin='../asset/image/';
     move_uploaded_file($_FILES['photo']['tmp_name'],$chemin.$_FILES['photo']['name']);


    }


    $requete = "INSERT INTO article (nom,prenom,mail,num,message,image) VALUES ('". htmlspecialchars(addslashes(trim($_POST['nom'])), ENT_QUOTES) . "','" . htmlspecialchars(addslashes(trim($_POST['prenom'])), ENT_QUOTES) . "','" . htmlspecialchars(addslashes(trim($_POST['mail'])), ENT_QUOTES) . "','" . htmlspecialchars(addslashes(trim($_POST['num'])), ENT_QUOTES)."','" . htmlspecialchars(addslashes(trim($_POST['texte'])), ENT_QUOTES) . "','" . $_FILES['photo']['name']. "')";
    $resultat = mysqli_query($connect, $requete);

    mysqli_close($connect);
  header('Location:../index.php');


}
else {


    echo "erreur";
}