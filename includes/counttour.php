<?php


$file    = fopen( "../asset/texte/joueur.txt", "r" );//fichier compteur du nb  de tours et permet de choisir à quel joueur appartient le tour;
$content = fgets($file, 4096); // recupere la valeur ;

fclose($file);




