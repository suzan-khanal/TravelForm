<?php
$str ="This is a string.";
echo $str;
$str_len = strlen($str);
echo "<br>The Length of string '$str' is:".$str_len .".Thank You";//Concanicate   //   . is a string concanication operator.
echo "<br>The Number of words of string '$str' is:".str_word_count($str);

//echo $str_len;

echo "<br>The reverse of string '$str' is:".strrev($str);
echo "<br>The search of is of a string is:".strpos($str, "is");//If no word is present it will return nothing.
echo "<br>The replaced string is:".str_replace("is", "at", $str);



?>