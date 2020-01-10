<?php


function inc_file()
{
//incrémente le fichier joueur.txt a chaque tour ;

    if (isset($_POST['submit'])) {

        require 'counttour.php';


        if ($file == NULL) {
            $file = fopen("../asset/texte/joueur.txt", "w");

            file_put_contents($file, $content);
            fclose($file);
        }

        $fil = fopen("../asset/texte/joueur.txt", "w");

        fwrite($fil, $content + 1);


    }

}