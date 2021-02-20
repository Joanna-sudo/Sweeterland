<?php
    if(isset($_POST['korpa'])){
        include('unesi_u_korpu.php'); 
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sweeterland - Pica</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" href="images/kapkejk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
    <div class="omotac">
        <?php include('header.php'); ?>
        
        <section class="proizvodi">
            <h1>Pića</h1>
        
            <form method="POST" action="">
                <article>
                    <div class="slike">
                        <img src="images/pexels-photo-260476.jpeg">
                    </div>

                    <p class="opis">
                        Naziv proizvoda: Zimske čari
                        <br>
                        <br>
                        Cena: 250RSD
                        <br>
                        <br>
                        <button type="submit" name="korpa" value="5" id="Zimske čari">DODAJ U KORPU</button>
                    </p>
                </article>

                <hr>

                <article>
                    <div class="slike">
                        <img src="images/superthumb.png">
                    </div>
                    <p class="opis">
                        Naziv proizvoda: Čoko fantazija
                        <br>
                        <br>
                        Cena: 300RSD
                        <br>
                        <br>
                        <button type="submit" name="korpa" value="6" id="Čoko fantazija">DODAJ U KORPU</button>
                    </p>
                </article>

                <hr>

                <article>
                    <div class="slike">
                        <img id="topla_uteha" src="images/pexels-photo-260535.jpeg">
                    </div>

                    <p class="opis">
                        Naziv proizvoda: Topla uteha
                        <br>
                        <br>
                        Cena: 275RSD
                        <br>
                        <br>
                        <button type="submit" name="korpa" value="7" id="Topla uteha">DODAJ U KORPU</button>
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