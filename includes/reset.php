<?php


if (isset($_POST['reset'])) {// copie le contenue des fichier reset au fichier base ;

$fichier="../asset/texte/reset.txt";
$newfichier="../asset/texte/matrice.txt";

$fichierj="../asset/texte/resetjoueur.txt";
$newfichierj="../asset/texte/joueur.txt";

copy($fichierj,$newfichierj);

copy($fichier,$newfichier);


}
