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
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
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
        <li>Achievements</li>
    </ul>

    <section class="allmileGrid">
        <article class="mileCell1">
            <h3>Alle milepæle</h3><br>
            <article class="allmileAch">
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="allachText">Gennemført &#10003; <br> Alle opgaver i Matematik løst</p>
                </article>
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="allachText">Gennemført &#10003; <br>  Alle opgaver tekster i Engelsk læst</p>
                </article>
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="allachText">Gennemført &#10003; <br> </p>
                </article>
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="allachText">Gennemført &#10003; <br> </p>
                </article>
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="allachText">Gennemført &#10003; <br> </p>
                </article>
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="allachText">Gennemført &#10003; <br> </p>
                </article>
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="allachText">Gennemført &#10003; <br> </p>
                </article>
                <article class="innerAch"><img src="pictures/locked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="allachText">Låst</p>
                </article>
                <article class="innerAch"><img src="pictures/locked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="allachText">Låst</p>
                </article>
                <article class="innerAch"><img src="pictures/locked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="allachText">Låst</p>
                </article>

            </article>
        </article>
        <article class="mileCell1">
            <h3>Din Avatar</h3><br>
            <article class="allmileAvatar">
                <img src="pictures/avatarplaceholder.png" alt="Avatar" id="avatarAllMile">
            </article>
        </article>
        <a class="btnOne achBtn" href="milestones.php">
            <button class="btnOne achBtn" type="submit" onclick="">Tilbage</button>
        </a>
    </section>


    <footer class="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</body>

</html>