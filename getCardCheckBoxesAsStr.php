<?php

function getCardCheckBoxesAsStr($cardCheckBoxesAsArray) {
  $cardCheckBoxesAsStr = "";
  foreach( $cardCheckBoxesAsArray as $cardCheckBoxesRow ) {
    foreach ($cardCheckBoxesRow as $checkBox) {
      $cardCheckBoxesAsStr .= $checkBox. " ";
    }

    $cardCheckBoxesAsStr .= "\n";
  }

  return $cardCheckBoxesAsStr;
}

?>