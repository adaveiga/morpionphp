#!/usr/bin/env php
<?php
// main.php for  in /home/cadet_a/Rattrapage/PHP
// 
// Made by CADET Anthony
// Login   <cadet_a@etna-alternance.net>
// 
// Started on  Tue Dec 16 13:19:47 2014 CADET Anthony
// Last update Tue Dec 16 17:34:06 2014 CADET Anthony
//

require('include/menu.php');
require('include/exit.php');
require('include/cut_params.php');
require('include/choix.php');
require('include/1v1.php');
require('include/r_oui.php');
require('include/r_non.php');
require('include/regle.php');

$enter = fopen('php://stdin', 'r');
global $line;

if ($enter !== FALSE)
  {
    f_menu();

    while (($line = fgets($enter)) !== FALSE)
      {
	$line = trim($line);
	$params = cut_params($line);
	$p_func = "f_" .$params[0];

	if (function_exists($p_func))
	  $p_func($params);
	else
	  {
	    echo "\nVeuillez taper une entrer valide...\n\n";
	    f_choix();
	  }
      }
  }
fclose($enter);
