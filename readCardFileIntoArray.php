<?php

/**
 * 
 * 
 */
function readCardFileIntoArray($cardFilename) {

  $cardAsArray = array();

  $fh = fopen($cardFilename,'r');
  while ($line = fgets($fh)) {

  $cardRowAsArray = explode(" ", $line);

  $cardAsArray[] = $cardRowAsArray;

  }
  fclose($fh);

  return $cardAsArray;
}

?>