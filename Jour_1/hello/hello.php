#!/usr/bin/env php
<?php
// hello.php for hello in 
// 
// Made by BERNARD Robin
// Login   <bernar_r@etna-alternance.net>
// 
// Started on  Mon Oct 10 12:30:52 2016 BERNARD Robin
// Last update Mon Oct 10 21:22:38 2016 BERNARD Robin
//

function hello($param = NULL)
{
  if ($param != NULL)
    echo ("Hello $param !\n");
  else
    echo ("Hello world !\n"); 
}
