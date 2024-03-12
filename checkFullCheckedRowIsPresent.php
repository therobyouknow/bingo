<?php

function checkFullCheckedRowIsPresent($cardCheckBoxesAsArray) {
  foreach ($cardCheckBoxesAsArray as $cardCheckBoxesRow) {
    foreach($cardCheckBoxesRow as $checkBox) {
        $rowTotal += $checkBox;
        if ($rowTotal == 5) {
          return true;
        }
    }
  }

  return false;
}

?>