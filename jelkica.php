<?php
    if(isset($_GET['nastavi'])){
        header("Location: pocetna.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Sweeterland - Dobrodosli</title>
    <link rel="icon" href="images/kapkejk.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <style>
        button, #nastavi {
            height: 50px;
            width: 100px;
        }
        
        h1, form{
            visibility: hidden;
            display: inline-block;
        }
    </style>
    
</head>

<body>
    <section>
        <?php
            echo '(Odabrali ste: '.$_COOKIE['grad'].', '.$_COOKIE['check'].', '.$_COOKIE['pol'].')';
            echo '<br>Zdravo '.$_COOKIE['ime'].' klikni na dugme :D';
            echo '<br> 
                  <br>
                  <button onclick="pisi(\''.$_COOKIE['boja'].'\',\''.$_COOKIE['broj'].'\')">klik</button>
                  <br>
                  <br>';
        ?>

        <div> 
            <pre id="jelka"></pre>
            <br><br><br> 
            <h1>Dobrodosliii! :D &nbsp&nbsp&nbsp&nbsp&nbsp</h1> 
            <form method="get" action="">
                <input type="submit" name="nastavi" id = "nastavi" value="Nastavi" onclick="pisi()">
            </form>
        </div>
    </section>
    
    <script>
        function pisi(boja, broj){
            var body = document.getElementsByTagName('body')[0];
            body.style.backgroundColor = boja.toString();
            body.style.color = 'white';
            
            var pre = document.getElementById('jelka');
            
            var s = '';
            var i, j, k;
            var t = 0;
            
            var n = parseInt(broj);
            
            for (i = 0; i < n; i++){
                for (j = 0; i + j < 2*n-3; j++){
                     s += '&nbsp';
                }
                for (j = 0; j < i+1; j++){
                    s += '* ';
                }
                s += '\n';
                pre.innerHTML = s;
                }

            for (i = 0; i < n; i++){
                for (j = 0; i+j < n-1; j++){
                    s += '&nbsp';
                }
                for (j = 0; j < i+n-1; j++){
                        if (i == n-1){
                            t++;
                        }
                     s += '* ';
                }
                s += '\n';
                pre.innerHTML = s;
            }
            
            if (n%2 == 0){
                for (i = 0; i<n-1; i++){
                    for(j = 0; j < (t*2-n+1)/2-1; j++){
                        s += '&nbsp';
                    }
                    for (j = 0; j < n-1; j++){
                        s += '*';
                    }
                    s += '\n';
                    pre.innerHTML = s;
                }
            }
            else {
                for (i = 0; i < n-2;i++){
                    for(j = 0; j <(t*2-n+2)/2-1; j++){
                        s += '&nbsp';
                    }
                    for (j = 0; j < n-2; j++){
                        s += '*';
                    }
                    s += '\n';
                    pre.innerHTML = s;
                }
            }
                            
            prikazi_por_i_dugme();
        }
        
        function prikazi_por_i_dugme(){
            var h = document.getElementsByTagName('h1')[0];
            h.style.visibility = 'visible';
            
            var forma = document.getElementsByTagName('form')[0];
            forma.style.visibility = 'visible';
        }
        
    </script>
</body>
</html>