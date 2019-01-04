<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script
			  src="https://code.jquery.com/jquery-3.3.1.min.js"
			  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
              crossorigin="anonymous"></script>
              
    <title>Document</title>
</head>
<body>

    <div id="reponse"></div>

    <button id="ajaxBtn">Click me</button>


    <script>

        $( document ).ready(function() {

        var ajaxBtn = document.getElementById('ajaxBtn');
        var divReponse = document.getElementById('reponse');

        

        ajaxBtn.addEventListener('click',function() {

            <?php $id = "tt0109830"; ?>

            var id="<?php echo $id; ?>";

           var url = "http://www.omdbapi.com/?apikey=164338d3&i="+id;

            $.ajax({
                url: url,
            })
            .done(function( response ) {
                divReponse.innerHTML = response.Actors;
            });


        })
    });

      

    </script>
    
</body>
</html>