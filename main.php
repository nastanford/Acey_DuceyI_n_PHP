<?php
  include "functions/displayGameTitle.php";

  $playing = true; 
  $count = 1;


  displayGameTitle();

do {
  $balence = 100;
  $cards = array('Ace', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'Jack', 'Queen', 'King');

  $card1 = $cards[rand(0, 12)];
  $card2 = $cards[rand(0, 12)];
  $card3 = $cards[rand(0, 12)];

  echo "\nHere are your next two cards:\n";

  echo "\n Card 1: " . $card1;
  echo "\n Card 2: " .  $card2;
  echo "\n";

  echo "\nYou have $".$balence ." Dollars.";

  // Input for bet

  $bet = readline("What is your bet?: ");

  echo $card3;

  $playing = false;

} while ($playing);
