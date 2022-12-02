<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Array Manipulation</title>
        <style type="text/css">
            p{margin: 0;}
            .head{margin-top: 10px; font-weight:bold;}
        </style>
    </head>

    <body>
        <?php
            //Create array first
            print("<p class = 'head'>Creating the First Array</p>");
            $first[0] = "zero";
            $first[1] = "one";
            $first[2] = "two";
            $first[3] = "three";

            //Print each element's index and value
            for($i = 0; $i < count($first); $i++)
            {
              print("<p>Element $i is $first[$i]</p>");
            }

            print("<p class= 'head'>Creating the second array</p>");

            //Call function array to create array second
            $second = array("zero", "one", "two", "three");

            for ($i = 0; $i < count($second); ++$i)
            {
                print("<p>Element $i is $second[$i]</p>");
            }

            print("<p class='head'>Creating the third array</p>");

            //assign values to entries using nonnumeric indices
            $third["Amy"] = 21;
            $third["Bob"] = 18;
            $third["Carol"] = 23;

            //iterate through the array elements and print
            //each element's name and value
            for(reset($third); $element = key($third); next($third))
            {
                print("<p>$element is $third[$element]</p>");
            }

            print("<p class='head'>Creating the fourth array</p>");

            //Call function array to create array fourth Using
            //string indeces
            $fourth = array(
                  "January" => "first", "febraury" => "second",
                  "March"   => "third", "April" => "fourth",
                  "May" => "fith", "june" => "sixth",
                  "July" => "seventh", "August" => "eighth",
                  "September" => "nineth", "Octuber" => "tenth",
                  "November" => "eleventh", "December" => "twelfth"
            );

            //Print each element's name and value
            foreach($fourth as $element => $value)
            {
                print("<p>$element is the $value month</p>");
            }
        ?>
    </body>
</html>
