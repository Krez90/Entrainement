<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

              
    <title>Document</title>
</head>
<body>

    <div id="reponse"></div>

    <button id="ajaxBtn">Click me</button>

    <p style="display:none;" id="loading">Loading...</p>


    <script>


        var ajaxBtn = document.getElementById('ajaxBtn');
        var divReponse = document.getElementById('reponse');

        var loading = document.getElementById('loading');

        ajaxBtn.addEventListener('click',function() {

            loading.style.display = 'block';

            <?php $id = "tt0109830"; ?>

            var id="<?php echo $id; ?>";

            var url = "http://www.omdbapi.com/?apikey=164338d3&i="+id;


            fetch(url)
            .then(function(response) {
                return response.json();
            })
            .then(function(myObject) {
                loading.style.display = 'none';
                divReponse.innerHTML = myObject.Actors;
            });

        })

      

    </script>
    
</body>
</html>