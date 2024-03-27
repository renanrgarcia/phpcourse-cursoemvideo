# Forms
- `var_dump($_GET)`
  - Returns an associative array of variables passed to the current script via the URL parameters (aka. query string). 
  - It's a super global variable: they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.
  - There are `$_POST` and `$_REQUEST`, the last one unite get, cookies and post. 
- The `??` is the null coalescing operator. It accepts two operands. If the first operand is null or doesn’t exist, the null coalescing operator returns the second operand.