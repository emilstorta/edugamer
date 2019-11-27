<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
    header('Location: index.html');
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
</head>
<body>
    <header>
        
        <article class="headerGrid">
            <article class="navCell1"><a href="home.php"><img src="pictures/Logo.png" alt="Adaptics Logo" class="logo"></a></article>
            <article class="navCell2"><a href="home.php"><p class="whiteText">Forside</p></a></article>
            <article class="navCell3"><a href="milestones.php"><p class="whiteText">Milepæle</p></a></article>
            <article class="navCell4"><input type="text" class="search" placeholder="Søg"></article>
            <article class="navCell5"><img src="pictures/Search2.png" alt="search2" class="searchSize"></article>
    </header>

    <ul class="breadcrumb">
        <li><a href="home.php" >Forside</a></li>
        <li><a href="kristendom.php" >Kristendomskundskab</a></li>
        <li>Hvad er religion?</li>
    </ul>

    <h1 class="overskrift">Tester om "Hvad er religion"</h1>

    <img src="pictures/avatarplaceholder.png" alt="Din avatar" class="avatar">
    
    <section class="workSpace marginTop">
        <article class="mainCell">

            <a href="laeren-om-alt.php">
                <article class="innerCell"></article>
                <article class="innerCell2 textAlignLeft"><h2>Læren om alt - Har vi brug for religion</h2></article>
                <article class="innerCell3 textAlignLeft halfed"><p>Denne tekst går i dybten med de grunde, der får mennesket til at søge svar i religionen</p></article>
            </a>
            </article>
        </article>

        <article class="mainCell2">
           
                <article class="innerCell2 textAlignLeft"><h2>Verdens religioner</h2></article>
                <article class="innerCell3 textAlignLeft halfed"><p>En dybtegående fortælling om verdensreligionerne</p></article>
            </article>
        </article>  

        <article class="mainCell3">
            
                <article class="innerCell2 textAlignLeft"><h2>Stat og kirke</h2></article>
                <article class="innerCell3 textAlignLeft halfed"><p>Hvad er sammenhængen mellem stat og kirke? Hvor stor del skal kirken have bestemmelse over staten</p></article>
            </article>
        </article>

        <artcile class="mainCell4">
            
                <article class="innerCell2 textAlignLeft"><h2>Religion i fortiden</h2></article>
                <article class="innerCell3 textAlignLeft halfed"><p>Hvad betød religion for mennesket før i tiden? Hvorfor har religion altid været en del af det at være menneske?</p></article>
            </article>
        </artcile>

        <article class="mainCell5">
           
                <article class="innerCell2 textAlignLeft"><h2>Religion i nutiden</h2></article>
                <article class="innerCell3 textAlignLeft halfed"><p>Hvad vil det sige at være religiøs idag? Hvilke forskelle er der fra fortiden og til nu?</p></article>
            </article>
        </article>

        <article class="mainCell6">
           
                <article class="innerCell2 textAlignLeft"><h2>Religioner i verdensbilledet</h2></article>
                <article class="innerCell3 textAlignLeft halfed"><p>Hvilke rolle spiller religion for stater indbyrdes</p></article>
            </article>
        </article>
    </section>

    <footer class="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C  </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</body>
</html>