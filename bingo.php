<?php

require 'readCardFileIntoArray.php';
require 'getCardAsStr.php';
require 'outputCommandLineArgs.php';



$minimumNumParamsRequired = 3;

$indexPosOfFirstBingoCard = 2;

$debugEnabled = 1; // TODO - implement command line flag to be checked to then set this to true

if ($debugEnabled) {
  outputCommandLineArgs($argv);
}

$actualNumParams = count($argv);
if ($actualNumParams >= $minimumNumParamsRequired) {
  $lastIndex = $actualNumParams - 1;

  // read in bingo card
  $calledNumberSequence = $argv[1];

  // get sequence

  // get cards  
  for ($cardIndex = $indexPosOfFirstBingoCard; $cardIndex <= $lastIndex; $cardIndex++) {
    
    if ($debugEnabled) {
      echo $cardIndex.": ".$argv[$cardIndex]."\n";
    }
    
    $cardAsArray = readCardFileIntoArray($argv[$cardIndex]);

    if ($debugEnabled) {
      echo getCardAsStr($cardAsArray);
    }
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