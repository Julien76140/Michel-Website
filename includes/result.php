<?php
//affichage du resultat;

$result = @fopen("../asset/texte/matrice.txt", "r");

if ($result) {


    echo "<section id=plateau>";

    while (($buffer = fgetc($result)) !== false) {


        if ($buffer=="Y") {

            echo "<span class=pionrouge>".$buffer."</span>";
            

        }
        if ($buffer=="X") {

            echo "<span class=pionbleu>".$buffer."</span>";

        }


        if ($buffer=="Y") {
          $buffer="";
        }
        
        if ($buffer=="X") {
            $buffer="";
          }

          echo "<span class=vide>".$buffer."</span>";

        if ($buffer==';') {
            echo "<br/>";
        }
    }

    if (!feof($result)) {
        echo "Erreur: fgets() a échoué\n";
    }
    echo "</section>";

    fclose($result);
}
