<?php
// length.php for length in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Mon Jan  2 16:32:23 2017 GAUDEAUX Henri
// Last update Mon Jan  2 16:32:27 2017 GAUDEAUX Henri
//

function length($read, $count)
{
    global $end;
    
    if (strlen($read) > 80) {
        echo "\e[0;31m Erreur : \e[0;34m ligne $count : \e[0;31m Ligne de plus de 80 caractères. \e[0;m\n";
        $end += 1;
    }
}