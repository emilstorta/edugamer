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
    <title>Avatarside</title>
    <link rel="stylesheet" href="SASS/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="icon" href="pictures/FavIcon.png" type="image/gif" sizes="16x16">
</head>

<body>
<!-- Navigation -->
    <header class="headerPages">
        <article class="headerGrid">
            <article class="navCell1">
                <a href="home.php">
                    <img src="pictures/Logo.png" alt="Adaptics Logo" class="logo">
                </a>
            </article>
            <article class="navCell2">
                <a href="home.php">
                    <p class="whiteText">Forside</p>
                </a>
            </article>
            <article class="navCell3">
                <a href="milestones.php">
                    <p class="whiteText">Style din Avatar</p>
                </a>
            </article>
            <article class="navCell4">
                <input type="text" class="search" placeholder="Søg">
            </article>
            <article class="navCell5">
                <img src="pictures/Search2.png" alt="search2" class="searchSize">
            </article>
            <article class="navCell6">
                <a href="logout.php">
                    <p class="whiteText">Log ud</p>
                </a>
            </article>
    </header>
<!-- Navigation Mobil -->
    <article class="mobile-menu">
        <a href="home.php">
            <img class="mobileLogo" src="pictures/Logo.png" alt="Adaptics logo">
        </a>
        <input class="menu-btn" type="checkbox" id="menu-btn">
        <label class="menu-icon" for="menu-btn">
            <span class="nav-icon"></span>
        </label>
        <ul class="menu">
            <li><a href="home.php">Forside</a></li>
            <li><a href="milestones.php">Milepæle</a></li>
            <li><a href="logout.php">Log ud</a></li>
        </ul>
    </article>
<!-- BreadCrumbs -->
    <ul class="breadcrumb">
        <li><a href="home.php" >Forside</a></li>
        <li><a href="milestones.php" >Milepæle</a></li>
        <li>Style din Avatar</li>
    </ul>
<!-- Avatar stylings grid -->
    <section class="mileGrid" id="styleGrid">
        <article class="mileCell1">
            <h3>Vælg trøje</h3><br>
                <article class="mileAch" id="styleShirt">
                    <article class="innerAch">
                        <img src="pictures/gultrøje.png" alt="oplåst" class="styleImg">
                    </article>
                    <article class="innerAch">
                        <img src="pictures/blåtrøje.png" alt="oplåst" class="styleImg">
                    </article>
                    <article class="innerAch">
                        <img src="pictures/rødtrøje.png" alt="oplåst" class="styleImg">
                    </article>
                </article>
            </article>
        <article class="mileCell2">
            <h3>Din Avatar</h3><br>
                <article class="innerAvatar">
                    <img src="pictures/avatarplaceholder.png" alt="Avatar" id="avatarMile">
                </article>
        </article>
        <article class="mileCell3">
            <h3>Vælg hår</h3><br>
                <article class="mileAch" id="styleHair">
                    <article class="innerAch"> 
                        <img src="pictures/blåthår.png" alt="låst" class="styleImg">
                    </article>
                    <article class="innerAch"> 
                        <img src="pictures/grønthår.png" alt="låst" class="styleImg">
                    </article>
                    <article class="innerAch"> 
                        <img src="pictures/rødthår.png" alt="låst" class="styleImg">
                    </article>
            </article>
        </article>
        <a class="btnOne achBtn" href="milestones.php">
            <button class="btnOne achBtn" type="submit" onclick="">Gem dit outfit</button>
        </a>
    </section>

<!-- Footer -->
    <footer class="footer">
        <p class="footerLeft whiteText">Kontakt <br> Seebladsgade 2 <br> 5100 Odense C <br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</body>

</html>