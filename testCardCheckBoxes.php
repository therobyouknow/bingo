<?php

require 'checkFullCheckedRowIsPresent.php';
require 'checkFullCheckedColumnIsPresent.php';

function testCardCheckBoxes() {
  // 

  // test full row
  $cardCheckBoxesArray1 = array();

  $cardCheckBoxesArray1[0] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray1[1] = array( 1, 1, 1, 1, 1);
  $cardCheckBoxesArray1[2] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray1[3] = array( 0, 0, 1, 1, 0);
  $cardCheckBoxesArray1[4] = array( 0, 0, 0, 0, 0);

  echo "\n\ntest 1 - full row\n";
  echo getCardCheckBoxesAsStr($cardCheckBoxesArray1);

  if (checkFullCheckedRowIsPresent($cardCheckBoxesArray1)) {
    echo "winning card - complete row found\n";
  }
  else {
    echo "not winning card\n";
  }

  // test partial row
  $cardCheckBoxesArray2 = array();

  $cardCheckBoxesArray2[0] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray2[1] = array( 0, 0, 1, 1, 0);
  $cardCheckBoxesArray2[2] = array( 1, 0, 0, 0, 0);
  $cardCheckBoxesArray2[3] = array( 0, 0, 0, 1, 0);
  $cardCheckBoxesArray2[4] = array( 0, 0, 0, 0, 0);

  echo "\n\ntest 2 - partial row\n";
  echo getCardCheckBoxesAsStr($cardCheckBoxesArray2);

  if (checkFullCheckedRowIsPresent($cardCheckBoxesArray2)) {
    echo "winning card - complete row found\n";
  }
  else {
    echo "not winning card\n";
  }



  // test full column
  $cardCheckBoxesArray3 = array();

  $cardCheckBoxesArray3[0] = array( 0, 0, 0, 1, 0);
  $cardCheckBoxesArray3[1] = array( 0, 0, 0, 1, 0);
  $cardCheckBoxesArray3[2] = array( 0, 1, 1, 1, 0);
  $cardCheckBoxesArray3[3] = array( 0, 0, 0, 1, 0);
  $cardCheckBoxesArray3[4] = array( 1, 1, 0, 1, 0);

  echo "\n\ntest 3 - full column\n";
  echo getCardCheckBoxesAsStr($cardCheckBoxesArray3);

  // checkFullCheckedColumnIsPresent
  if (checkFullCheckedColumnIsPresent($cardCheckBoxesArray3)) {
    echo "winning card - complete column found\n";
  }
  else {
    echo "not winning card\n";
  }



  // test partial column
  $cardCheckBoxesArray4 = array();

  $cardCheckBoxesArray4[0] = array( 0, 0, 1, 0, 0);
  $cardCheckBoxesArray4[1] = array( 0, 0, 1, 0, 1);
  $cardCheckBoxesArray4[2] = array( 0, 0, 1, 0, 1);
  $cardCheckBoxesArray4[3] = array( 0, 0, 1, 0, 1);
  $cardCheckBoxesArray4[4] = array( 0, 0, 0, 0, 1);

  echo "\n\ntest 4 - partial column\n";
  echo getCardCheckBoxesAsStr($cardCheckBoxesArray4);
  
  // checkFullCheckedColumnIsPresent
  if (checkFullCheckedColumnIsPresent($cardCheckBoxesArray4)) {
    echo "winning card - complete column found\n";
  }
  else {
    echo "not winning card\n";
  }


  // test nothing
  $cardCheckBoxesArray5 = array();

  $cardCheckBoxesArray5[0] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray5[1] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray5[2] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray5[3] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray5[4] = array( 0, 0, 0, 0, 0);

  echo "\n\ntest 5 - nothing\n";
  echo getCardCheckBoxesAsStr($cardCheckBoxesArray5);

  if (checkFullCheckedColumnIsPresent($cardCheckBoxesArray5)) {
    echo "winning card - complete column found\n";
  }
  else {
    echo "not winning card\n";
  }

  if (checkFullCheckedRowIsPresent($cardCheckBoxesArray5)) {
    echo "winning card - complete row found\n";
  }
  else {
    echo "not winning card\n";
  }


}

?>