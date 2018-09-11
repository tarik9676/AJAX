<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax 1 - Text file</title>
    <style>
    body {
    background: #e4e4e4;
    font-family: Cambria, Cochin, Georgia, Times, Times New Roman, serif;
    font-size: 1.6em
}

.container {
    margin: auto;
    margin-top: 50px;
    width: 80%;
    text-align: justify
}

button {
    background-color: #0a8b20;
    width: 100px;
    height: 40px;
    color: white;
    font-weight: bold
}

</style>
</head>

<body>

<div class="container">
    
    <button id="button">Get Text File</button>
    <div id="text"></div>

    <script type="text/javascript">

        // Create event listener
     document.getElementById('button').addEventListener('click', loadText);

        function loadText() {
            // Create XHR Object
            var xhr = new XMLHttpRequest();
            // Open - type, url/file, async
            xhr.open('GET', 'sample.txt', true);

     console.log('READYSTATE: ', xhr.readyState);

    // Optional - used for loaders 
           xhr.onprogress = function() {
                console.log('READYSTATE: ', xhr.readyState);

             }
            xhr.onload = function() {
                console.log('READYSTATE: ', xhr.readyState);
                if (this.status == 200) {
                    //console.log(this.responseText);
                    document.getElementById('text').innerHTML = this.responseText;
                } else if (this.status = 404) {
                    document.getElementById('text').innerHTML = 'Not Found';
                }
            }
            xhr.onerror = function() {
                console.logF('Request error... ')
            }

            xhr.send();
        }
    </script>

</div>

</body>

</html>