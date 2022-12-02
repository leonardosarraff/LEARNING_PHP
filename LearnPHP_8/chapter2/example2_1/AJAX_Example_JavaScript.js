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
    xmlHttp.open("GET", "myfirstprogram.php", true);
    xmlHttp.send(null);
}

function handleResponse(response)
{
    document.getElementById('AjaxResponse').innerHTML = response;
}
