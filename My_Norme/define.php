<?php
// define.php for define in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Mon Jan  2 11:12:12 2017 GAUDEAUX Henri
// Last update Mon Jan  2 11:12:14 2017 GAUDEAUX Henri
//

function define_norme($read, $line)
{
    global $end;

    if (preg_match("/#define/", $read)) {

        if (preg_match("/#define\s\w+\s[0-9]+$/", $read)) {
        } else {
            echo "\e[0;31m Erreur : \e[0;34m ligne $line : \e[0;31m faute dans le define. \e[0;m\n";
            $end += 1;
        }
    }
}