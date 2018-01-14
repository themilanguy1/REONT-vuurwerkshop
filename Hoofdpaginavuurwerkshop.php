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
            <a id="home" href="http://localhost/18week2/REONT%20vuurwerkshop/hoofdpaginavuurwerkshop.php">Home</a>
            <a id="portfolioknop" href="https://www.ictacademie.info/milangupta/">Portfolio</a>
            <h2 class="text-center" id="titel">  Vuurwerkshop</h2>
        </div>
    </nav>
    <div class="container containerdoos">
        <div class="row">
            <div class="assortiment col-md-2">
                <h4 class="text-center" id="assortiment-titel">Categorie</h4>
                <hr>
                <ul>
                    <li><a href="http://localhost/18week2/REONT%20vuurwerkshop/hoofdpaginavuurwerkshop.php">Compleet assortiment</a><br></li>
                    <li><a href="http://localhost/18week2/REONT%20vuurwerkshop/hoofdpaginavuurwerkshop.php?cat=knalvuurwerk">Knalvuurwerk</a><br></li>
                    <li><a href="http://localhost/18week2/REONT%20vuurwerkshop/hoofdpaginavuurwerkshop.php?cat=siervuurwerk">Siervuurwerk</a><br></li>
                    <li><a href="http://localhost/18week2/REONT%20vuurwerkshop/hoofdpaginavuurwerkshop.php?cat=Y">Nieuwjaarsactie</a><br></li>
                </ul>
            </div>

            <div class="productenlijst col-md-7 text-center">
                <h4 class="text-center" id="productenlijst-titel">Productenlijst</h4>
                <hr>
                <div class="row">
                <?php
                    $user = 'root';
                    $pass = '';
                    $db = 'vuurwerkdatabase';
                    $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to database");
                                    
                    if ($db->connect_error) {
                        die("Connection failed: " . $db->connect_error);
                    } 
                    
                    //$sql = "SELECT productid, productnaam FROM vuurwerk ORDER BY productnaam";
                    
                    //$result2=mysqli_query($db,$sql);

                    //$row=mysqli_fetch_array($result2,MYSQLI_ASSOC);
                    //echo "$row[productnaam] $row[productid]";

                    $result = mysqli_query($db, 'SELECT * FROM vuurwerk');
                
                    if ($result->num_rows> 0)
                    while($row = mysqli_fetch_assoc($result)) {
                        if(isset($_GET['cat'])) {
                            if ($row['productassortiment'] == $_GET['cat']) {
                                echo "<div class='productdiv col-md-4'>";
                                echo "<div class='productcontainer'>";
                                echo "<div class='productimagediv'>";
                                echo "<img class='productimage' src='$row[productafbeelding]' title=$row[productnaam]>" ;
                                echo "</div>";
                                echo "<p><b>$row[productnaam]</b>   &euro;$row[productprijs]</p>";
                                echo "<div class='overflowpindakaas'>";
                                echo "<p>$row[productbeschrijving]</p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                                }
                                if ($row['productactie'] == $_GET['cat']) {
                                    echo "<div class='productdiv col-md-4'>";
                                    echo "<div class='productcontainer'>";
                                    echo "<div class='productimagediv'>";
                                    echo "<img class='productimage' src='$row[productafbeelding]' title=$row[productnaam]>" ;
                                    echo "<img class='actie' src='http://www.autobedrijf-jenf.nl/site/wp-content/uploads/2016/03/actie2.png'>";
                                    echo "</div>";
                                    echo "<p><b>$row[productnaam]</b>   &euro;$row[productprijs]</p>";
                                    echo "<div class='overflowpindakaas'>";
                                    echo "<p>$row[productbeschrijving]</p>";
                                    echo "</div>";
                                    echo "</div>";
                                    echo "</div>";
                                }
                            } else {
                                echo "<div class='productdiv col-md-4'>";
                                echo "<div class='productcontainer'>";
                                echo "<div class='productimagediv'>";
                                echo "<img class='productimage' src='$row[productafbeelding]' title=$row[productnaam]>" ;
                                echo "</div>";
                                echo "<p><b>$row[productnaam]</b>   &euro;$row[productprijs]</p>";
                                echo "<div class='overflowpindakaas'>";
                                echo "<p>$row[productbeschrijving]</p>";
                                echo "</div>";
                                echo "</div>";
                                echo "</div>";
                        }
                    } else 
                        echo "Geen producten gevonden";
                ?>
                </div>
            </div>

            <div class="winkelwagen col-md-2 ">
                <h4 class="text-center" id="winkelwagen-titel">Winkelwagen</h4>
                <hr>
                winkelwagen content
            </div>

        </div>
    <hr>
    </div>
    <div class="footer"> 
        <p id="adres"><strong>Adres: </strong>Stolwijkstraat 8</p>
        <p><strong>Email: </strong>vuurwerkshop3@gmail.com</p>
        <a id="routebeschrijving" href="http://localhost/18week2/REONT%20vuurwerkshop/contactpaginavuurwerkshop.php"><img id="googlemapsimg" src="https://www.ictacademie.info/milangupta/images/google-maps.png" title="Google maps"></a>
        <p><strong>Telefoon: </strong>010-4675538</p>
    </div>
</body>
</html>

