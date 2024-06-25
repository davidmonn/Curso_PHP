<?php

  $test = (int) "Testando";
  $n1 = (int) 12.9;
  $v = (int) true;
  $n2 = (int) [1,2,3];
  
  echo "$test = ";
  if(is_int($test)) {
    echo "É um iteiro <br>";
  }

  echo "$n1 = ";
  if(is_int($n1)) {
    echo "É um inteiro <br>";
  }

  echo true . " = ";
  if(is_int($v)) {
    echo "Booleano virou um inteiro <br>";
  }

  echo $n2 . " = ";
  if(is_int($n2)) {
    echo "Array virou inteiro";
  }

?>