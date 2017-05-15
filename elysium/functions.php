<?php

include_once("include.php");

function peek()
{
	return $GLOBALS['res'][0];
}

function pop()
{
  return(array_shift($GLOBALS['res']));
}

function expect($type)
{
	$token = pop();
	if ($type == $token['type'])
    return($token);
  else
    echo "Unexpected type : ".$token['type']." Expected : ".$type."\n";
  exit;
}

// TOUS LES PARSERS SONT EN DESSOUS
function parse_if()
{
  if(peek()['type'] == "IF")
  {
    pop();
    expect('LEFT_PAREN');
    if (preg_match("/@[A-z]+/", peek()['value']) || preg_match("/[A-z]+/", peek()['value']) || preg_match("/\d/", peek()['value']))
    {
      $val1 = peek()['value'];
      pop();
    }
    expect('EQUAL');
    if (preg_match("/@[A-z]+/", peek()['value']) || preg_match("/[A-z]+/", peek()['value']) || preg_match("/\d/", peek()['value']))
    {
      $val2 = peek()['value'];
      pop();
    }
    expect('RIGHT_PAREN');
    for ($i = 0; (peek()['type'] == "PRINT"); $i++)
    {
      pop();
      $str[$i] = expect('VARIABLE');
      expect("SEMI_COLON");
    }
    expect('END_IF');
  }
  $block = array ($val1, $val2, $str);
  return ($block);
}

function parse_variable()
{
  expect('DEF_VARIABLE');
    $name = expect('VARIABLE_NAME')['value'];
  expect('SET_VALUE');
set_var($name, expect('VARIABLE_VALUE')['value']);
        expect("SEMI_COLON");
         for ($i = 0; (peek()['type'] == "PRINT"); $i++)
    {
      pop();
      $str[$i] = expect('VARIABLE');
      expect("SEMI_COLON");
    }
        $block = array ("val1", "val2", $str);
        return $blok
}

function parse_function()
{
  expect('FUNCTION');

  expect('LEFT_PAREN');
  if(peek()['type'] == "STRING")
    $param = expect('STRING');
  expect('RIGHT_PAREN');
  for ($i = 0; (peek()['type'] == "PRINT"); $i++)
  {
    pop();
    if (preg_match("/@[A-z]+/", peek()['value']) || preg_match("/[A-z]+/", peek()['value']))
    {
      $str[$i] = peek()['value'];
      pop();
    }
    expect("SEMI_COLON");
  }
  expect('END_FUNC');
  $block = array ("val1", "val2", $str);
  return ($block);
}

function my_print($str)
{
  print_r($str);
  $a = 0;
  while (isset($str[$a]))
  {
    if ($str[0]['value'][0] == "@")
      echo get_var_val($str[$a]['value']);
    else
    {
      $i = 0;
      while (isset($str[$i]['value']))
      {
        for ($z = 0; isset($str[$i]['value'][$z]); $z++)
        {
          if ($str[$i]['value'][$z] == '\\' && $str[$i]['value'][$z+1] == 'n')
          {
            echo "\n";
            $z++;
          }
          else
            echo $str[$i]['value'][$z];
        }
        $i++;
      }
    }
    $a++;
  }
}