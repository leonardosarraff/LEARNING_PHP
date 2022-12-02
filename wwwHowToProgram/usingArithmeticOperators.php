<!doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>Using Arithmetic Operators</title>
        <style type="text/css">
            p {margin: 0;}
        </style>
    </head>

    <body>
        <?php
            $a = 5;
            print("<p>The value of variable a is $a</p>");

            //Define constant VALUE
            define("VALUE", 5);

            //Add constant VALUE to variable $a
            $a = $a + VALUE;
            print("<p>Variable a after adding consta VALUE is $a</p>");

            //Multiply variable $a by 2;
            $a *= 2;
            print("<p>Multiplying variable a by 2 yields $a</p>");

            //test if variable $a is less the 50.
            if($a < 50)
              print("<p>Variable a is less than 50</p>");

            //Add 40 to variable $a
            $a += 40;
            print("<p>Variable a after adding 40 is $a</p>");

            //Test if variable $a is 50 or less
            if($a < 51)
                print("<p><Variable a is still 50 or less</p>");
            elseif($a < 101)
                print("<p>Variable a is now between 50 and 100, inclusive</p>");
            else
                print("<p>Variable a is now greater than 100</p>");

            //Print an unitialized variable
            print("<p>Using a variable before initializing:
                  $nothing</p>");//nothing evalueted to ""

            //add constant VALUE to an unitialized variable
            $test = $num + VALUE;//$num evaluetes to 0;
            print("<p>An unitialized variable plus constant VALUE
                 yields $test</p>");

            //add a String to an integer
            $str = "3 dollars";
            $a += $str;
            print("<p>Adding a string to a variable yields $a</p>");
        ?>
    </body>
</html>
