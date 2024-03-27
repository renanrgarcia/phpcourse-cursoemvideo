# Strings
- Double quoted
  - PHP interprets the text inside
  - Ex: "PHP \u{1F418}" > PHP 🐘
- Single quoted
  - PHP doesn't interpret
  - Ex: 'PHP \u{1F418}' > PHP \u{1F418}
- Heredoc: interprets the text inside
  `echo <<< ANY_WORD`
  `A $str1 is`
  `any text $str2`
  `ANY_WORD`
- Nowdoc: doesn't interpret the text inside
  `echo <<< 'ANY_WORD'`
  `A $str1 is`
  `any text $str2`
  `ANY_WORD`

- Use the scape sequence to show quotes
  - `echo "$var1 \"text quoted\" $var2.";`
  - \n: New line
  - \t: Horizontal tab
  - \\: Backslash
  - \$: Dollar sign
  - \u{}: Codepoint unicode
## Concatenation
- Operator: dot(.)
  - Doesn't work for constants. We need to use Interpolation

## Interpolation 
- Ex: `echo "$str1 and $str2 are " . CONSTANT`
