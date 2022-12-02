<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
    </head>

    <body>
        <?php
            print("<p>Number 1: ".$_GET["fNum"]."</p>");
            print("<p>Number 2: ".$_GET["sNum"]."</p>");
            $soma = ((int)$_POST["fNum"]) + ((int)$_POST["sNum"]);
            print("<p>Soma: ".$soma."</p>");
        ?>
    </body>
</html>
