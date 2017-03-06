<?php
// commande.php for commande in 
// 
// Made by BERNARD Robin
// Login   <bernar_r@etna-alternance.net>
// 
// Started on  Fri Oct 14 01:28:23 2016 BERNARD Robin
// Last update Sat Oct 15 16:38:47 2016 BERNARD Robin
//

function leecho($arg)
{
  $a;
  $b;

  $a = 1;
  if (isset($arg[1]))
    {
      while (isset($arg[$a]))
      {
	if (isset($arg[$a]))
	  {
	    
	    echo "{$arg[$a]}"." ";
	  }
	else
	  echo "$arg[$a] ";
	$a++;
      }
      echo "\n";
    }
  else
    echo "\n";
}

function lecat($argv)
{
  $a;

  $a = 1;
  if (isset($argv[$a]) != false)
  {
  while (isset($argv[$a]))
    {
      if (is_dir($argv[$a]))
	echo "cat: $argv[1]: Is a directory\n";
      else if (file_exists($argv[$a]) == false)
	echo "cat: $argv[$a]: No such file or directory\n";
      else if (is_file($argv[$a]) && is_readable($argv[$a]) == false)
	echo "cat: $argv[$a]: Permission denied\n";
      else if (is_file($argv[$a]) || is_readable($argv[$a]))
	{
	  $open = fopen($argv[$a], "r");
	  $read = fread($open, 99999999);
	  echo $read;
	  fclose($open);
	}
      ++$a;
    }
  }
  else
    echo "cat: Invalid arguments\n";
}

function lepwd()
{
  $pwd = getcwd();
  echo "$pwd\n";
}

function lehelp()
{
  echo ("exit - Termine le programme propremment.\n");
  echo "echo - Affiche les arguments sur la sortie standard, puis termine par un retour a la ligne.\n";
  echo "pwd - Affiche le chemin courant.\n";
  echo "cd - Permet de naviguer dans le systeme de fichier.\n";
  echo "ls - Affiche le contenu du repertoire specifie en argument, ou du repertoir courant si aucun argument n'est fourni.\n";
  echo "cat - Affiche le contenu de chacun des fichiers indiques.\n";
  echo "env - Affiche les variables d'environnement.\n";
  echo "setenv - Change ou ajoute une variable d'environnement.\n";
  echo "unsetenv - Efface une variable d'environnement.\n";
}



function lels($argv)
{
  if (isset($argv[1]) == NULL)
    echo "bad syntax\n";
  else
    {
      if (file_exists($argv[1]) == false)
	echo "ls: $argv[1]: No such file or directory\n";
    }
}
      
      

function leenv()
{
  $a;
  $hone;
  $path;
  
  $a = get_current_user();
  $home = ($_SERVER["HOME"]);
  $path = getcwd();
  
  echo "USER=$a\n";
  echo "HOME=$home\n";
  echo "PATH=$path\n";
}