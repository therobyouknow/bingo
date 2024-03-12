<?php

function testCardCheckBoxes() {
  // 

  // test full row
  $cardCheckBoxesArray1 = array();

  $cardCheckBoxesArray1[0] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray1[1] = array( 1, 1, 1, 1, 1);
  $cardCheckBoxesArray1[2] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray1[3] = array( 0, 0, 1, 1, 0);
  $cardCheckBoxesArray1[4] = array( 0, 0, 0, 0, 0);

  echo "test 1 - full row\n";
  echo getCardCheckBoxesAsStr($cardCheckBoxesArray1);


  // test partial row
  $cardCheckBoxesArray2 = array();

  $cardCheckBoxesArray2[0] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray2[1] = array( 0, 0, 1, 1, 0);
  $cardCheckBoxesArray2[2] = array( 1, 0, 0, 0, 0);
  $cardCheckBoxesArray2[3] = array( 0, 0, 0, 1, 0);
  $cardCheckBoxesArray2[4] = array( 0, 0, 0, 0, 0);

  echo "test 2 - partial row\n";
  echo getCardCheckBoxesAsStr($cardCheckBoxesArray2);



  // test full column
  echo $cardCheckBoxesArray3 = array();

  $cardCheckBoxesArray3[0] = array( 0, 0, 0, 1, 0);
  $cardCheckBoxesArray3[1] = array( 0, 0, 0, 1, 0);
  $cardCheckBoxesArray3[2] = array( 0, 1, 1, 1, 0);
  $cardCheckBoxesArray3[3] = array( 0, 0, 0, 1, 0);
  $cardCheckBoxesArray3[4] = array( 1, 1, 0, 1, 0);

  echo "test 3 - full column\n";
  echo getCardCheckBoxesAsStr($cardCheckBoxesArray3);


  // test partial column
  $cardCheckBoxesArray4 = array();

  $cardCheckBoxesArray4[0] = array( 0, 0, 1, 0, 0);
  $cardCheckBoxesArray4[1] = array( 0, 0, 1, 0, 1);
  $cardCheckBoxesArray4[2] = array( 0, 0, 1, 0, 1);
  $cardCheckBoxesArray4[3] = array( 0, 0, 1, 0, 1);
  $cardCheckBoxesArray4[4] = array( 0, 0, 0, 0, 1);

  echo "test 4 - partial column\n";
  echo getCardCheckBoxesAsStr($cardCheckBoxesArray4);


  // test nothing
  $cardCheckBoxesArray5 = array();

  $cardCheckBoxesArray5[0] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray5[1] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray5[2] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray5[3] = array( 0, 0, 0, 0, 0);
  $cardCheckBoxesArray5[4] = array( 0, 0, 0, 0, 0);

  echo "test 5 - nothing\n";
  echo getCardCheckBoxesAsStr($cardCheckBoxesArray5);
}

?>