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
    <title>Milepæle</title>
    <link rel="stylesheet" href="SASS/style.css">
</head>

<body>
    <header>

        <article class="headerGrid">
            <article class="navCell1"><a href="home.php"><img src="pictures/Logo.png" alt="Adaptics Logo"
                        class="logo"></a></article>
            <article class="navCell2"><a href="home.php">
                    <p class="whiteText">Forside</p>
                </a></article>
            <article class="navCell3"><a href="milestones.php">
                    <p class="whiteText">Style din Avatar</p>
                </a></article>
            <article class="navCell4"><input type="text" class="search" placeholder="Søg"></article>
            <article class="navCell5"><img src="pictures/Search2.png" alt="search2" class="searchSize"></article>
            <article class="navCell6"><a href="logout.php"><p class="whiteText">Log ud</p></a></article>
    </header>

    <ul class="breadcrumb">
        <li><a href="home.php" >Forside</a></li>
        <li><a href="milestones.php" >Milepæle</a></li>
        <li>Style din Avatar</li>
    </ul>

    <section class="mileGrid">
        <article class="mileCell1">
            <h3>Vælg trøje</h3><br>
            <article class="mileAch">
                <article class="innerAch"><img src="pictures/gultrøje.png" alt="oplåst" class="styleImg">
                </article>
                <article class="innerAch"><img src="pictures/blåtrøje.png" alt="oplåst" class="styleImg">
                </article>
                <article class="innerAch"><img src="pictures/rødtrøje.png" alt="oplåst" class="styleImg">
                </article>
            </article>
        </article>
        <article class="mileCell2">
            <h3>Din Avatar</h3><br>
            <article class="mileAvatar">
                <img src="pictures/avatarplaceholder.png" alt="Avatar" id="avatarMile">
            </article>
        </article>
        <article class="mileCell3">
            <h3>Vælg hår</h3><br>
            <article class="mileAch">
                <article class="innerAch"> <img src="pictures/blåthår.png" alt="låst" class="styleImg">
                </article>
                <article class="innerAch"> <img src="pictures/grønthår.png" alt="låst" class="styleImg">
                </article>
                <article class="innerAch"> <img src="pictures/rødthår.png" alt="låst" class="styleImg">
                </article>
            </article>
        </article>
        <a class="btnOne achBtn" href="milestones.php">
            <button class="btnOne achBtn" type="submit" onclick="">Gem dit outfit</button>
        </a>
    </section>


    <footer class="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</body>

</html>