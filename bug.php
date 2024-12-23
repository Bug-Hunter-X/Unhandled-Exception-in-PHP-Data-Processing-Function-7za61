```php
<?php
function processData(array $data): array {
  //Expecting an array of numbers
  $sum = 0;
  foreach ($data as $value) {
    if (!is_numeric($value)) {
      //Incorrect use of throw
      throw new InvalidArgumentException('Invalid data type');
    }
    $sum += $value;
  }
  return ['sum' => $sum];
}

$data = [1, 2, 'a', 4, 5];

try {
  $result = processData($data);
  print_r($result);
} catch (InvalidArgumentException $e) {
  echo "Error: " . $e->getMessage();
}
```