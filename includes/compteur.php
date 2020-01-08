<?php


function aff_compteur(){

require 'counttour.php';

if($content%2==0){//choix du joueur selon la valeur du fichier joueur.txt;

    echo "<p id=player1>","Joueur 1","</p>";    
    
    }
    
    else if($content%2==1){//choix du joueur selon la valeur du fichier joueur.txt;
    
        echo "<p id=player2>","Joueur 2","</p>";    
 
    
    }
    
    
    echo "<p id=tour>","Tour ".$content."</p>";//nb tour ;
    echo "<p id=colone>1 2 3 4 5 6 7</p>";

}