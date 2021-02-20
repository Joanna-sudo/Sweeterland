<?php
        if(isset($_POST['submit'])){
            session_start();

            $username = $_POST['username'];
            $password = $_POST['password'];
            
            include('db.php');
            
            $connection = connect();
            
            $rezultat = mysqli_query($connection, "SELECT id FROM korisnici");
            
            $poslednji_id = mysqli_num_rows($rezultat);
            
            $id = $poslednji_id + 1;

            mysqli_query($connection, "INSERT INTO korisnici VALUES ($id, '$username', '$password', '')");
            
/*            da je postavljeno svojstvo auto-increment koristili bismo
            mysqli_query($connection, "INSERT INTO korisnici (username, password, korpa) VALUES ('$username', '$password', '')");*/
            
            $_SESSION['id'] = $id;
            
            disconnect($connection);
            
            setcookie('ime', $username, time() + 2* 60);
            setcookie('boja', $_POST['boja'], time() + 3*60);
            setcookie('grad', $_POST['grad'], time() + 2* 60);
            setcookie('check', $_POST['check'], time() + 2* 60);
            setcookie('pol', $_POST['pol'], time() + 3*60);
            setcookie('broj', $_POST['broj'], time() + 3*60);
            
            header("Location: jelkica.php");
        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sweeterland - Novi profil</title>
    <link rel="icon" href="images/kapkejk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        body {
           background-image: url(images/images.jpeg);
           font-weight: bold;
        }

        form {
            background-color: ghostwhite;
            border: 2px solid gray;
            padding: 10px;
        }
        
        #wrapper {
            border: 3px solid gray;
            box-sizing: border-box;
            width: 50%;
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

        @media (max-width: 1050px) {
            input[type='text'], input[type='password'], #ta{
                min-width: 0px;
                max-width:150px;
            }
            
            #wrapper {
                width: 60%;
             }
        }
        
        @media (max-width: 1250px) { 
            #ta{
                width: 50%;}
        }
        
        @media (max-width: 500px) {
            #wrapper {
                    width: 80%;
                }
            form {
                border: none;
            }
        }
    </style>
    
</head>

<body>
    <section id="wrapper"> 
        <form method="POST" action="" onsubmit="return provera()">
            <label for="username">Korisničko ime: </label>
			<input autocomplete="off" type="text" name="username" id="username">
			<br>
            
			<label for="password">Lozinka: </label>
			<input type="password" name="password" id="password">
            <br>
            <br>
            <label for="boja">Odaberite neku boju: </label>
			<input type="color" name="boja" id="boja">
            <br>
            <br>
            <label for="grad">Mesto boravka:</label>
            <select name="grad" id="grad">
                <option value="BG">Beograd</option>
                <option value="Sub">Subotica</option>
                <option value="Kr">Kragujevac</option>
		    </select>
            <br>
            <br>
            <label for="broj">Unesite broj izmedju 3 i 15: </label>
            <input type="number" name="broj" id="broj" min="3" max="15">
            <br>
            <br>
            <label for="check">&nbsp&nbsp&nbsp Nesto</label>
			<input type="checkbox" name="check" id="check" value="nesto">
            <label for="check">Nesto drugo</label>
            <input type="checkbox" name="check" id="chec" value="nesto drugo">
            <br>
            <br>
            <label for="pol">Odaberite pol: </label>
            <br>
            <label for="muski">&nbsp&nbsp&nbsp muski</label>
            <input type="radio" name="pol" id="muski" value="muski">
            <label for="zenski">&nbsp&nbsp&nbsp zenski</label>
            <input type="radio" name="pol" id="zenski" value="zenski">
            <br>
            <br>
            <label for="ta">Napisite nesto o sebi: </label>
            <textarea name="komentar" id="ta" cols="30" rows="10"></textarea>
            <br>
            <br>
			<input type="reset" value="obrisi sve">
            <br>
            <br>
			<input type="submit" name="submit" value="Napravi nalog">
        </form>    
    </section>
    
    <script>
        function provera(){
            var username = document.getElementById('username').value.trim();
            var password = document.getElementById('password').value.trim();
            
            if (username.length == 0){
                alert('Niste uneli korisnicko ime!');
                return false;
            }
            
            if (password.length == 0){
                alert('Niste uneli zeljenu lozinku!');
                return false;
            }
            
            return true;
        }
    </script>
</body>
</html>
    