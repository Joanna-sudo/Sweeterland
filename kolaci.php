<?php
    if(isset($_POST['korpa'])){
        include('unesi_u_korpu.php'); 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sweeterland - Kolaci</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" href="images/kapkejk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
    <div class="omotac">
        <?php include('header.php'); ?>
                
        <section class="proizvodi">
            <h1>Kolači</h1>
            
            <form method="post" action="">
                <article>
                    <div class="slike">
                        <img src="images/pexels-photo-291528.jpeg">
                    </div>

                    <p class="opis">
                        Naziv proizvoda: Čoko malina 
                        <br>
                        <br>
                        Cena: 250RSD
                        <br>
                        <br>
                        <button type="submit"  name="korpa" value="1">DODAJ U KORPU</button>
                    </p>
                </article>

                <hr>

                <article>
                    <div class="slike">
                        <img src="images/pexels-photo-14107.jpeg">
                    </div>

                    <p class="opis">
                        Naziv proizvoda: Čizkejk
                        <br>
                        <br>
                        Cena: 200RSD
                        <br>
                        <br>
                        <button type="submit" name="korpa" value="2">DODAJ U KORPU</button>
                    </p>
                </article>

                <hr>

                <article>
                    <div class="slike">
                        <img src="images/pexels-photo-132694.jpeg">
                    </div>

                    <p class="opis">
                        Naziv proizvoda: Čoko jagoda
                        <br>
                        <br>
                        Cena: 175RSD
                        <br>
                        <br>
                        <button type="submit" name="korpa" value="3">DODAJ U KORPU</button>
                    </p>
                </article>

                <hr>

                <article>
                    <div class="slike">
                        <img src="images/pexels-photo-373066.jpeg">
                    </div>

                    <p class="opis">
                        Naziv proizvoda: Tiramisu
                        <br>
                        <br>
                        Cena: 75RSD
                        <br>
                        <br>
                        <button type="submit" name="korpa" value="4">DODAJ U KORPU</button>
                    </p>
                </article>
            </form>
            
        </section>
        
    </div>
    <?php include('footer.html'); ?>
<!--
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/ponuda.js"></script>
-->
</body>
</html>