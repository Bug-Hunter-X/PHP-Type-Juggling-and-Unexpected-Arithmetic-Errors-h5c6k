```php
function buggyFunction($arr) {
  if (empty($arr)) {
    return 0; // Handle empty array
  }
  $sum = 0;
  foreach ($arr as $value) {
    $sum += $value;
  }
  return $sum / count($arr);
}

$numbers = [10, 20, 30, 40, 50];
echo buggyFunction($numbers); // Works fine

$emptyArray = [];
echo buggyFunction($emptyArray); // Returns 0 as expected

$strings = ['apple', 'banana', 'cherry'];
echo buggyFunction($strings); // Notice: A non well formed numeric value encountered in...
```