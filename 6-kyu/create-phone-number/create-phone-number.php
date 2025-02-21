function createPhoneNumber($numbersArray) {
  $areaCode = $firstPart = $secondPart = "";
 
  $i = 0;
  foreach ($numbersArray as $number) {
    if ($i < 3) {
      $areaCode .= (string) $number;
    } elseif ($i < 6) {
      $firstPart .= (string) $number;
    } else 
      $secondPart .= (string) $number;
    $i++;
  }
  
  return "({$areaCode}) {$firstPart}-{$secondPart}";
}