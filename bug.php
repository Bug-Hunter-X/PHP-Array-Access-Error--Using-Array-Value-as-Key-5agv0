```php
function buggyFunction($arr) {
  if (empty($arr)) {
    return []; // Return an empty array for an empty input
  }

  $result = [];
  foreach ($arr as $key => $value) {
    // Incorrect logic: attempting to access $arr[$value], but $value might not be a valid key
    if (isset($arr[$value]) && $arr[$value] > 10) {
      $result[] = $value; 
    }
  }
  return $result;
}

$data = [1 => 12, 5 => 2, 10 => 15];
$output = buggyFunction($data);
print_r($output);
```