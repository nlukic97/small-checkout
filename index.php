<?php
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        form {
            width:80%;
            margin: 0 auto;
        }
        container {
            margin:50px auto 10px auto;
            display: flex;
            justify-content: space-around;
        }

        img {
            width:250px;
        }

        .pizza {
            text-align: center;
        }

        h2 {
            margin:0;
        }

        p {
            margin:0;
        }

        button {
            margin: 20px auto;
            display: block;
            height:50px;
            width:120px;
        }
    </style>
</head>
<body>
    <form action="submit.php" method="POST">
        <container>
            <div class="pizza">
                <h2>Cheese pizza</h2>
                <img src="https://images.unsplash.com/photo-1574071318508-1cdbab80d002?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                <p>10$</p>
                <input type="number" id="cheeseNumber" name="cheeseNumber">

                <br>
                <label for="cheeseKetchup">Ketchup 0.50$</label>
                <input type="checkbox" id="cheeseKetchup" name="cheeseKetchup">
                <br>
                <label for="cheeseStuffCrust">Stuffed Crust $1.20</label>
                <input type="checkbox" id="cheeseStuffCrust" name="cheeseStuffCrust">
                <br>
                <label for="cheeseExtraCheese">Extra cheese $1</label>
                <input type="checkbox" id="cheeseExtraCheese" name="cheeseExtraCheese">
            </div>
            <div class="pizza">
                <h2>Peperoni</h2>
                <img src="https://images.unsplash.com/photo-1534308983496-4fabb1a015ee?ixlib=rb-1.2.1&auto=format&fit=crop&w=755&q=80" alt="">
                <p>9$</p>
                <input type="number" id="peperoniNumber" name="peperoniNumber">

                <br>
                <label for="peperoniKetchup">Ketchup 0.50$</label>
                <input type="checkbox" id="peperoniKetchup" name="peperoniKetchup">
                <br>
                <label for="peperoniStuffCrust">Stuffed Crust $1.20</label>
                <input type="checkbox" id="peperoniStuffCrust" name="peperoniStuffCrust">
                <br>
                <label for="peperoniExtraCheese">Extra cheese $1</label>
                <input type="checkbox" id="peperoniExtraCheese" name="peperoniExtraCheese">
            </div>
            <div class="pizza">
                <h2>Vegeteriana</h2>
                <img src="https://images.unsplash.com/photo-1528137871618-79d2761e3fd5?ixlib=rb-1.2.1&auto=format&fit=crop&w=750&q=80" alt="">
                <p>8.5$</p>
                <input type="number" id="vegeterianaNumber" name="vegeterianaNumber">

                <br>
                <label for="vegeterianaKetchup">Ketchup 0.50$</label>
                <input type="checkbox" id="vegeterianaKetchup" name="vegeterianaKetchup">
                <br>
                <label for="vegeterianaStuffCrust">Stuffed Crust $1.20</label>
                <input type="checkbox" id="vegeterianaStuffCrust" name="vegeterianaStuffCrust">
                <br>
                <label for="vegeterianaExtraCheese">Extra cheese $1</label>
                <input type="checkbox" id="vegeterianaExtraCheese" name="vegeterianaExtraCheese">
            </div>
        </container>
        <container>
            <div>
            <label for="name">Name</label>
            <input type="text" id="name" name="name">
            </div>
            <div>
                <label for="address">Address</label>
                <input type="text" id="address" name="address">
            </div>
            <div>
                <label for="phone">Phone</label>
                <input type="number" id="phone" name="phone">
            </div>


        </container>
        <button type="submit">Submit</button>
    </form>

</body>
</html>