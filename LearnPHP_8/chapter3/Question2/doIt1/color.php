<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>According to the Color</title>
    </head>

    <body>
        <?php
            $chosenColor = $_POST["colorF"];
            print("<h1>Using IF Statements</h1>");
            if($chosenColor=="green")
            {
                print("<p>I Love the earth</p>");
            }
            else
            {
                if($chosenColor=="blue")
                {
                    print("<p>The sky is beautiful</p>");
                }
                else
                {
                    if($chosenColor=="yellow" or $chosenColor=="orange")
                    {
                        print("<p>I love sunsets</p>");
                    }
                    else
                    {
                        print("<p>".$chosenColor." is my favorite color.</p>");
                    }
                }
            }
            print("<h1>Using switch Statement</h1>");
            switch ($chosenColor)
            {
                  case "green":
                    print("<p>I love the earth</p>");
                    break;
                  case "blue":
                    print("<p>The sky is beautiful</p>");
                    break;
                  case "yellow":
                    print("<p>I love sunsets</p>");
                    break;
                  case "orange":
                    print("<p>I love sunset</p>");
                    break;
                  default:
                    print("<p>".$chosenColor." is my favorite color.</p>");
                    break;
            }
        ?>
    </body>
</html>
