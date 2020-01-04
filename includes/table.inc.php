<h1>AFFICHE LES DONNEES RECUPERE DU FORMULAIRE CONTACT</h1>


<p>Evidement ce genre d'information doit être réservé à un admin et on les affiches pas mais j'ai un peu la flemme d'en créer un donc je le met comme ça juste pour vous montrez que je sais
afficher les données d'une bdd .</p>


<?PHP

$connect =mysqli_connect('localhost','root','','michel');

$requete="SELECT * FROM article";

if($resultat=mysqli_query($connect,$requete)){

   echo "<table><tr>";

    while ($donnees=mysqli_fetch_assoc($resultat)){



        echo "<td>".$donnees['nom']."</td>";
        echo "<td>".$donnees['prenom']."</td></tr>";

    }




echo "</table>";
}






?>


