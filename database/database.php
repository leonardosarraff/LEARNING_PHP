<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Search Results</title>
        <style type="text/css">
            body{font-family: sans-sans-serif;
                 background-color: lightyellow;}
            table{background-color: lightblue;
                  border-collapse: collapse;
                  border: 1px solid gray;}
               td{padding: 5px;}
            tr:nth-child(odd){
                 background-color: white;}
        </style>
    </head>

    <body>
        <?php
            $select = $_POST["select"];//Creates variable $select

            //build SELECT query
            $query = "select " .$select." from books";

            $servername = "localhost";
            $username = "phpLearning";
            $password = "matakura6296455426";
            $dbname = "products";

            //Create connection
            $conn =  mysqli_connect($servername, $username, $password, $dbname);

            //Check connection
            if(!$conn)
            {
                die("Could not connect to MySQL Server: " . mysqli_connect_error());
            }

            //Query Products database
            if(!($result = mysqli_query($conn, $query)))
            {
                print("<p>Could not execute query!</p>");
                die(mysqli_error()."</body></html>");
            }

            mysqli_close($conn);
        ?>
        <table>
            <caption>
                Results of "SELECT <?php print("$select")?> FROM books"
            </caption>

            <?php
                //fetch each record in result set
                while($row = mysqli_fetch_row($result))
                {
                    //build table to display results
                    print("<tr>");
                    foreach($row as $key => $value)
                    {
                        print("<td>$value</td>");
                    }
                    print("</tr>");
                }
            ?>
        </table>
        <p>
            Your search yielded
            <?php print(mysqli_num_rows($result))?> results
        </p>
        <p>
            Please email comments to  <a href="mailto:deitel@deitel.com">
                                          Deitel an Associates, Inc.
                                      </a>
        </p>
    </body>
</html>
