<?php 
    session_start();

    include ('db.php');

    $connection = connect();

    $idKorisnika = $_SESSION['id'];
    $dodato = $_POST['korpa'];

    mysqli_set_charset($connection, "utf8");

    $rez = mysqli_query($connection, "SELECT * FROM proizvodi WHERE id = $dodato");
    
    $r = mysqli_fetch_assoc($rez);
    $re = $r['naziv'];

    $rezultat = mysqli_query($connection, "SELECT korpa FROM korisnici WHERE id = $idKorisnika");
            
     while($red = mysqli_fetch_assoc($rezultat))
	 {
         $ko = $red['korpa'];
	 }
    if($ko == ''){
        $dodajemo_u_korpu = $ko.$re;
    } else{
        $dodajemo_u_korpu = $ko.', '.$re;
    }

    mysqli_query($connection, "UPDATE korisnici SET korpa = '$dodajemo_u_korpu' WHERE id = $idKorisnika");

    disconnect($connection);
?>