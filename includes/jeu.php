<a href="../index.php?page=accueil">RETOURNER AU SITE</a>

<?php


$ligne=0;
$pion=0;
$vjoueur1=0;

require 'form.php';

require 'poscol.php';

require 'increment.php';

inc_file();

require 'reset.php';

require 'compteur.php';

require 'victoire.php';

victory();

msg_win();

aff_compteur();


require 'result.php';


?>


