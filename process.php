<?php


if (!isset($_POST['submit'])) {


header('index.php');


}


if (isset($_POST['submit']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['texte']) && !empty($_POST['num']) && !empty($_FILES['photo'])) {


    $connect = mysqli_connect("localhost", "root", "", "michel");

    if (!$connect) {
        echo "Echec de la connexion :" . mysqli_connect_error();

    }

    if (isset($_FILES['photo']['name']) && ($_FILES['photo']['error'] == UPLOAD_ERR_OK)) {

            $chemin = './asset/image/';// copie l'image dans le repertoire image qui se trouve dans asset
            move_uploaded_file($_FILES['photo']['tmp_name'], $chemin . $_FILES['photo']['name']);


        } else {

            echo "Le fichier n'a pu être copier dans le bon répertoire";
        }



    $requete = "INSERT INTO article (nom,prenom,mail,num,message,image) VALUES ('" . htmlspecialchars(addslashes(trim($_POST['nom'])), ENT_QUOTES) . "','" . htmlspecialchars(addslashes(trim($_POST['prenom'])), ENT_QUOTES) . "','" . htmlspecialchars(addslashes(trim($_POST['mail'])), ENT_QUOTES) . "','" . htmlspecialchars(addslashes(trim($_POST['num'])), ENT_QUOTES) . "','" . htmlspecialchars(addslashes(trim($_POST['texte'])), ENT_QUOTES) . "','" .htmlspecialchars(addslashes(trim( $_FILES['photo']['name']))) . "')";
    $resultat = mysqli_query($connect, $requete);
    mysqli_close($connect);

    header('Location:./index.php?page=table');

}

else {
    $extension=pathinfo($_FILES['photo']['name'],PATHINFO_EXTENSION);

 $error=array();

if ($_POST['nom']==="" || empty($_POST['nom'])) {

 array_push($error,"Veuillez saisir un Nom valide !");

}
if ($_POST['prenom']==="" || empty($_POST['prenom'])) {

    array_push($error,"Veuillez saisir un prénom valide !");
 
 }
 if ($_POST['mail']==="" || empty($_POST['mail'])) {

    array_push($error,"Veuillez saisir une Adresse Mail valide !");
 
 }
 if ($_POST['num']==="" || empty($_POST['num'])) {

    array_push($error,"Veuillez saisir un Numéro de Téléphone valide !");
 
 }
 if ($_POST['texte']==="" || empty($_POST['texte'])) {

    array_push($error,"Veuillez saisir un Message valide !");
 
 }

    if($extension !== "jpg" && $extension !== "gif" && $extension !== "png" && $extension !== "jpeg"){

      array_push($error,"Veuillez saisir un format d'image valide  (jpg,gif,png ou jpeg) !");


  }
    if ($_FILES['photo']['error']) {
        switch ($_FILES['photo']['error']) {
            case 1://upload err ini size
                array_push($error, "La taille du fichier est plus grande que la limite serveur !");
                break;
            case 2://upload err form size
                array_push($error, "La taille du fichier est plus grande que la limite autoriser !");
                break;
            case 3://upload err partial
                array_push($error, "Erreur durant le transfert !");
                break;
            case 3://upload err no fil
                array_push($error, "Le fichier que vous envoyez est de taille NULL !");
                break;

        }
    }

        if (count($error)>0) {

    echo "<section id=erreur>";

     for ($i=0;$i<count($error); $i++) {


echo "<p class=erreur>".$error[$i]."</p>";  


}

echo "</section>";
 }

    require_once './includes/html.php';

    require_once './includes/header.php';


  require './includes/contact.inc.php';

  


    require_once './includes/footer.php';


}