<?php

function checkFullCheckedColumnIsPresent($cardCheckBoxesAsArray) {

  $numberOfColumns = 5;
  $lastColumnIndex = $numberOfColumns - 1;

  for ($column = 0; $column <= $lastColumnIndex; $column++) {
    $columnTotal = 0;

    foreach ($cardCheckBoxesAsArray as $cardCheckBoxesRow) {
      $columnTotal += $cardCheckBoxesRow[$column];

      if ($columnTotal == 5) {
        return true;
      }
    }
  }
    
  return false;
}

?>