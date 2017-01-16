<?php
function isPalindrome($text = '') {
	$text = trim($text);
	if ($text === strrev($text)) return TRUE;	
	else return FALSE;
}

/***********************************************************/
// Использование
$word = ' abba  ';
if (isPalindrome( $word )) echo $word;

?> 
