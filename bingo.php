<?php

require 'readCardFileIntoArray.php';
require 'getCardAsStr.php';



$minimumNumParamsRequired = 3;

$indexPosOfFirstBingoCard = 2;

$actualNumParams = count($argv);
if ($actualNumParams >= $minimumNumParamsRequired) {
  // read in bingo card
  $calledNumberSequence = $argv[1];

  // get sequence

  // get cards  
  for ($cardIndex = $indexPosOfFirstBingoCard; $cardIndex <= $actualNumParams; $cardIndex++) {
    $cardAsArray = readCardFileIntoArray($argv[$cardIndex]);
  } 

  echo getCardAsStr($cardAsArray);
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