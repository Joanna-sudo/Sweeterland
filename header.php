<!DOCTYPE html>
<html>
<head>
</head>
<body>
         <header>
                <p id="naziv">Sweeterland</p>
            <nav>
                <button id="ikonica"><i class="fa fa-bars"></i></button>
                
                <form method="POST" action="logout.php">
                    <ul id="navbar">
                        <li><a href="pocetna.php">Početna</a></li>
                        <li><a class="po" href="#">Ponuda</a>
                            <ul class="ponuda" id="po">
                                <li><a href="pica.php">Pića</a></li>
                                <li><a href="kolaci.php">Kolači</a></li>
                                <li><a href="kapkejk.php">Kapkejk</a></li>
                            </ul>
                        </li>
                        <li><a href="korpa.php">Moja korpa</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                        <li><input type="submit" name="logout" value="Izloguj me" class="logout"></li>
                    </ul>

                    <ul id="responsive_nav">
                        <li><a href="pocetna.php">Početna</a></li>
                        <li><a class="po" href="#">Ponuda</a>
                            <ul class="ponuda">
                                <li><a href="pica.php">Pića</a></li>
                                <li><a href="kolaci.php">Kolači</a></li>
                                <li><a href="kapkejk.php">Kapkejk</a></li>
                            </ul>
                        </li>
                        <li><a href="korpa.php">Moja korpa</a></li>
                        <li><a href="kontakt.php">Kontakt</a></li>
                        <li><input type="submit" name="logout" value="Izloguj me" class="logout"></li>
                    </ul>
                </form>
            </nav>
             
        </header>    
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/menu.js"></script>
    <script src="js/ponuda.js"></script>
</body>
</html>