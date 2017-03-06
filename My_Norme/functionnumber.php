<?php
// spaceatend.php for spaceatend in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Mon Jan  2 16:31:57 2017 GAUDEAUX Henri
// Last update Mon Jan  2 16:32:06 2017 GAUDEAUX Henri
//

function function_number($read, $count)
{
	global $bracket;
	global $function_nbr;
	global $end;

	if (preg_match("/{/", "$read")) {
		$bracket = $bracket + 1;
	}

	if (preg_match("/}/", "$read")) {
		$bracket = $bracket - 1;
	}

	if ((preg_match("/}/", "$read")) && ($bracket < 1)){
		$function_nbr = $function_nbr + 1;

		if ($function_nbr > 5){
			 echo "\e[0;31m Erreur : \e[0;34m ligne $count : \e[0;31m trop de fonction par fichier. \e[0;m\n";
			 $end = $end + 1;
		}
	}
}