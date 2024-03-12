<?php

require readCardFileIntoArray.php;
require getCardAsStr.php;

// read in bingo card
$calledNumberSequence = $argv[1];

$minimumNumParamsRequired = 3;

$indexPosOfFirstBingoCard = 2;

$actualNumParams = count($argv);
if ($actualNumParams >= $minimumParamsRequired) {
  // get sequence

  // get cards  
  for ($cardIndex = $indexPosOfFirstBingoCard; $cardIndex <= $actualNumParams; $cardIndex++) {
    $cardAsArray = readCardFileIntoArray($argv[$cardIndex]);
  } 

  echo getCardAsStr($cardAsArray);
}
else {
  echo "usage:";
  echo "bingo.php [sequence filename] [card file name...]";
  echo " - sequence filename followed by one or more card file names ";
  echo "";
  echo "examples:";
  echo "bingo.php calledNumbers.txt card1.txt";
  echo "bingo.php calledNumbers.txt card1.txt card2.txt card3.txt";
}
// 

?>