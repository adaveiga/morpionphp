#!/usr/bin/env php
<?php
// morpion.php for morpion in /home/daveig_a/Rattrapages/DPHP
// 
// Made by DA VEIGA Angelo
// Login   <daveig_a@etna-alternance.net>
// 
// Started on  Tue Dec 16 13:14:54 2014 DA VEIGA Angelo
// Last update Tue Dec 16 14:53:33 2014 DA VEIGA Angelo
//

function	f_1()
{
  passthru("clear");
  $x = 0;
  $y = 0;
  $tours = 0;
  $player = ' ';
  $tx = "";
  $ty = "";
  
  for ($i = 0; $i < 3; $i++)
  {
    for ($j = 0; $j < 3; $j++)
      $tab[$i][$j] = ' ';
  }
  
  $win = FALSE;
  
  do
    {
      if ($player != 'O')
	$player = 'O';
      else
      $player = 'X';
      do
	{
	  echo "   1  2  3\n";
	  for ($i = 0; $i <3; $i++)
	    echo ($i+1). " |". $tab[$i][0]. " |". $tab[$i][1]. " |". $tab[$i][2]. " |\n";
	echo "Au tour de $player\n";
	echo "Coordonnees x";
	$x=(int)fgets(STDIN) -1;
	echo "Coordonnees y";
	$y=(int)fgets(STDIN) -1;
	passthru("clear");
	}
      
      while ($x < 0 || $x > 2 || $y < 0 || $y > 2 || $tab[$x][$y] != ' ');
      $tab[$x][$y] = $player;    
      $i = 0;
      while ($i < 3 && !$win)
	{
	  if ($tab[$i][0] != ' ' && $tab[$i][0] == $tab[$i][1] && $tab[$i][0] == $tab[$i][2])
	    $win = TRUE;
	  $i++;
	}
      
    $i = 0;
    while ($i < 3 && !$win)
      {
	if ($tab[0][$i] != ' ' && $tab[0][$i] == $tab[1][$i] && $tab[0][$i] == $tab[2][$i])
	  $win = TRUE;
	$i++;
      }
    
    if ($tab[1][1] != ' ' && (($tab[0][0] == $tab[1][1] && $tab[0][0] == $tab[2][2]) || ($tab[0][2] == $tab[1][1] && $tab[0][2] == $tab[2][0])))
      $win = TRUE;
    
    $tours += 1;
    }
  
  while (!$win && $tours != 9);
  echo "   1  2  3\n";
for ($i = 0; $i < 3; $i++)
  echo ($i+1). " |". $tab[$i][0]. " |". $tab[$i][1]. " |". $tab[$i][2]. " |\n";
if ($win)
  echo "$player gagne !";
else
  echo "Personne ne gagne.";
}

?>
			 
