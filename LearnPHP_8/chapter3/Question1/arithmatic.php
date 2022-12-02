<!doctype html>
<html>
  <head>
      <meta charset="utf-8" />
      <title>Calculation Results</title>
  </head>

  <body>
      <?php
          $number1 = $_POST["fNum"];
          $number2 = $_POST["sNum"];
          $result = (int)$number1 + (int)$number2;

          print("<p>First Number: ".$number1."</p>");
          print("<p>Second Number: ".$number2."</p>");
          print("<p>The sum of ".$number1." + ".$number2." is: ".$result."</p>");
          $result = (int)$number1 - (int)$number2;
          print("<p>The subtraction of ".$number1." - ".$number2." is: ".$result."</p>");
          $result = (int)$number1 * (int)$number2;
          print("<p>The multiplication of ".$number1." * ".$number2." is: ".$result."</p>");
          $result = (int)$number1 / (int)$number2;
          print("<p>The division of ".$number1." / ".$number2." is: ".$result."</p>");
      ?>
  </body>
</html>
