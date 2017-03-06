<?php
// spaceatend.php for spaceatend in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Mon Jan  2 16:31:57 2017 GAUDEAUX Henri
// Last update Mon Jan  2 16:32:06 2017 GAUDEAUX Henri
//

function spaceatend($read, $count)
{
    global $end;
    global $ok;
    
    if (preg_match("/ \s+$/", "$read") && $ok == 0) {
        echo "\e[0;31m Erreur : \e[0;34m ligne $count : \e[0;31m Espace en fin de ligne. \e[0;m\n";
        $end += 1;
    }
}