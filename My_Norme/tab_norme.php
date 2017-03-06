<?php
// tab_norme.php for tab_norme in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Mon Jan  2 12:50:00 2017 GAUDEAUX Henri
// Last update Mon Jan  2 12:50:05 2017 GAUDEAUX Henri
//

function tab_norme($read, $line)
{
    global $end;

    if (preg_match("/[a-z]+\s+\w+;$/", $read)) {
        if (!preg_match("/[a-z]+\t\w+;$/", $read)) {
            echo "\e[0;31m Erreur : \e[0;34m ligne $line : \e[0;31m Utilisez des tabulations dans la declaration. \e[0;m\n";
            $end += 1;
        }
    }
}