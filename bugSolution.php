```php
<?php
function processData(array $data): array {
  $sum = 0;
  foreach ($data as $value) {
    if (!is_numeric($value)) {
      //Improved error handling
      return ['error' => 'Invalid data type encountered'];
    }
    $sum += $value;
  }
  return ['sum' => $sum];
}

$data = [1, 2, 'a', 4, 5];

$result = processData($data);

if (isset($result['error'])) {
  echo "Error: " . $result['error'];
} else {
  print_r($result);
}
```