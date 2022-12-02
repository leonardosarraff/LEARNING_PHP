<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Residencial Vitória</title>
    </head>
    <body>
        <?php
            print("<h1>Residencial Vitória Torre 2</h1>");
            $aprtMetaDesc = array("Address",
                                  "Building Name",
                                  "Apartment Number",
                                  "Number Of Bedrooms",
                                  "Number of bathrooms");
            $aprtInfo;
            $tower2;
            $numberOfLevels = 18;
            $aprtPerLevel = 6;
            $aprtNumberStart = 3;
            for($cLevel = 1; $cLevel = $numberOfLevels; $cLevel++)
            {
                for($cAprt = $aprtNumberStart; $cAprt == $aprtPerLevel; $cAprt++)
                {
                    $aprtInfo = array("Trav. Humaitá, 967, Pedreira",
                                      "Residencial Vitória",
                                      "Torre 2 ".$cLevel*100,
                                      3,
                                      3
                                     );
                    $tower2[] = $aprtInfo;
                }

            }
            print($tower2);
        ?>
    </body>
</html>
