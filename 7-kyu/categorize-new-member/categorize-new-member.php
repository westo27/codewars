<?php
  
function open_or_senior(array $data): array {
  $response = [];
  foreach ($data as $datum) {
    $age      = $datum[0];
    $handicap = $datum[1];
    
    if ($age >= 55 && $handicap > 7) {
      $category = "Senior";
    } else {
      $category = "Open";
    }
    $response[] = $category;
  }
  return $response;
}