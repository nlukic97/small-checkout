<?php
        $final = 0;
    if(isset($_POST['cheeseNumber']) && $_POST['cheeseNumber'] > 0 ){
        $num = (int)$_POST['cheeseNumber'];
        $price = $num * 10;
        echo "Cheese pizza x ".$num.": ".$price." $"."<br>";
        if(isset($_POST['cheeseKetchup'])){
            echo "+ Extra Ketchup: 0.50$"."<br>";
            $price += 0.50;
        }
        if(isset($_POST['cheeseStuffCrust'])){
            echo "+ Stuffed Crust: 1.20$"."<br>";
            $price += 1.2;
        }
        if(isset($_POST['cheeseExtraCheese'])){
            echo "+ Extra Cheese: 1$"."<br>";
            $price += 1;
        }
        echo "<br>"."----TOTAL: ".$price."$"."<br>";
        $final +=$price;

    }

    if(isset($_POST['peperoniNumber']) && $_POST['peperoniNumber'] > 0){
        $num = (int)$_POST['peperoniNumber'];
        $price = $num * 9;
        echo "Peperoni pizza x ".$num.": ".$price." $"."<br>";
        if(isset($_POST['peperoniKetchup'])){
            echo "+ Extra Ketchup: 0.50$"."<br>";
            $price += 0.50;
        }
        if(isset($_POST['peperoniStuffCrust'])){
            echo "+ Stuffed Crust: 1.20$"."<br>";
            $price += 1.2;
        }
        if(isset($_POST['peperoniExtraCheese'])){
            echo "+ Extra Cheese: 1$"."<br>";
            $price += 1;
        }
        echo "<br>"."----TOTAL: ".$price."$"."<br>";
        $final +=$price;
    }

    if(isset($_POST['vegeterianaNumber']) && $_POST['vegeterianaNumber'] > 0){
        $num = (int)$_POST['vegeterianaNumber'];
        $price = $num * 8.5;
        echo "Vegeteriana pizza x ".$num.": ".$price." $"."<br>";
        if(isset($_POST['peperoniKetchup'])){
            echo "+ Extra Ketchup: 0.50$"."<br>";
            $price += 0.50;
        }
        if(isset($_POST['peperoniStuffCrust'])){
            echo "+ Stuffed Crust: 1.20$"."<br>";
            $price += 1.2;
        }
        if(isset($_POST['peperoniExtraCheese'])){
            echo "+ Extra Cheese: 1$"."<br>";
            $price += 1;
        }
        echo "<br>"."----TOTAL: ".$price."$"."<br>";
        $final +=$price;
    }

    echo "<br>"."<br>"."TOTAL: ".$final."$";
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>
