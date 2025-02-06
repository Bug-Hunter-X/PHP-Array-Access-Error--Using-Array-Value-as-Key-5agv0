```php
function fixedFunction($arr) {
  //Check if input is an array
  if (!is_array($arr)) {
    return "Invalid input: Not an array";
  }
  if (empty($arr)) {
    return []; // Return an empty array for an empty input
  }

  $result = [];
  foreach ($arr as $key => $value) {
    // Correct logic: Accessing elements using keys
    if ($value > 10) {
      $result[] = $value; 
    }
  }
  return $result;
}

$data = [1 => 12, 5 => 2, 10 => 15];
$output = fixedFunction($data);
print_r($output);
```