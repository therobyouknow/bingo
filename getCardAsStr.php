<?php

function outputCard($cardAsArray) {
    
  $cardAsStr = "";

  foreach($cardAsArray as $cardRowAsArray) {
    $cardRowAsStr = implode(' ', $cardAsArray);

    $cardAsStr .= $cardRowAsStr;
  }

  return $cardAsStr;
}

?>