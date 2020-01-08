
<!DOCTYPE html>

<html lang="fr">


<head>
 <meta charset="UTF-8">
<link rel="stylesheet" href="../asset/css/jeu.css">
<title>Puissance 4 RFD</title>

</head>


<body>

    <h1>PUISSANCE <span id="numero">4</span></h1>

    <p id="tuto">Bienvenue sur P4 ! Le but du jeux est d'aligner quatres pions avec la même couleur,pour jouer il suffit juste de choisir le numéro de la colone afin de positionner votre pion ! Bonne chance ! (Mode deux joueurs uniquement)</p>

  <form method="POST" action="./jeu.php">

   <label>1 </label>  <input type="radio" name="number" value="0" />
   <label>2 </label>  <input type="radio" name="number" value="1"/>
   <label>3 </label>  <input type="radio" name="number" value="2"/>
   <label>4 </label>  <input type="radio" name="number" value="3"/>
   <label>5 </label>  <input type="radio" name="number" value="4"/>
   <label>6 </label>  <input type="radio" name="number" value="5"/>
   <label>7 </label>  <input type="radio" name="number" value="6"/><br/>
   <input type="submit" name="submit" value="Choisir cette colone !" />
   <input type="submit" name="reset" value="Rejouez !"/>

 </form>

