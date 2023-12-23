<!DOCTYPE html>
<html lang="fr" class="notranslate" translate="no">
<head>
    <title>Souhaitez joyeux noël à vos amis et proches</title>
    <!-- meta tag start-->
    <meta charset="utf-8">
    <meta name="google" content="notranslate"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <meta name="description" content="Ecrivez un petit message afin de souhaiter joyeux noël à vos amis et proches! Dites-leur que vous pensez à eux!"/>
    <meta name="keywords" content="Noël, voeux, souhaits, proches, amis">
    <meta name="author" content="Arnaud Fifonsi">
    <meta name="MobileOptimized" content="320">
    <!--meta tag end-->
    <!--css link start-->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="/assets/css/fonts.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/assets/css/hover.css">
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/counter.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/media.css">
    <link rel="shortcut icon" type="img/png" href="/assets/images/favicon.png">
    <!--css link end-->
</head>

<body>
<!--preloader start-->
<div id="preloader">
    <div id="status"><img src="/assets/images/pre4.gif" alt="christmas-decoration-loader"></div>
</div>
<!--preloader end-->
@yield('content')

@include('partials.footer')
<!--back to top button-->
<div class="goto_wrapper goto"><a href="index.html#top"> <i class="fa fa-tree"></i></a></div>
<!--back to top button-->
<!--javascript link start-->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
<script src="/assets/js/owl.carousel.min.js"></script>
<script src="/assets/js/wow.js"></script>
<!-- Clipboard.js CDN -->
<script src="https://cdn.jsdelivr.net/npm/clipboard@2.0.8/dist/clipboard.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDNdePPJKYq0ptBV_AFi_4RnmUtMa1ZLFg&amp;libraries=places"></script>
<script src="/assets/js/gmaps.js"></script>
<script type="text/javascript" src="/assets/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/js/countTo.js"></script>
<script src="/assets/js/appear.js"></script>
<script src="/assets/js/smooth-scroll.min.js"></script>
<script src="/assets/js/custom.js"></script>
<script>$(function () {
        $.scrollIt();
    });</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Fonction pour mettre à jour les valeurs
        function updateCounters() {
            // Exemple d'URL, assurez-vous d'ajuster cela selon votre structure de routage
            var apiUrl = window.location.protocol + '//' + window.location.host + '/api/counters';
            // Requête Ajax pour récupérer les données
            $.ajax({
                url: apiUrl,
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    //console.log('Request sent');
                    // Mettre à jour les compteurs avec les données du serveur
                    $('#visitorsCounter').text(data.visitorsCount);
                    $('#messagesCounter').text(data.messagesCount);
                },
                error: function (error) {
                    console.error('Erreur lors de la récupération des données :', error);
                }
            });
        }

        // Appeler la fonction pour la première fois
        updateCounters();
        // Appeler la fonction une seule fois après 5 secondes
        setTimeout(updateCounters, 15000);    });
</script>
<!--javascript link end-->
</body>

</html>
