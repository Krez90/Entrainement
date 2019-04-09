$(document).ready(function(){

    $("#submit").click(function(e){
        e.preventDefault();

        $.post(
            'connexion.php', // Un script PHP que l'on va créer juste après
            {
                username : $("#username").val(),  // Nous récupérons la valeur de nos inputs que l'on fait passer à connexion.php
                password : $("#password").val()
            },

            function(data){
                if(data == 'Success'){
                    $("#resultat").html("<p> Vous avez été connecté avec succès ! </P>");
                }
                else{
                    $("#resultat").html("<p> Erreur lors de la connexion...</p>");
                } // Cette fonction ne fait rien encore, nous la mettrons à jour plus tard
            },

            'text' // Nous souhaitons recevoir "Success" ou "Failed", donc on indique text !
         );

    });

});