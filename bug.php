```php
function incrementArray(&$arr) {
  foreach ($arr as &$value) {
    $value++;
  }
}

$numbers = [1, 2, 3];
incrementArray($numbers);
print_r($numbers); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 )

// Unexpected behavior when using objects:
class MyClass {
  public $value;
  function __construct($value) {
    $this->value = $value;
  }
}

$objects = [new MyClass(1), new MyClass(2), new MyClass(3)];
incrementArray($objects);
print_r($objects); // Output: Array ( [0] => 2 [1] => 3 [2] => 4 ) // Incorrect!
```