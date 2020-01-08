<?php

function victory()
{

    $stack = 0;


    require 'counttour.php';

    require 'positionandwrite.php';
    require 'msgwin.php';


//Condition de victoire ;

    for ($h = 0; $h <= 6; $h++) {

        for ($i = 0; $i <= 5; $i++) {


            //Victoire par un alignement sur une ligne ;

            if ($matrice[$i][$h] == $pion && $matrice[$i][$h + 1] == $pion && $matrice[$i][$h + 2] == $pion && $matrice[$i][$h + 3] == $pion) {

                if ($pion == "X") {
                    $win1 = 1;
                    $win2 = 0;
                    msg_win($win1, $win2);
                    break;


                } else if ($pion == "Y") {

                    $win1 = 0;
                    $win2 = 1;
                    msg_win($win1, $win2);
                    break;

                }
            }


            //égalité

            if ($matrice[$i][$h] != 'O') {

                $stack++;

                if ($stack == 42) {

                    echo "<p id=draw>Egalité !</p>";
                }


            }

        }
    }

    for ($i = 5; $i >= 3; $i--) {

        for ($h = 0; $h <= 6; $h++) {

            //Victoire par un alignement sur une colone ;

            if ($matrice[$i][$h] == $pion && $matrice[$i - 1][$h] == $pion && $matrice[$i - 2][$h] == $pion && $matrice[$i - 3][$h] == $pion) {

                if ($pion == "X") {
                    $win1 = 2;
                    $win2 = 0;
                    msg_win($win1, $win2);
                    break;

                } else if ($pion == "Y") {


                    $win1 = 0;
                    $win2 = 2;
                    msg_win($win1, $win2);
                    break;

                }
            }

            //Victoire par un alignement en diagonale ;


            if ($matrice[$i][$h] == $pion && $matrice[$i - 1][$h + 1] == $pion && $matrice[$i - 2][$h + 2] == $pion && $matrice[$i - 3][$h + 3] == $pion || $matrice[$i][$h] == $pion && $matrice[$i - 1][$h - 1] == $pion && $matrice[$i - 2][$h - 2] == $pion && $matrice[$i - 3][$h - 3] == $pion) {

                if ($pion == "X") {

                    $win1 = 3;
                    $win2 = 0;
                    msg_win($win1, $win2);
                    break;

                } else if ($pion == "Y") {

                    $win1 = 0;
                    $win2 = 3;
                    msg_win($win1, $win2);
                    break;

                }

            }

        }


    }
}

