<?php

include_once("include.php");

function tokenization($code)
{
	$tokens = $GLOBALS['tokens'];
	$res = $GLOBALS['res'];

	while ($code)
	{
    $code = ltrim($code);
    $ok = FALSE;
		$z = 0;

		while ($tokens[$z][0] != "TOKEN_END")
		{
				$regex = "/^".$tokens[$z][0]."/";
				$type = $tokens[$z][1];

				if (preg_match($regex, $code, $val))
				{
					$res[] = [
						'type' => $type,
						'value' => $val[0],
					];
					$ok = TRUE;
					$code = substr($code, strlen($val[0]));
					break;
				}
				else
					$ok = FALSE;
				$z++;
      }

			if (!$ok && $code != "")
				exit('ERREUR : '.$code."\n");
			else if ($ok && $code == "")
				return($res);
		}
}

if (isset($argv[1]) && file_exists($argv[1]))
{
	if (preg_match('/(\w+.txt)/', $argv[1], $matches))
	{
	$file = fopen($argv[1], 'r');
	$code = fread($file, filesize($argv[1]));
	$res = tokenization(rtrim($code, "\n"));
	$exec = parse_variable();
	if(isset($exec[2]) && ($exec[0] == $exec[1]))
		my_print($exec[2]);
	}
	else
		echo "Usage : php lexer.php *.txt\n";
}
else
{
	echo "Usage : php lexer.php *.txt\n";
}
