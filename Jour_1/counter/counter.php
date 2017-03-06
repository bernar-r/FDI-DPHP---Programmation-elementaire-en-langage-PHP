#!/usr/bin/env php
<?php
// counter.php for counter in 
// 
// Made by BERNARD Robin
// Login   <bernar_r@etna-alternance.net>
// 
// Started on  Mon Oct 10 17:38:04 2016 BERNARD Robin
// Last update Mon Oct 10 18:42:04 2016 BERNARD Robin
//

function counter($nbrincr = NULL)
{
  static $a = 0;
  if($nbrincr === NULL)
    {
      return ($a);
    }
  else
    {
      $a = $a + $nbrincr;
    }
}
  