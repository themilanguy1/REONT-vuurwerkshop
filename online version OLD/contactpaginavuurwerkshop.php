<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vuurwerkshop</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="stylesheetvuurwerkshop.css">

    <link rel="apple-touch-icon" sizes="57x57" href="https://www.ictacademie.info/milangupta/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="https://www.ictacademie.info/milangupta/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="https://www.ictacademie.info/milangupta/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.ictacademie.info/milangupta/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="https://www.ictacademie.info/milangupta/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://www.ictacademie.info/milangupta/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="https://www.ictacademie.info/milangupta/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://www.ictacademie.info/milangupta/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="https://www.ictacademie.info/milangupta/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="https://www.ictacademie.info/milangupta/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="https://www.ictacademie.info/milangupta/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="https://www.ictacademie.info/milangupta/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="https://www.ictacademie.info/milangupta/favicon/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body>
<nav class="navigatie text-center">
            <a id="home" href="https://www.ictacademie.info/milangupta/18week2/hoofdpaginavuurwerkshop.php">Home</a>
            <a id="portfolioknop" href="https://www.ictacademie.info/milangupta/">Portfolio</a>
            <h2 class="text-center" id="titel">  Vuurwerkshop</h2>
    </nav>
    <div class="container containerdoos">
        <div class="row">
            <div class="col-md-10" style="float: none; margin: 0 auto;">    
                <h5 style="float:left; margin: 0.5em auto ;">Afhaallocatie</h5>
                <h5 style="float: right; margin: 0.5em auto ;">Stolwijkstraat 8</h5>
                <div id="map"></div>
                    <script>
                    function initMap() {
                        var Stolwijkstraat = {lat: 51.878533, lng: 4.538676};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 16,
                            center: Stolwijkstraat
                        });
                        var marker = new google.maps.Marker({
                            position: Stolwijkstraat,
                            map: map
                        });
                    }
                    </script>
                </div>
            </div>
            <hr>
        </div>
 
    </div>
    
    <div class="footer"> 
        <p id="adres"><strong>Adres: </strong>Stolwijkstraat 8</p>
        <p><strong>Email: </strong>vuurwerkshop3@gmail.com</p>
        <a id="routebeschrijving" href="https://www.ictacademie.info/milangupta/18week2/contactpaginavuurwerkshop.php"><img id="googlemapsimg" src="https://www.ictacademie.info/milangupta/images/google-maps.png" title="Google maps"></a>
        <p><strong>Telefoon: </strong>010-4675538</p>
    </div>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSststdq7s_oQ0aE2VmgG9qpqOAQpegnU&callback=initMap">
    </script>
</body>
</html>

