<?php
// space_key_word.php for space_key_word in /home/h/Documents/My_Norme/gaudea_h
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Tue Jan  3 16:24:44 2017 GAUDEAUX Henri
// Last update Tue Jan  3 16:24:49 2017 GAUDEAUX Henri
//

function space_key_word($read, $line) {
    global $end;

    if (!preg_match("/echo|printf/", $read)) {
        $count = 0;
        $tab = array('auto', 'break', 'case','char', 'const', 'continue', 'default', 'do', 'double', 'else' ,'enum' , 'extern',
            'float', 'for', 'goto', 'if', 'int', 'long', 'register', 'return', 'short', 'signed', 'sizeof', 'static', 'struct',
            'switch', 'typedef', 'union', 'unsigned', 'void', 'volatile', 'while');

        while (isset($tab[$count])) {
            if (preg_match("/$tab[$count]/", $read)) {
                if (!preg_match("/$tab[$count]\s{1}/", $read)) {
                    $end += 1;
                    echo "\e[0;31m Erreur : \e[0;34m ligne $line : \e[0;31m Veuillez ajouter un espace apres le mot cle. \e[0;m\n";
                }
            }
            $count += 1;
        }
    }
}