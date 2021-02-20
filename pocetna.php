<?php
    if(isset($_GET['submit'])){
        session_start();
        
        include('db.php');
            
        $connection = connect();
        
        $idKorisnika = $_SESSION['id'];
            
        mysqli_query($connection, "DELETE FROM korisnici WHERE id = $idKorisnika");
        
        $rezultat = mysqli_query($connection, "SELECT * FROM korisnici");
            
         while($red = mysqli_fetch_assoc($rezultat))
         {  $stari_id = $red['id'];

             if($stari_id > $idKorisnika) {
                 $novi_id = $stari_id - 1;
                 
                 $rezultatt = mysqli_query($connection, "SELECT * FROM korisnici WHERE id = $stari_id");
                 $redd = mysqli_fetch_assoc($rezultatt);
                 $user = $redd['username'];
                 
                 mysqli_query($connection, "UPDATE korisnici SET id = $novi_id WHERE username = '$user'");
            }
         }
        
        disconnect($connection);

        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sweeterland - Pocetna</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="icon" href="images/kapkejk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
</head>
<body>
    <div class="omotac">
        <?php include('header.php'); ?>
        
        
        <section id="section_pocetna">
            <p id="uvod">
                Ovo je neki tekst Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvoOvo je neki tekstOvo je neki tekstOvoOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo
                je neki tekstOvo je neki tekstOvo je neki tekstOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekst Ovo je neki tekst Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvoOvo je neki tekstOvo je neki tekstOvoOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekstOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekst Ovo je neki tekst Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvoOvo je neki tekstOvo je neki tekstOvoOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekstOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekst Ovo je neki tekst Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvoOvo je neki tekstOvo je neki tekstOvoOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekstOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekst Ovo je neki tekst Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvoOvo je neki tekstOvo je neki tekstOvoOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekstOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekst Ovo je neki tekst Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvoOvo je neki tekstOvo je neki tekstOvoOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekstOvo Ovo je neki tekst Ovo je neki tekstOvo je neki tekstOvo je neki tekstOvo je neki tekst 
            </p>
            <br>
            <br>
            <label for="nadimak">Unesi svoj nadimak: </label>
            <input type="text" name="nadimak" id="nadimak">
            <button id="ispisi">ajax demo</button>
            <br>
            <br>
            <p id="odg"></p>
            <form method="get" action="">
                <input type="submit" name="submit" style="position:relative; top:50px;" value="Izbrisi moj profil">
            </form>
        </section>
        
        
    </div>
    <?php include('footer.html'); ?>
<!--    <script src="js/jquery-3.2.1.min.js"></script>-->
<!--    <script src="js/menu.js"></script>-->
<!--    <script src="js/ponuda.js"></script>-->
    <script src="js/ajax_deo.js"></script>
    
</body>
</html>