

<div class="container-fluid affichage">

<h1>AFFICHE LES DONNEES RECUPERE DU FORMULAIRE CONTACT</h1>


<p>Evidement ce genre d'information doit être réservé à un admin et on les affiches pas mais j'ai un peu la flemme d'en créer un donc je le met comme ça juste pour vous montrez que je sais
afficher les données d'une bdd .</p><br/>


<?PHP

$connect =mysqli_connect('localhost','root','','michel');

if (!$connect) {
    echo "Echec de la connexion :" . mysqli_connect_error();

}

$requete="SELECT * FROM article";

echo "<div class='col-lg-12'> <table><tr><td>Identifiant</td><td>Nom</td><td>Prénom</td><td>Mail</td><td>Téléphone</td><td>Message</td><td>Image</td></tr><tr>";


if($resultat=mysqli_query($connect,$requete)){


    while ($donnees=mysqli_fetch_assoc($resultat)){


        echo "<td>".$donnees['id']."</td>";
        echo "<td>".$donnees['nom']."</td>";
        echo "<td>".$donnees['prenom']."</td>";
        echo "<td>".$donnees['mail']."</td>";
        echo "<td>".$donnees['num']."</td>";
        echo "<td>".$donnees['message']."</td>";
        echo "<td id='imgtable'><img src='./asset/image/".$donnees['image']."' alt='image BDD' /></td></tr>";



    }

}

else{

    echo "Erreur lors de l'affichage";
}

echo "</table></div>";



echo "</div>";


?>


