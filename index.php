<?php

/*The Marketing team is spending way too much time in typing hashtags.
  Let's help them with our own Hashtag Generator!
  Here's the deal. It must start with hashtag(#).
  All words must have their letter capitablized.
  If the final result is longer than 140 Chars it must return false.
  If the input or the result is an empty string it must return */

  $text = "I Love to Code #allthetime";
  $hash = "#";
  //Split the input into words
  $split = explode(" ", $text);
  //Join "I Love to Code #allthetime" to ILovetoCode#allthetime
  for ($i=0; $i < count($split) ; $i++) {
    //if Substring matches with #
       if(substr($split[$i], 0, 1) === $hash){ // Picking only 1 string i.e #
           $split[$i] = "<a href='#" .$split[$i]."'>".$split[$i]."</a>";
       }
       //Join them back together
       $result = implode(" ", $split);
       echo $result;
  }