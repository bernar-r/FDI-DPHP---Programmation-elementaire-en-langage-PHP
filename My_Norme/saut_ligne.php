<?php
// saut_ligne.php for saut_ligne in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Mon Jan  2 14:01:27 2017 GAUDEAUX Henri
// Last update Mon Jan  2 14:01:32 2017 GAUDEAUX Henri
//

function saut_ligne($read, $line)
{
    global $end;
    global $path;

    if (preg_match("/[a-z]+\s+\w+;$/", $read)) {

        $open = fopen($path, 'r');

        if ($open) {
            $count = 0;

            while ($count <= $line) {
                $file = fgets($open);
                $count += 1;
                if ($count > $line) {
                    if (preg_match("/\S+/", $file)) {
                        echo "\e[0;31m Erreur : \e[0;34m ligne $line : \e[0;31m Veuillez ajouter un retour a la ligne apres votre declaration. \e[0;m\n";
                        $end += 1;
                        break;
                    }
                }
            }
        }
    }
}
