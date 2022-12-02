function getXMLHttp()
{
    var xmlHttp;
    try
    {
        xmlHttp =  new XMLHttpRequest();
    }
    catch(exeception)
    {
        //For old Internet Explorer users it is differente than the others
        try
        {
            xmlHttp =  new ActiveXObject("Msxml2.XMLHTTP");
        }
        catch(exeception2)
        {
            try
            {
                xmlHttp =  new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch(exeception3)
            {
                alert("Old Browser!!! Upgrade it, so you can use AJAX!");
                return false;
            }
        }
    }
    return xmlHttp;
}

function AjaxRequest()
{
    var xmlHttp =  getXMLHttp();
    xmlHttp.onreadystatechange = function()
    {
        if(xmlHttp.readyState == 4)
        {
            handleResponse(xmlHttp.responseText);
        }
    };

    var num1 = parseInt(document.getElementById('fNum').value);
    var num2 = parseInt(document.getElementById('sNum').value);
    var soma = num1 + num2;
    xmlHttp.open("GET", "myfirstprogram.php?fNum="+num1+"&sNum="+num2, true);
    xmlHttp.send(null);
}

function handleResponse(response)
{
    document.getElementById('AjaxResponse').innerHTML = response;
}
