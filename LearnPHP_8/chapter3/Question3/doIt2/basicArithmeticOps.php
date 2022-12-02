<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
    </head>
    <body>
        <?php
            function getResults($number1, $number2, $operator)
            {
                $result;
                try
                {
                    switch($operator)
                    {
                        case '+':
                          $result = $number1 + $number2;
                          break;
                        case '-':
                          $result = $number1 - $number2;
                          break;
                        case '*':
                          $result = $number1 * $number2;
                          break;
                        case '/':
                          $result = $number1 / $number2;
                          break;
                        default:
                            $result = "It is not a valid operator.";
                            break;
                    }

                }
                catch(zeroException $exception)
                {
                      print("<h1 style='color:red'>Division by Zero is not allowed<h1>");
                      $result="Division by zero is not allowed";
                }
                return $result;
            }
        ?>
    </body>
</html>
