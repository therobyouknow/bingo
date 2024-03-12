<?php

function testSetCheckbox() {
 
    echo 'test checkbox 1\n';
    
    echo 'before\n';

    $cardAsArray1 = array();

    $cardAsArray1[0] = array(22, 13, 17, 11, 0);
    $cardAsArray1[1] = array(8, 2, 23, 4, 24);
    $cardAsArray1[2] = array(21, 9, 14, 16, 7);
    $cardAsArray1[3] = array(6, 10, 3, 18, 5);
    $cardAsArray1[4] = array(1, 12, 20, 15, 19);


    $cardCheckBoxesArray1 = array();
  
    $cardCheckBoxesArray1[0] = array( 0, 0, 0, 0, 0);
    $cardCheckBoxesArray1[1] = array( 0, 0, 0, 0, 0);
    $cardCheckBoxesArray1[2] = array( 0, 0, 0, 0, 0);
    $cardCheckBoxesArray1[3] = array( 0, 0, 0, 0, 0);
    $cardCheckBoxesArray1[4] = array( 0, 0, 0, 0, 0);


    setCheckBoxInCardForNumber(14, $cardAsArray1, $cardCheckBoxesArray1);

    echo 'after\n';

    echo getCardCheckBoxesAsStr( $cardCheckBoxesArray1 );
  }

?>