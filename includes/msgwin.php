<?php


function msg_win($win1=0,$win2=0){// affiche le message de victoire en fonction du vainqueur 

    

if ($win1===1 && $win2==0 || $win1===2 && $win2==0 || $win1===3 && $win2==0) {
    

    echo "<p class=win1>Victoire du joueur 1 !</p>";
    echo "<p class=win1>Appuyez sur rejouer pour une nouvelle partie !</p>";
    echo "<section id=aud><audio controls ><source src=victoire.mp3 type=audio/mp3></audio></section>";
    

}

else if($win1==0 && $win2===1 || $win1==0 && $win2===2 || $win1==0 && $win2===3){

    echo "<p class=win2>Victoire du joueur 2 !</p>";
    echo "<p class=win2>Appuyez sur rejouer pour une nouvelle partie !</p>";

    echo "<section id=aud><audio controls ><source src=victoire.mp3 type=audio/mp3></audio></section>";

}




}
