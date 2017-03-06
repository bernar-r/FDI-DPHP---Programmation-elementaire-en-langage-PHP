<?php
// spaceatend.php for spaceatend in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Mon Jan  2 16:31:57 2017 GAUDEAUX Henri
// Last update Mon Jan  2 16:32:06 2017 GAUDEAUX Henri
//

function headercheck($read, $count)
{
	global $ok, $error, $end;

	if ($count == 1){
		if ((((substr($read, 0, 2)) == "/*")) && ($count == 1) && ($ok == 0))
			$ok = 1;
		else
			$error = 1;
	}
	if ($count == 2){
		if ((((substr($read, 0, 2)) == "**")) && ($count == 2) && ($ok == 1))
			$ok = 2;
		else
			$error = 1;
	}
	if ($count == 3){
		if ((((substr($read, 0, 2)) == "**")) && $count == 3 && $ok == 2)
			$ok = 3;
		else
			$error = 1;
	}

	headercheck2($read, $count);
}

function headercheck2($read, $count)
{
	global $ok, $error, $end;

	if ($count == 4){
		if ((((substr($read, 0, 11)) == "** Made by ")) && ($count == 4) && 
			($ok == 3) && (preg_match("/(by)\s[a-zA-Z]+\s+[a-zA-z]+$/",
				"$read")))
			$ok = 4;
		else
			$error = 1;
	}
	if ($count == 5){
		if ((((substr($read, 0, 12)) == "** Login   <")) && ($count == 5) && 
			$ok == 4 && (preg_match("
			/[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+[>]/", "$read")))
			$ok = 5;
		else
			$error = 1;
	}
	
	headercheck3($read, $count);
}

function headercheck3($read, $count)
{
	global $ok, $error, $end;

	if ($count == 6){
		if ((((substr($read, 0, 2)) == "**")) && $count == 6 && $ok == 5)
			$ok = 6;
		else
			$error = 1;
	}

	if ($count == 7){
		if ((((substr($read, 0, 15)) == "** Started on  ")) && $count == 7 
			&& $ok == 6 && (preg_match(
				"/\W+\s+\w+\s+[a-z]+\s\s\w+\s+\w+\s+\d+\s+\d+\D+\d+\D+\d+\s+\d+\s+\w+\s+\w+/"
				, "$read")))
			$ok = 7;
		else
			$error = 1;
	}

		headercheck4($read, $count);
	}

	function headercheck4($read, $count)
{
		global $ok, $error, $end;

	if ($count == 8){
		if ((((substr($read, 0, 15)) == "** Last update ")) && $count == 8 && $ok == 7 && (preg_match(
			"/\W+\s+\w+\s\w+\s\w+\s\w+\s+\d+\s+\d+\D\d+\D\d+\s\d+\s\w+\s\w+/"
			, "$read")))
			$ok = 8;
		else
			$error = 1;
	}
	if ($count == 9){
		if ((((substr($read, 0, 2)) == "*/")) && $count == 9 && $ok == 8)
			$ok = 0;
		else
			$error = 1;
	}
	if ($count == 10 && $error == 1){
		echo "\e[0;31m Erreur : \e[0;34m ligne 1 : \e[0;31m Triche, mauvais header. \e[0;m\n";
		$end += 42;
	}
}