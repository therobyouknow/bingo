<?php

/**
 * 
 * 
 */
function readCardFileIntoArray() {

  $cardAsArray = array();

  $fh = fopen('card.txt','r');
  while ($line = fgets($fh)) {

  $cardRowAsArray = explode(" ", $line);

  $cardAsArray[] = $cardRowAsArray;

  }
  fclose($fh);

  return $cardAsArray;
}

?>