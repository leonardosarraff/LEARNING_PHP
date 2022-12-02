<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Results</title>
    </head>
    <body>
        <?php
            include "basicArithmeticOps.php";
            $number1 = (float)$_POST["fnumber1"];
            $number2 = (float)$_POST["fnumber2"];
            $ops = $_POST["operator"];
            $result = getResults($number1, $number2, $ops);
            $output = "<h1>The result of ".$number1." ".$ops." ".$number2." is: ".$result."</h1>";
            print($output);
        ?>
    </body>
</html>
