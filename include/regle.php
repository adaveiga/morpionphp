#!/usr/bin/env php
<?php
// regle.php for  in /home/cadet_a/Rattrapage/PHP/rattrape
// 
// Made by CADET Anthony
// Login   <cadet_a@etna-alternance.net>
// 
// Started on  Tue Dec 16 17:28:52 2014 CADET Anthony
// Last update Tue Dec 16 17:40:24 2014 CADET Anthony
//

function	f_3()
{
  passthru("clear");
  echo "*** Les regles du jeu ***\n\n";
  echo "Vous devez aligner vos pions pour gagner !\n";
  echo "Pour cela entrer d'abord la position 'x' puis la 'y'.\n\n";
  echo "(Vous voulez revoir le menu ? Pas de panique taper 'menu' & tout va bien se passer ;)\n\n";
  f_choix();
}