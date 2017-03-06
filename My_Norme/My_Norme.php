#!/usr/bin/env php
<?php
// My_Norme.php for My_Norme in /home/h/Documents/My_Norme/local
// 
// Made by GAUDEAUX Henri
// Login   <gaudea_h@etna-alternance.net>
// 
// Started on  Mon Jan  2 09:54:28 2017 GAUDEAUX Henri
// Last update Wed Jan  4 17:00:35 2017 GAUDEAUX Henri
//

require_once("declare_norme.php");
require_once("define.php");
require_once("tab_norme.php");
require_once("saut_ligne.php");
require_once("length.php");
require_once("headercheck.php");
require_once("spaceatend.php");
require_once("separ_fct.php");
require_once("doublecarriage.php");
require_once("functionnumber.php");
require_once("functionline.php");
require_once("ord_includes.php");
require_once("space_key_word.php");
require_once("param_nbr.php");
require_once("forbid_fct.php");


$countbcl = 1;
while (isset($argv[$countbcl])) {

    if (isset($argv[$countbcl])) {
        global $path;
        global $carriage;
        global $bracket;
        global $bracket2;
        $bracket2 = 0;
        global $infunction;
        $infunction = 0;
        global $countline;
        $countline = 0;
        global $ok;
        $ok = 0;
        global $error;
        $error = 0;
        global $function_nbr;
        $function_nbr = 0;
        $bracket = 0;
        $carriage = 0;
        $path = $argv[$countbcl];

        if (file_exists($argv[$countbcl])) {
            if (preg_match("/\w+[.][c|h?]\z/", $argv[$countbcl])) {

                $open = fopen($argv[$countbcl], 'r');

                if ($open) {
                    echo "\e[0;34m Scan de $argv[$countbcl] : \e[0;m\n";

                    global $end;
                    $end = 0;
                    $count = 0;

                    while (!feof($open)) {
                        $read = fgets($open);
                        $count += 1;
                        declare_norme($read, $count);
                        define_norme($read, $count);
                        tab_norme($read, $count);
                        saut_ligne($read, $count);
                        headercheck($read, $count);
                        spaceatend($read, $count);
                        length($read, $count);
                        separ_fct($read, $count);
                        doublecarriage($read, $count);
                        function_number($read, $count);
                        functionline($read, $count);
                        ord_includes($read, $count);
                        space_key_word($read, $count);
                        param_nbr($read, $count);
			forbid_fct($read, $count);
                    }
                    if ($end == 0) {
                        echo "\e[0;32m Vous n'avez fait aucune faute de norme! \e[0;m\n";
                    } else
                        echo "\e[0;31m Vous avez fait $end faute(s) de norme \e[0;m\n";
                }
            } else
                echo "\e[0;31m $argv[$countbcl] n'est pas un fichier en .c ou .h \e[0;m\n";
        } else
            echo "\e[0;31m Le fichier $argv[$countbcl] n'existe pas. \e[0;m\n";
    } else
        echo "\e[0;31m Veuillez entrer un fichier. \e[0;m\n";
    $countbcl += 1;
}