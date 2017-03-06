<?php
// param_nbr.php for param_nbr in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Wed Jan  4 09:34:33 2017 GAUDEAUX Henri
// Last update Wed Jan  4 09:34:37 2017 GAUDEAUX Henri
//

function param_nbr($read, $line)
{
    global $end;

    if (preg_match("/\w+\s+\w+\(|printf\(/", $read)) {
        preg_match_all("/\w+\s+\w+/", $read, $param);

        $counter = 0;

        while (isset($param[0][$counter])) {
            $counter += 1;
            backn($read, $line, $counter);
            if ($counter > 5) {
                echo "\e[0;31m Erreur : \e[0;34m ligne $line : \e[0;31m Vous avez trop de parametres dans votre fonction. \e[0;m\n";
                $end += 1;
            }
        }
    }
}

function backn($read, $line, $counter)
{
    global $path;
    if (!preg_match("/\{\n/", $read)) {
        $open = fopen($path, 'r');

        if ($open) {
            $countbackn = 0;

            while (!feof($open)) {
                $file = fgets($open);
                $countbackn += 1;

                if ($countbackn > $line) {
                    if (preg_match("/\w+\s+\w+/", $file)) {
                        $counter += 1;
                        return ($counter);
                    }
                }
            }
        }
    }
}