<?php

  function Palindrome($String) {
      $l = 0;
      $r = strlen($String) - 1;
      $check = 0;
      while($r > $l){
        if ($String[$l] != $String[$r]){
          $check = 1;
          break;
        }
        $l++;
        $r--;
      }
      if ($check == 0){
        echo $String." is a Palindrome string.<br>";
      }
      else{
        echo $String." is not a Palindrome string.<br>";
      }
  }

  Palindrome("abcdcba");
  Palindrome("tanay");
  Palindrome("madam");

?>