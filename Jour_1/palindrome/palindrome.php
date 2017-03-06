#!/usr/bin/env php
<?php
// palindrome.php for palindrome in 
// 
// Made by BERNARD Robin
// Login   <bernar_r@etna-alternance.net>
// 
// Started on  Mon Oct 10 13:50:45 2016 BERNARD Robin
// Last update Mon Oct 10 22:40:51 2016 BERNARD Robin
//

function palindrome($str)
{
  $a;
  $b;
  $c;

  $a = 0;
  $b = 0;
  $c = 1;
  while (isset($str[$a]) != '')
    ++$a;
  --$a;
  while ($a > $b && $c == 1)
    {
      if ($str[$a] == ' ')
	--$a;
      if ($str[$b] == ' ')
	++$b;
      if (ord($str[$a]) != ord($str[$b]))
	if (ord($str[$a]) != (ord($str[$b]) - 32))
	  if (ord($str[$a]) != (ord($str[$b]) + 32))
	    $c = 0;
      --$a;
      ++$b;
    }
  if ($c == 1)
    echo "True\n";
  else
    echo "False\n";
}
	
    
