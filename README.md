# PHP Array Access Error: Using Array Value as Key

This repository demonstrates a common error in PHP array handling: attempting to use an array's *value* as a key to access another element.  This can lead to unexpected results or fatal errors if the value isn't a valid key.

## The Bug
The `buggyFunction` in `bug.php` iterates through an array.  It checks if a value exists as a *key* in the array, leading to potential issues if array values are not valid keys.

## The Solution
The `bugSolution.php` file corrects this by directly using the `$key` as an index to prevent the error. It also enhances the function by checking for both empty and non-array inputs and handles these gracefully.