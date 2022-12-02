<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Arrays in PHP</title>
    </head>
    <body>
        <?php
            $aprtMetaDesc = array("Address",
                                  "Building Name",
                                  "Apartment Number",
                                  "Number Of Bedrooms",
                                  "Number of bathrooms");
            $aprtData = array("Trav. Humaitá, 967, Pedreira",
                              "Residencial Vitória",
                              "705 Torre 2",
                              3,
                              3
                              );
            print("<h1>My Apartment</h1>");
            $html = "<table>
                        <thead>
                            <tr>
                                <th>Item de Descrição</th>
                                <th>Informação</th>
                            </tr>
                        </thead>
                        <tbody>";
            for($i = 0; $i<sizeof($aprtMetaDesc); $i++)
            {
                    $newLine = "<tr>".
                                  "<th>".$aprtMetaDesc[$i]."</th>".
                                  "<th>".$aprtData[$i]."</th>".
                               "</tr>";
                    $html = $html.$newLine;
            }
            $html = $html."</tbody>".
                    "</table>";
            print($html);
            var_dump($html);
        ?>
    </body>
</html>
