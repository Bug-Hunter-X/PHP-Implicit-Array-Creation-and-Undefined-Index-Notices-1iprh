# PHP Implicit Array Creation and Undefined Index Notices

This repository demonstrates a common, subtle bug in PHP related to implicit array creation and the resulting "Undefined index" notices.  The bug arises when attempting to assign values to array elements without first checking if the array or the key exists.

The `bug.php` file showcases the problematic code.  The `bugSolution.php` file provides a corrected version that demonstrates how to safely handle array assignments.

This is a critical issue because the implicit array creation is silent; it doesn't cause an error, but it does lead to unexpected behavior in many situations.  Always remember to check for array keys using `isset()` or `array_key_exists()` before assignment to avoid the bug.
