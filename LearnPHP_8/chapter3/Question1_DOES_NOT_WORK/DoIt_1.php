<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Question 1</title>
    <script type="text/javascript" src="ajaxResponse.js"></script>
  </head>

  <body>
    <h1>Do It.</h1>
    <ol>
        <li>
            <p>Create a program that sets two numerical values to two different
            variables. Then calculate the values when adding, subtracting, dividing,
            and multiplying the numbers. After each calculation, display the results in a sentence,
            such as &#8220;The sum of 1 and 2 is 3&#8221;</p>
            <form>
                <label>Number 1: <input type="text" name="fNum" id="fNum"></label>
                <p></p>
                <label>Number 2: <input type="text" name="sNum" id="sNum"></label>
                <p>
                <input type="button" onclick="AjaxRequest()" value="Caculate">
                </p>
                <div id='AjaxResponse'>
                    Pay attention.. Notice when you click the button that only this section changes.
                </div>
            </form>
        </li>
    </ol>
  </body>
</html>
