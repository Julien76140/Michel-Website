<?php

$ligne=7;//valeur par defaut 


if($content%2==0){//choix du joueur selon la valeur du fichier joueur.txt;

    $pion='Y';
    
    }
    
    else if($content%2==1){//choix du joueur selon la valeur du fichier joueur.txt;
    
    $pion='X';
    
    }

$lines = file('../asset/texte/matrice.txt');//lit le fichier et le stock dans un tableau ;

foreach ($lines as $lineNumber => $lineContent)// parcours et met dans un tableau les valeurs ;
{

   for ($i=0; $i < 6; $i++) { 
     if($i==$lineNumber){
      $matrice[$i]=$lineContent;//creation d'une matrice pour stocker les valeurs;
     }

   }


}

if(isset($_POST['submit'])){

//calcul la ligne à laquel le pion doit atterrir;

for ($i=0; $i < 6; $i++) { 

if ($matrice[$i][position_colone()]=="O") {

    $ligne=$i;

    if($matrice[$i][position_colone()]=="X" || $matrice[$i][position_colone()]=="Y"){
        $ligne=$ligne-2;
        $i=100;
    }
}

}

}


if(position_colone()!=NULL){

//verifie si la colone est vide ou non 

       if ( $matrice[0][position_colone()]=="X" || $matrice[0][position_colone()]=="Y") {

             echo "<p id=colone>La colone est pleine ! choisissez en une autre !</p>";

            require 'counttour.php';


        $fil    = fopen( "../asset/texte/joueur.txt", "w" );

        fwrite($fil,$content-1);

      $ligne=7;   
      

       }




    $matrice[$ligne][position_colone()]=$pion;//met la valeur du pion aux coordonnée de calculé par la fonction position_colone () et $ligne  ;

}

echo "<embed src=soundeffect.mp3 autostart=true loop=false hidden=true></embed>";


$fp = fopen ("../asset/texte/matrice.txt", "w");// écrit le resultat dans le fichier matrice.txt pour le garder en memoire ;

fwrite($fp,"$matrice[0]");
fwrite($fp,"$matrice[1]");
fwrite($fp,"$matrice[2]");
fwrite($fp,"$matrice[3]");
fwrite($fp,"$matrice[4]");
fwrite($fp,"$matrice[5]");
