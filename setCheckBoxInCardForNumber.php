<?php

function setCheckBoxInCardForNumber($calledNumber, $cardAsArray, &$cardCheckBoxesAsArray) {
  // cardCheckBoxes

  foreach ($cardAsArray as $cardRowIndex => $cardRow) {
    $result = array_search($calledNumber, $cardRow);

    if ($result) {
      $cardCheckBoxesAsArray[$cardRowIndex][$result] = 1;
    }
  }
}

?>