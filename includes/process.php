<?php


if (isset($_POST['submit']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['mail']) && !empty($_POST['texte']) && !empty($_POST['num']) && !empty($_FILES['photo'])) {


    $connect = mysqli_connect("localhost", "root", "", "michel");

    if (!$connect) {
        echo "Echec de la connexion :" . mysqli_connect_error();

    }


    if ($_FILES['photo']['error']) {
        switch ($_FILES['photo']['error']) {
            case 1://upload err ini size
                echo "La taille du fichier est plus grande que la limite serveur ";
                break;
            case 2://upload err form size
                echo "La taille du fichier est plus grande que la limite formulaire ";
                break;
            case 3://upload err partial
                echo "Erreur pendant le transfert";
                break;
            case 3://upload err no fil
                echo "Fichier que vous envoyez est de taille null";
                break;

        }


    } else {
        if (isset($_FILES['photo']['name']) && ($_FILES['photo']['error'] == UPLOAD_ERR_OK)) {

            $chemin = '../asset/image/';// copie l'image dans le repertoire image qui se trouve dans asset
            move_uploaded_file($_FILES['photo']['tmp_name'], $chemin . $_FILES['photo']['name']);


        } else {

            echo "Le fichier n'a pu être copier dans le bon répertoire";
        }
    }


    $requete = "INSERT INTO article (nom,prenom,mail,num,message,image) VALUES ('" . htmlspecialchars(addslashes(trim($_POST['nom'])), ENT_QUOTES) . "','" . htmlspecialchars(addslashes(trim($_POST['prenom'])), ENT_QUOTES) . "','" . htmlspecialchars(addslashes(trim($_POST['mail'])), ENT_QUOTES) . "','" . htmlspecialchars(addslashes(trim($_POST['num'])), ENT_QUOTES) . "','" . htmlspecialchars(addslashes(trim($_POST['texte'])), ENT_QUOTES) . "','" . $_FILES['photo']['name'] . "')";
    $resultat = mysqli_query($connect, $requete);
    mysqli_close($connect);

    header('Location:../index.php?page=table');

} else {


    echo "Erreur durant l'envoie !";
}