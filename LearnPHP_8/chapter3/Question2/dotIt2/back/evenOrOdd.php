<!doctype html>
<html>
    <head>
      <meta charset="utf-8" />
      <title>Is it Even or Odd?</title>
    </head>

    <body>
        <h1>Results:</h1>
        <?php
            $number = $_POST["numberField"];
            $number = (int) $number;

            if($number % 2 != 0)
            {
                $cube = pow($number, 3);
                print("<h2>The given number: ".$number." is odd. So it's cube is: ".$cube);
            }
            else
            {
                $square = pow($number, 2);
                print("<h2> The given number: ".$number." is even. So it's squace is: ".$square);
            }
        ?>
    </body>
</html>
