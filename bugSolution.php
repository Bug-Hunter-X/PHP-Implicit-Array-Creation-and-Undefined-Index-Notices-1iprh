The solution involves explicitly checking for the existence of the array key before attempting to assign a value.  Here are two ways to solve this:

**Method 1: Using `isset()`**

```php
<?php
$myArray = [];
if (!isset($myArray['key'])) {
  $myArray['key'] = 'value';
}
// ... rest of your code
?>
```

**Method 2: Using `array_key_exists()`**

```php
<?php
$myArray = [];
if (!array_key_exists('key', $myArray)) {
  $myArray['key'] = 'value';
}
// ... rest of your code
?>
```

Both methods ensure that the assignment occurs only if the key doesn't already exist, thereby eliminating the potential for unexpected behavior and silent array creation.