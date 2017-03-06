<?php
// ord_includes.php for ord_includes in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Tue Jan  3 12:07:19 2017 GAUDEAUX Henri
// Last update Tue Jan  3 12:07:24 2017 GAUDEAUX Henri
//

function ord_includes($read, $line)
{
    global $end;

    if (preg_match("/#include/", $read)) {
        if (!preg_match("/#include\s{1}<\w+.h>|#include\s{1}\"\w+.h\"/", $read)) {
            echo "\e[0;31m Erreur : \e[0;34m ligne $line : \e[0;31m Include mal formule. \e[0;m\n";
            $end += 1;
        }
    }
}