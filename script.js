
/**
 * Created by sstienface on 25/01/2019.
 */

function ajaxCall()
{

        var url = params.url;
        for(var i in params.parameters)
        {
            parameters+=Object.keys(params.parameters[i])[0]+"="+params.parameters[i][Object.keys(params.parameters[i])[0]];
        }

        url+=parameters;

        var xhttp = new XMLHttpRequest();

        xhttp.onreadystatechange = function()
        {
            if(this.readyState == 4 && this.status == 200)
            {
                var json = JSON.parse(this.responseText);

                        for(var i in json)
                        {
                            var div = document.createElement('div');
                            div.innerHTML = "<h1>"+json[i].username+"</h1>";
                            div.innerHTML+= "<p>"+json[i].commentary+"</p>";
                            div.innerHTML+= "<p>"+json[i].date+"</p>";
                            document.getElementById('corps1').appendChild(div);

                        }



            }

            $username = $('#username').val();
            $commentary = $('#commentary').val();

            xhttp.open("GET","page1.php?username="+$username+"&commentary="+$commentary, true);
            xhttp.send();



            console.log("Sent an http request :"+url);


        };


}

document.getElementById('bouton').addEventListener('click', function()
{
    ajaxCall(
        {'url' : 'page1.php',
        }
    );

});