<?php

    if (isset($_GET['ProdId'])) {
        $user = 'root';
        $pass = '';
        $db = 'vuurwerkdatabase';
        $db = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect to database");
                        
        if ($db->connect_error) {
            die("Connection failed: " . $db->connect_error);
        } 
        $Cart = json_decode($_COOKIE['Cart'], true);
        echo var_dump($Cart);
        $result = mysqli_query($db, 'SELECT * FROM vuurwerk');
        if ($result->num_rows> 0)
            while($row = mysqli_fetch_assoc($result)) {
                if ($_GET['ProdId'] == $row['productid']) {
                    if(isset($_COOKIE['Cart'])) {
                        //als de cart al bestaat
                        foreach($Cart as $CartItem) {
                            if ($CartItem['productid'] == $row['productid']) {
                                //add to amount
                                if(isset($_GET['cat'])) {
                                    header('location:hoofdpaginavuurwerkshop.php?cat=' . $_GET['cat']);
                                    die;
                                }
                                elseif(isset($_GET['cat'])) {
                                    header('location:hoofdpaginavuurwerkshop.php?cat=' . $_GET['cat']);
                                    die;    
                                } else {
                                    //header('location:hoofdpaginavuurwerkshop.php');
                                    die;
                                }
                            }
                        }

                        //Item zit nog niet in de Cart
                        array_push($Cart, $row);
                        setcookie('Cart', json_encode($Cart));
                        header('location:hoofdpaginavuurwerkshop.php');
                        die;
                    } else {
                        setcookie('Cart', json_encode(array($row)));
                        if(isset($_GET['cat'])) {
                            header('location:hoofdpaginavuurwerkshop.php?cat=' . $_GET['cat']);
                            die;
                        }
                        header('location:hoofdpaginavuurwerkshop.php');
                        die;
                    }
                }
            }

    } else die;

?>