<!doctype html>
<html>
    <head>
          <meta charset="utf-8" />
          <title>Regular Expressions</title>
          <style type="text/css">
                p{margin: 0}
          </style>
    </head>

    <body>
          <?php
              $search = "Now is the time";
              print("<p>Test string is: '$search'</p>");

              //Call preg_match to search for pattern 'Now' in a
              //variable search
              if(preg_match("/Now/", $search))
              {
                  print("<p>'Now' was found.</p>");
              }

              //Search for pattern 'Now' in the beginning of the String
              if(preg_match("/^Now/", $search))
              {
                  print("<p>'Now' found at beginning of the line.</p>");
              }

              //search for pattern 'Now' at the end of the string
              if(!preg_match("/Now$/", $search))
              {
                  print("<p>'Now' was not found at the end of the line</p>");
              }

              //search for any word ending in 'ow'
              if(preg_match("/\b([a-zA-Z]*ow)\b/i", $search, $match))
              {
                  print("<p>Word found ending in 'ow: '.$match[1].</p>");
              }

              //Search for any words beginning with 't'
              print("<p>Words beginning with 't' found: ");

              while(preg_match("/\b(t[[:alpha:]]+)\b/", $search, $match))
              {
                  print($match[1]." ");
                  //Remove the first occurance of a word beginning
                  //with 't' to find other instances in the string
                  $search = preg_replace("/".$match[1]."/", "", $search);
              }

              print("</p>");
          ?>
    </body>
</html>
