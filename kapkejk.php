<?php
    if(isset($_POST['korpa'])){
        include('unesi_u_korpu.php'); 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sweeterland - Kapkejk</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" href="images/kapkejk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
    <div class="omotac">
        <?php include('header.php'); ?>
        
        <section class="proizvodi">
            <h1>Kapkejk</h1>
        
            <form method="post" action="">
                <article>
                    <div class="slike">
                        <img src="images/superthumb-1.png">
                    </div>

                    <p class="opis">
                        Naziv proizvoda: Kapkejk mini 
                        <br>
                        <br>
                        Cena: 150RSD
                        <br>
                        <br>
                        <button type="submit" name="korpa" value="8">DODAJ U KORPU</button>
                    </p>
                </article>

                <hr>

                <article>
                    <div class="slike">
                        <img src="images/pexels-photo-112392.jpeg">
                    </div>

                    <p class="opis">
                        Naziv proizvoda: Kapkejk Sky
                        <br>
                        <br>
                        Cena: 75RSD
                        <br>
                        <br>
                        <button type="submit" name="korpa" value="9">DODAJ U KORPU</button>
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