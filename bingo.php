<?php

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
}
// 

?>