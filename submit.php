<?php
        $final = 0;
        $order = [];
        $index = 0;
    if(isset($_POST['cheeseNumber']) && $_POST['cheeseNumber'] > 0 ){
        $order[$index] = [
            'order'=>'',
            'extras'=>'',
            'quantity'=>'',
            'price'=>''
        ];
        $order[$index]['order']='Cheese pizza';
        $num = (int)$_POST['cheeseNumber'];
        $price = $num * 10;

        if(isset($_POST['cheeseKetchup'])){
            $price += 0.50 * $num;
            $order[$index]['extras'].= '+Ketchup ';
        }
        if(isset($_POST['cheeseStuffCrust'])){
            $price += 1.2 * $num;
            $order[$index]['extras'].= '+Stuffed Crust ';
        }
        if(isset($_POST['cheeseExtraCheese'])){
            $price += 1 * $num;
            $order[$index]['extras'].= '+Extra Cheese ';
        }
        $order[$index]['quantity']= "x ".$num;
        $final +=$price;
        $order[$index]['price']= "$ ".$final;
        $index++;
    }

    if(isset($_POST['peperoniNumber']) && $_POST['peperoniNumber'] > 0){
        $order[$index] = [
            'order'=>'',
            'extras'=>'',
            'quantity'=>'',
            'price'=>''
        ];
        $order[$index]['order']='Peperoni pizza';
        $num = (int)$_POST['peperoniNumber'];
        $price = $num * 9;
        if(isset($_POST['peperoniKetchup'])){
            $price += 0.50 * $num;
            $order[$index]['extras'].= '+Ketchup ';
        }
        if(isset($_POST['peperoniStuffCrust'])){
            $price += 1.2 * $num;
            $order[$index]['extras'].= '+Stuffed Crust ';
        }
        if(isset($_POST['peperoniExtraCheese'])){
            $price += 1 * $num;
            $order[$index]['extras'].= '+Extra Cheese ';
        }
        $order[$index]['quantity']= "x ".$num;
        $final +=$price * $num;
        $order[$index]['price']= "$ ".$final;
        $index++;
    }

    if(isset($_POST['vegeterianaNumber']) && $_POST['vegeterianaNumber'] > 0){
        $order[$index] = [
            'order'=>'',
            'extras'=>'',
            'quantity'=>'',
            'price'=>''
        ];
        $num = (int)$_POST['vegeterianaNumber'];
        $price = $num * 8.5;
        $order[$index]['order']='Vegeteriana pizza';
        if(isset($_POST['vegeterianaKetchup'])){
            $price += 0.50 * $num;
            $order[$index]['extras'].= '+Ketchup ';
        }
        if(isset($_POST['vegeterianaStuffCrust'])){
            $price += 1.2 * $num;
            $order[$index]['extras'].= '+Stuffed Crust ';
        }
        if(isset($_POST['vegeterianaExtraCheese'])){
            $price += 1 * $num;
            $order[$index]['extras'].= '+Extra Cheese ';
        }
        $order[$index]['quantity']= "x ".$num;
        $final +=$price;
        $order[$index]['price']= "$ ".$price;
    }

?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        tr, th, td {
            border:1px solid #333333;
            /*border-collapse: collapse;*/
            padding:10px;
        }
    </style>
</head>
<body>
<table>
    <tr>
        <th>Ordered</th>
        <th>Extras</th>
        <th>Quantity</th>
        <th>Price</th>
    </tr>
    <?php
        for ($i = 0; $i < count($order); $i++){
          echo "<tr>";
              foreach ($order[$i] as $item){
                  echo '<td>';
                        echo $item;
                  echo '</td>';
              };
          echo "</tr>";
        }
        if($final > 0){
            echo '<tr>';
                echo "<td></td><td></td><td>TOTAL</td><td>$ $final</td>";
            echo '</tr>';
        }
    ?>
</table>

</body>
</html>
