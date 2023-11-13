<?php 
session_start();

$_SESSION['login'] == null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Navegador</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap">
</head>

<body>
    <div class="banner">
     <h1>Game Navegador</h1>
     <img class="chuva" src="imgs/chuva.png">
     <img class="chuva2" src="imgs/chuva.png">
    </div>

    <div class="BodyConteiner"> 
            <div class="Left-Menu">
                <div class="dragon-pedestal">
                <img class="dragon" src="imgs/dragon.gif">
                <img class="pedestal" src="imgs/pedestal.png">
            </div>
            <div class="BtnsLeft">
                <div class="BtnLeft">
                    <a class="BtnLeft" onclick="loadPage('news.php')">News</a>
                </div>
            <div class="BtnLeft">
                <a class="BtnLeft" onclick="loadPage('loginpage.php')">Login</a>
            </div>
            <div class="BtnLeft">
                <a class="BtnLeft" onclick="loadPage('Highscores.php')">Highscores</a>
            </div>
        </div>
        </div>

        <div class="Center-Menu" id="centerMenu">
        </div>

        <div class="Right-Menu">
        <a class="createAccountBanner" onclick="loadPage('createaccount.php')">Create<br>Account</a>
       </div>  
    </div>

</body>
<script src="JS/script.js"></script>
<script src="JS/cadastro.js"></script>
<script>
    //colocar news.html como pagina incial
    document.addEventListener('DOMContentLoaded', function() {
        loadPage('news.php');
    });
    var login
    if (login == true) {
    document.addEventListener('DOMContentLoaded', function() {
        loadPage('dashboard.php');
    })}
    else{
        document.addEventListener('DOMContentLoaded', function() {
        loadPage('news.php');
    })
    }


</script>
</html>

