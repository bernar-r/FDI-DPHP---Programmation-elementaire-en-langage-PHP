<?php
// doublecarriage.php for doublecarriage in /home/h/Documents/My_Norme/My_Norme/trunk
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Tue Jan  3 11:09:53 2017 GAUDEAUX Henri
// Last update Tue Jan  3 11:10:08 2017 GAUDEAUX Henri
//

function doublecarriage($read, $count)
{
	global $end;
	global $carriage;

	if ((substr($read, 0, 1) == "\n") && ($carriage == 1))
	{
		echo "\e[0;31m Erreur : \e[0;34m ligne $count : \e[0;31m Double retour à la ligne. \e[0;m\n";
		$end += 1;
		$carriage = 0;
	}
	else
		$carriage = 0;

	if ((substr($read, 0, 1) == "\n"))
		$carriage = 1;
}