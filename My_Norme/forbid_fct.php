<?php
// forbid_fct.php for forbid_fct in /home/h/Documents/My_Norme/gaudea_h
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Wed Jan  4 16:45:19 2017 GAUDEAUX Henri
// Last update Wed Jan  4 16:45:25 2017 GAUDEAUX Henri
//

function forbid_fct($read, $line) {
    global $end, $ok;

    $tab = array("printf", "switch", "for");
    $count = 0;

    while (isset($tab[$count]))
    {
        if ((preg_match("/$tab[$count]/", $read)) && ($ok == 0)) {
            $end += 42;
            echo "\e[0;31m Cas de triche: \e[0;34m ligne $line: \e[0;31m $tab[$count]. \e[0;m\n";
        }
        $count += 1;
    }
}