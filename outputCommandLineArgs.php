<?php

function outputCommandLineArgs($args) {
  echo "arguments\n";

  foreach ($args as $argNum => $argValue) {
    echo "$argNum: ".$argValue."\n";
  }
}

?>