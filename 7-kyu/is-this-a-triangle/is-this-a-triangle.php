<?php
  
function isTriangle(int $a, int $b, int $c): bool{
  return ($a + $b > $c) && ($a + $c > $b) && ($b + $c > $a);
}