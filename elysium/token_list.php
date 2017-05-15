<?php

$res = [];
$variables = [];

$tokens = [
      	['if', 'IF'],
        ['else', 'ELSE'],
        ['print', 'PRINT'],
        ['while', 'WHILE'],
        ['endif', 'END_IF'],
        ['endwhile', 'END_WHILE'],
        ['endfunc', 'END_FUNC'],
        ['return', 'RETURN'],
        ['function [0-z]*', 'FUNCTION'],
        ['var ', 'DEF_VARIABLE'],
        ['@\w+', 'VARIABLE_NAME'],
        ['(\w+)', 'VARIABLE_VALUE'],
        ['[A-z]+', 'STRING'],
        ['@[A-z]+', 'VARIABLE'],
        ['\(', 'LEFT_PAREN'],
      	['\)', 'RIGHT_PAREN'],
        ['\;', 'SEMI_COLON'],
		['\==', 'EQUAL'],
        ['\<', 'LESSER'],
        ['\>', 'GREATER'],
        ['\>=', 'EQ_GREATER'],
        ['\<=', 'EQ_LESSER'],
        ['\=', 'SET_VALUE'],
        ['[+?-?\/?]', 'MATH'],
        ['\d*', 'INTEGER'],
		['TOKEN_END', 'TOKEN_END'],
];
