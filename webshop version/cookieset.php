 <html>
 <body>
 
 <?php

$cookie_name = "user";
$cookie_value = "John Doe";
$qty = 1;
setcookie($cookie_name, $cookie_value, $qty, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}

header('Location: http://localhost/18week2/REONT%20vuurwerkshop/webshop version/hoofdpaginavuurwerkshop.php?cat=knalvuurwerk');
?>

</body>
</html> 