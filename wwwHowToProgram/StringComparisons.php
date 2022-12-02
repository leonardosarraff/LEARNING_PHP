<!doctype html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>String Comparison</title>

        <style type = "text/css">
            p {margin: 0;}
        </style>
    </head>

    <body>
        <?php
            //Creat array fruits
            $fruits =  array("apple", "orange", "banana");

            //iterate through each array element
            for($i = 0; $i < count($fruits); $i++)
            {
                //Call function strcmp to compare the array element
                //to string "banana".
                if(strcmp($fruits[$i], "banana") < 0)
                {
                    print("<p>".$fruits[$i]." is less than banana ");
                }
                elseif(strcmp($fruits[$i], "banana") > 0)
                {
                    print("<p>".$fruits[$i]. " is greater than banana ");
                }
                else
                {
                    print("<p>". $fruits[$i]." is equal to banana ");
                }

                //USe relational  operators to compare each element
                //to string apple
                if($fruits[$i] < "apple")
                {
                    print("and less than apple!</p>");
                }
                elseif($fruits[$i] > "apple")
                {
                    print("and greater than apple!</p>");
                }
                elseif($fruits[$i] == "apple")
                {
                    print("and equal to apple!</p>");
                }
            }
        ?>
    </body>
</html>
