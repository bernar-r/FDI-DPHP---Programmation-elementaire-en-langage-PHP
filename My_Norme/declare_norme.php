<?php
// declare_norme.php for declare_norme in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Mon Jan  2 10:44:44 2017 GAUDEAUX Henri
// Last update Mon Jan  2 10:44:46 2017 GAUDEAUX Henri
//

function declare_norme($read, $line)
{
    global $end;

    if (preg_match("/[a-z]+\s+\w+\s?=\s?\"?\w+\"?;$/", $read)) {
        echo "\e[0;31m Erreur : \e[0;34m ligne $line : \e[0;31m Variable declaree et affectee sur la meme ligne. \e[0;m\n";
        $end += 1;
    }
}