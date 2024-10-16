<?php 
function displayGameTitle() {
  echo str_pad("Acey Ducey Card Game", 26, " ", STR_PAD_LEFT) . "\n";
  echo str_pad("Creative Computing Morristown, New Jersey", 15, " ", STR_PAD_LEFT) . "\n\n";
  echo "Acey-Ducey is played in the following manner \n";
  echo "the dealer (computer) deals two cards face up\n";
  echo "you have an option to bet or not bet depending\n";
  echo "on whether or not you feel the card will have\n";
  echo "a value between the first two.\n\n";
  echo "if you do not want to bet, input a 0\n";
}
