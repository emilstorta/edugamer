<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Startside</title>
    <link rel="stylesheet" href="SASS/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body>
    <header>
        
        <article class="headerGrid">
            <article class="navCell1"><a href="home.php"><img src="pictures/Logo.png" alt="Adaptics Logo" class="logo"></a></article>
            <article class="navCell2"><a href="home.php"><p class="whiteText">Forside</p></a></article>
            <article class="navCell3"><p class="whiteText">Milepæle</p></article>
            <article class="navCell4"><input type="text" class="search" placeholder="Søg"></article>
            <article class="navCell5"><img src="pictures/Search2.png" alt="search2" class="searchSize"></article>
            <article class="navCell6"><a href="logout.php"><p class="whiteText">Log ud</p></a></article>
        </article>
    </header>

   
    <ul class="breadcrumb">
        <li><a href="home.php" >Forside</a></li>
        <li>Kristendomskundskab</li>
    </ul>
    <img src="pictures/avatarplaceholder.png" alt="Din avatar" class="avatar">
    
    <h1 class="overskrift">Kristendomskundskab</h1>
    <section class="workSpace2">
        
        <article class="emneCell1">
            <img src="pictures/Etik og filosofi Small.jpg" alt="Etik og filosofi" class="imgSizeEmne">
            <article class="opacityContainer">
                <h2 class="centerText">Etik og filosofi</h2>
            </article>
            <article class="progressBar1"></article>         
        </article>

        <article class="emneCell2">
            <img src="pictures/BuddismeSmall.jpg" alt="Buddismen" class="imgSizeEmne">
            <article class="opacityContainer">
                <h2 class="centerText">Buddismen</h2>
            </article>
            <article class="progressBar2"></article>
        </article>

        <article class="emneCell3">
        <a href="hvad-er-religion.php">
            <img src="pictures/Hvad er religion Small.jpg" alt="Hvad er religion" class="imgSizeEmne">
            <article class="opacityContainer">
                <h2 class="centerText">Hvad er religion</h2>
            </article>
            <article class="progressBar3"></article>
        </a>
        </article>

        <article class="emneCell4">
            <img src="pictures/IslamSmall.jpg" alt="Islam" class="imgSizeEmne">
            <article class="opacityContainer">
                <h2 class="centerText">Islam</h2>
                <article class="progressBar4"></article>
            </article>
        </article>

        <article class="emneCell5">
            <img src="pictures/KristendomSmall.jpg" alt="Kristendom" class="imgSizeEmne">
            <article class="opacityContainer">
                <h2 class="centerText">Kristendom</h2>
            </article>
            <article class="progressBar5"></article>
        </article>

        <article class="emneCell6">
            <img src="pictures/Religionens funktionSmall.jpg" alt="Religionens funktion" class="imgSizeEmne">
            <article class="opacityContainer">
                <h2 class="centerText">Religionens funktion</h2>
            </article>
            <article class="progressBar6"></article>
        </article>
    
    </section>
        
<div class="clearfix">&nbsp;</div>




    <footer class="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C  </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</body>
</html>