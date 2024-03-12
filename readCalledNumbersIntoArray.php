<?php

function readCalledNumbersIntoArray($calledCardNumbersFilename) {
  $calledNumbersAsArray = array();

  $fh = fopen($calledCardNumbersFilename,'r');
  while ($line = fgets($fh)) {
  
    $lineAsArray = explode(",", $line);
  
    $calledNumbersAsArray = $lineAsArray;
  
  }
  fclose($fh);
  
  return $calledNumbersAsArray;
}

?>