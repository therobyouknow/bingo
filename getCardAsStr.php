<?php

function getCardAsStr($cardAsArray) {
    
  $cardAsStr = "";

  foreach($cardAsArray as $cardRowAsArray) {
    $cardRowAsStr = implode(' ', $cardRowAsArray);

    $cardAsStr .= $cardRowAsStr."\n";
  }

  return $cardAsStr;
}

?>