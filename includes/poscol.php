<?php


function position_colone($colone = NULL ){ //recup la valeur $_POST['number'] qui defini la colone

if (isset($_POST['number']))  {

$colone=$_POST['number'];

}
return $colone;

}

