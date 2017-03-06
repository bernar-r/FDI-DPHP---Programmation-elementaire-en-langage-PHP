<?php
// functionline.php for functionline in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Tue Jan  3 14:52:34 2017 GAUDEAUX Henri
// Last update Tue Jan  3 14:52:38 2017 GAUDEAUX Henri
//


function functionline($read, $count)
{
	global $infunction, $bracket2, $countline, $end;

    if (preg_match("/{/", "$read")) {
        $bracket2 = $bracket2 + 1;
    }
    if (preg_match("/}/", "$read")) {
        $bracket2 = $bracket2 - 1;
    }
	if ((preg_match("/{/", "$read")) && ($infunction == 0)) {
		$infunction = 1;
	}
	if ((preg_match("/}/", "$read")) && ($bracket2 < 1)) {
		$countline = 0;
		$infunction = 0;
	}
	if ($infunction == 1){
		$countline = $countline + 1;
		if ($countline -1 > 25){
			echo "\e[0;31m Erreur : \e[0;34m ligne $count : \e[0;31m function de plus de 25 lignes. \e[0;m\n";
			$end = $end + 1;
		}
	}
}




