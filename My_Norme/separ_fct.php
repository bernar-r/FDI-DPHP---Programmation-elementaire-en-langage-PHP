<?php
// separ_fct.php for separ_fct in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Mon Jan  2 16:46:03 2017 GAUDEAUX Henri
// Last update Mon Jan  2 16:46:07 2017 GAUDEAUX Henri
//

function separ_fct($read, $line)
{
    global $end;
    global $path;

    if (preg_match("/\w+\s+\w+\(\s*/", $read)) {
        $open = fopen($path, 'r');

        if ($open) {
            $count = 0;

            while (!feof($open)) {
                $file = fgets($open);
                $count += 1;
                if ($count == ($line - 1)) {
                    if (preg_match("/\S+/", $file)) {
                        echo "\e[0;31m Erreur : \e[0;34m ligne $line : \e[0;31m Veuillez ajouter un retour a la ligne avant votre fonction. \e[0;m\n";
                        $end += 1;
                        break;
                    }
                }
            }
        }
    }
}