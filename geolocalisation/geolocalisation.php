<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<?php
include('info.php');
?>
<script type="text/javascript" src="<?='https://maps.googleapis.com/maps/api/js?key='.$key.'&libraries=places'?>"></script>

<title>géolocation</title>


</head>
<body>

<!-- Un élément HTML pour recueillir l’affichage -->

<div id="geolocation"></div>

<p><a href="#" id="loc-bt">Localiser</a></p>

<div id="contentMap"></div>

<script>
    function initEvent(){
        document.getElementById("loc-bt").onclick=function(){
            localise();
        }
        function localise(){
            if(navigator.geolocation){
                navigator.geolocation.getCurrentPosition(AffichePosition, gestionErrors,{timeout: 20000});
            }
        }
        function AffichePosition(position){
            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            var options = {zoom: 15, center:new google.maps.LatLng(latitude,longitude),};
            var map = new google.maps.Map(document.getElementById("contentMap"), options);
            var marker = new google.maps.Marker({position: new google.maps.LatLng(latitude,longitude)});
            marker.setMap(map);
        }
        
    }

    function gestionErrors(error){
        switch(error.code){
            case 3:
            alert("temps dépassé");
            break;

            case 2:
            alert("Le navigateur ne parvient pas à vous localiser");

            case 1:
            alert("Vous ne souhaitez pas partager votre localisation");

            case 0:
            alert("Erreur");
            break;
        }
    }

    if(window.addEventListener){
        window.addEventListener('load',initEvent,false);
    }else if(window.addEventListener){
        window.attachEvent('onload', initEvent);
    }
</script>

</body>
</html>
