<!DOCTYPE html>
<html>
<head>
    <title>Sweeterland - Korpa</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" href="images/kapkejk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>  
  <div class="omotac">
        <?php include('header.php'); ?>
        
        <section class="proizvodi" id="korpa">
            <?php 
                session_start();

                include ('db.php');

                $connection = connect();

                mysqli_set_charset($connection, "utf8");
                
                $idKorisnika = $_SESSION['id'];

                $rezultat = mysqli_query($connection, "SELECT korpa FROM korisnici WHERE id = $idKorisnika");

                 while($red = mysqli_fetch_assoc($rezultat))
                 {
                          $u_korpi = $red['korpa'];
                 }
                echo 'U vasoj korpi nalazi se: ';
                echo '<br><br>';
                $proizvodi = explode(', ',$u_korpi);
                $ukupno = 0;    
            
                foreach ($proizvodi as $proizvod)
                {
                     $rezultat_cena = mysqli_query($connection, "SELECT cena FROM proizvodi WHERE naziv = '$proizvod'");
                     $cena = mysqli_fetch_assoc($rezultat_cena);
                     $ukupno += $cena['cena'];
                     echo '---- '.$proizvod.' - '.$cena['cena'].' RSD';
                     echo '<br>';
                }
                echo '<br>-------- Ukupna cena: '.$ukupno.' RSD';
            
                disconnect($connection);
            ?>
        </section>
    </div>
    <?php include('footer.html'); ?>

</body>
</html>