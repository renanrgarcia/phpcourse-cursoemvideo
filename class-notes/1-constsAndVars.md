# Consts and vars
- Methods and attributes: camelCase
- Constants: SNAKE_CASE
- var_dump($var) > returns the type and value of variable
- Casting: change the type
  - Ex: 
  `$num = (int) 3e2`
  `var_dump($num)` // int(30)

# Primitive types
## Scalar
- $string = "Renan"
- $int (or integer) = 34
  - 0x = hexadecimal, 0b = binary, 0 = octal
- $float (or double) = 56.98
  - 5e2 = 5 x 10² = 50 (float)
  - "real" is deprecated since PHP 7
- $bool (or boolean) = true
  - `echo true` // 1
  - `echo false` // ""

## Compound
- Array
  `$vector = [1, 2, 3]`
  `var_dump($vector);` // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
- Object
  <code>
  class Person {
      private string $name;
    }
    $p = new Person;
    `var_dump($p)
  </code>

## Special
- Null
- Resource
- Callable
- Mixed