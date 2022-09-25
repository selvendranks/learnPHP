<?php

  $name = " donkey is my name ";
  
  echo("string lenght is ".strlen($name));
  echo("<br>");
  echo(str_word_count($name));
  echo("<br>");
  echo(strrev($name));
  echo("<br>");
  echo(strpos($name,"is"));
  echo("<br>");
  echo(str_replace("donkey","monkey",$name));
  echo("<br>");
  echo(str_repeat($name,10));
  echo(rtrim($name));
  echo(ltrim($name));
  echo(trim($name));


  
echo strchr("Hello world!","world"); //Find the first occurrence of "world" inside "Hello world!" and return the rest of the string
echo strcmp("Hello world!","Hello world!");


?>