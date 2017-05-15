<?php

include_once("include.php");



function set_var($var, $val)
{
	$array[$var] = $val;
	array_push($GLOBALS['variables'], $array);
}

function get_var_val($var)
{
	set_var("@test", "Valeur de la variable\n");
	set_var("@testm", "Valeur de la robin\n");
	$z = 0;
	while (isset($GLOBALS['variables'][$z]))
	{
		if (array_keys($GLOBALS['variables'][$z])[0] == $var)
			return($GLOBALS['variables'][$z][$var]);
		$z++;
	}
}