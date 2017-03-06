#!/usr/bin/env php
<?php
// microshell.php for microshell in 
// 
// Made by BERNARD Robin
// Login   <bernar_r@etna-alternance.net>
// 
// Started on  Thu Oct 13 22:44:32 2016 BERNARD Robin
// Last update Sat Oct 15 16:37:51 2016 BERNARD Robin
//

require('./commande.php');

$file;
$tmp;
$ligne;

$file = fopen("php://stdin", "r");

if ($file == true)
  {
    echo "$> ";
    while (($ligne = fgets($file)) == true)
      {
	$ligne = trim($ligne); //supprime espace en debut et fin de chaine
	$ligne = preg_replace("/[\s]+/", ' ', $ligne);
	$ligne = preg_replace("/\"/", '', $ligne);
	
	if ($ligne == "exit")
	  {
	    echo "see you soon !\n";
	    echo "(;´ω`;)ﾉ\n";
	    return (0);
	  }
	//coupe la chaine selons le delimiteur et stoque dans un tableau
	$argv = explode (' ', $ligne);
	$tmp = 'le'.$argv[0];
	//Indique si la fonction existe
	if (function_exists($tmp)) 
	  $tmp($argv);
	else if (function_exists($tmp) == false && isset($argv[0]))
	  echo "$argv[0]: Command not found\n";
	echo "$> ";
      }
    fclose($file);
  }
