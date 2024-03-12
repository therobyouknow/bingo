<?php

require_once 'readCardFileIntoArray.php';
require_once 'readCalledNumbersIntoArray.php';
require_once 'getInitialisedCardCheckBoxesAsArray.php';

// testing
require_once 'testCardCheckBoxes.php';
require_once 'testSetCheckbox.php';

// debug
require_once 'getCardAsStr.php';
require_once 'getCalledNumbersAsStr.php';
require_once 'outputCommandLineArgs.php';
require_once 'getCardCheckBoxesAsStr.php';
require_once 'setCheckBoxInCardForNumber.php';
//
$debugEnabled = 0; // TODO - implement command line flag to be checked to then set this to true


$minimumNumParamsRequired = 3;
$indexPosOfCalledNumbers = 1;
$indexPosOfFirstBingoCard = 2;

$cardCheckBoxesAsArray = getInitialisedCardCheckBoxesAsArray();
if ($debugEnabled) {
  echo getCardCheckBoxesAsStr($cardCheckBoxesAsArray);
}


if ($debugEnabled) {
  outputCommandLineArgs($argv);
}

$actualNumParams = count($argv);
if ($actualNumParams >= $minimumNumParamsRequired) {
  $lastIndex = $actualNumParams - 1; // because first item starts at zero (0)

  // read in called number sequence
  $calledNumberSequenceFilename = $argv[$indexPosOfCalledNumbers];
  $callednumbersAsArray = readCalledNumbersIntoArray($calledNumberSequenceFilename);

  echo "called numbers sequence:\n";
  echo getCalledNumbersAsStr($callednumbersAsArray);
  echo "\n";
  

  // get cards  
  $aWinningCardFound = false;
  $currentWinningCardEarliestIndex = 0;
  $currentEarliestWinningCard = "";
  for ($cardIndex = $indexPosOfFirstBingoCard; $cardIndex <= $lastIndex; $cardIndex++) {
    
    if ($debugEnabled) {
      echo $cardIndex.": ".$argv[$cardIndex]."\n";
    }
    
    $cardAsArray = readCardFileIntoArray($argv[$cardIndex]);
    $cardCheckBoxesArray = getInitialisedCardCheckBoxesAsArray();
    if ($debugEnabled) {
      echo "\ncard:\n";
      echo getCardCheckBoxesAsStr($cardCheckBoxesArray);
    }

    $winningCardFound = false;
    $winningCalledNumberIndex = 0; // in case of scope
    foreach($callednumbersAsArray as $calledNumberIndex => $aCalledNumber) {
      setCheckBoxInCardForNumber($aCalledNumber, $cardAsArray, $cardCheckBoxesArray);
      if ( checkFullCheckedColumnIsPresent($cardCheckBoxesArray) ) {
        echo "\n\nwinning card: ".$argv[$cardIndex]."\n";
        echo getCardAsStr($cardAsArray)."\n";
        echo "winning column:\n";
        echo getCardCheckBoxesAsStr($cardCheckBoxesArray);
        $winningCardFound = true;
        $winningCalledNumberIndex = $calledNumberIndex;
        $aWinningCardFound = true;
        echo "index position of last called number that resulted in the win:".$winningCalledNumberIndex."\n";
        break;
      }

      if ( checkFullCheckedRowIsPresent($cardCheckBoxesArray) ) {
        echo "\n\nwinning card: ".$argv[$cardIndex]."\n";
        echo getCardAsStr($cardAsArray)."\n";
        echo "winning row:\n";
        echo getCardCheckBoxesAsStr($cardCheckBoxesArray);
        $winningCardFound = true;
        $winningCalledNumberIndex = $calledNumberIndex;
        $aWinningCardFound = true;
        echo "index position of last called number that resulted in the win:".$winningCalledNumberIndex."\n";
        break;
      }
    }

    if ($winningCardFound) {
      if ($winningCalledNumberIndex < $currentWinningCardEarliestIndex) {
        $currentEarliestWinningCard = $argv[$cardIndex];
        $currentWinningCardEarliestIndex = $winningCalledNumberIndex;
      }
    }
  }
  
  if ($aWinningCardFound) {
    echo "\n\nEarliest winning card - i.e. fewest calls of numbers required is:\n";
    echo $currentEarliestWinningCard." where the called number at position ".$currentWinningCardEarliestIndex." was the earliest.\n";
  }
}
else {
  echo "usage:\n";
  echo "php -f bingo.php [sequence filename] [card file name...]\n";
  echo " - sequence filename followed by one or more card file namesn\n";
  echo "\n";
  echo "examples:\n";
  echo "php -f bingo.php calledNumbers.txt card1.txt\n";
  echo "php -f bingo.php calledNumbers.txt card1.txt card2.txt card3.txt\n";
}
// 

?>