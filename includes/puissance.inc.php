
<section id="aventurier">

<h1>Bienvenue AVENTURIER</h1>
<p>Pour jouer au jeu de la puissance ,il vous faudra trouver la renaissance Résolvez cette enigme (très difficile) afin d'accéder au saint jeu . </p><br/>
<p>Quand je ne me souviens pas</p>
<p>Son nom m'apparaitra </p>
<p>Je suis l'ami d'un certain Jacquie</p>
<p>Et mon nom est associée à un monument saint</p>
<p>Qui suis-je ?</p>
    <form action="" method="POST"/>
<label>Réponse :</label>
<input type="text" name="solution"/>
</form>
</section>

<?php



if(isset($_POST['solution'])){

    $connect=mysqli_connect('localhost','root','','michel');


    $requete="SELECT INTO enigme (solution) VALUES WHERE id=2";




}





