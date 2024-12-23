# Unhandled Exception in PHP Data Processing Function

This repository demonstrates a common error in PHP: improperly handling exceptions. The `processData` function is designed to sum numbers in an array.  If a non-numeric value is encountered, it throws an `InvalidArgumentException`. However, error handling is insufficient, potentially leaking internal state information.

The `bug.php` file shows the problematic code.  The `bugSolution.php` offers an improved version.