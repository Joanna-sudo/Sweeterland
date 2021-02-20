<?php
        if(isset($_POST['submit'])){
            include ('db.php');

            $connection = connect();

            $username = trim($_POST['username']);
            $password = trim($_POST['password']);
            
            $rezultat = mysqli_query($connection, "SELECT id FROM korisnici WHERE username = '$username' AND password = '$password'");
            
            if(mysqli_num_rows($rezultat) == 0){
                echo "<script> alert('Profil sa unetim imenom i sifrom ne postoji. Pokusajte ponovo ili napravite novi profil.');</script>";
            } else{

            $red = mysqli_fetch_assoc($rezultat);
            $idKorisnika = $red['id'];
                
            session_start();

            $_SESSION['id'] = $idKorisnika;
                
            disconnect($connection);
            
            header("Location: pocetna.php");
        }}
 ?> 

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Sweeterland - prijava</title>
    <meta name="keywords" content="">
    <link rel="icon" href="images/kapkejk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <style>
        body {
            background-image: url(images/images.jpeg);
        }

        #login {
            border: 3px solid gray;
            box-sizing: border-box;
            width: 30%;
            padding: 50px;
            margin: auto;
            margin-top: 20vh;
            background-color: ghostwhite;
        }

        label {
            display: inline-block;
            width: 110px;
        }

        input[type='text'] {
			margin-bottom: 10px;
            display: inline-block;
		}

        input[type='submit'] {
			margin: auto;
			display: block;
			margin-top: 20px;
        }

        input[type='button'] {
            position: relative;
            bottom: -10px;
        }

        @media (max-width: 780px) {
            input[type='text'], input[type='password'] {
              width: 90%;
            }
            
            #login {
                    width: 50%;
             }
        }
        
        @media (max-width: 413px) {
            #login {
                    width: 80%;
                }
        }
        
    </style>
</head>

<body>
    <section id="login">
        <form action="" method="POST" onsubmit="return provera_podataka()">
                <label for="username">username</label>
                <input type="text" autocomplete="off" placeholder="username" name="username" id="username"/>
                <br>
                <br>
                <label for="lozinka">password</label>
                <input type="password" autocomplete="off" placeholder="lozinka" name="password" id="password"/>
                <br>
                <br>
                <input type="submit" name="submit" value="log in"/>
                <br>
                <a href="novi_profil.php"><input type="button" value="napravi nalog"/></a>
        </form>
    </section>
    
    <script>
        function provera_podataka() {
            var user = document.getElementById('username').value.trim();
            var password = document.getElementById('password').value.trim();
            
            if (user.length == 0 )
            {
                alert('Nije uneto korisnicko ime!');
                return false;
            }
            
            if (password.length == 0 )
            {
                alert('Nije uneta lozinka!');
                return false;
            }
            return true;
        }
    </script>
</body>
</html>