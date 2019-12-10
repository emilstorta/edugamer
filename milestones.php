<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Milepæle</title>
    <link rel="stylesheet" href="SASS/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="icon" href="pictures/FavIcon.png" type="image/gif" sizes="16x16">
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
                    <p class="whiteText">Milepæle</p>
                </a></article>
            <article class="navCell4"><input type="text" class="search" placeholder="Søg"></article>
            <article class="navCell5"><img src="pictures/Search2.png" alt="search2" class="searchSize"></article>
            <article class="navCell6"><a href="logout.php"><p class="whiteText">Log ud</p></a></article>
    </header>

    <article class="mobile-menu">
        <a href="home.php"><img class="mobileLogo" src="pictures/Logo.png" alt="Adaptics logo"></a>
        <input class="menu-btn" type="checkbox" id="menu-btn">
        <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
        <ul class="menu">
            <li><a href="home.php">Forside</a></li>
            <li><a href="milestones.php">Milepæle</a></li>
            <li><a href="logout.php">Log ud</a></li>
        </ul>
    </article>

        <ul class="breadcrumb">
            <li><a href="home.php" >Forside</a></li>
            <li>Milepæle</li>
        </ul>

    <h1 class="overskrift">Milepæle</h1>
    <p class="underoverskrift">Her kan du se dine oplåste præstationer, de præstationer du er tæt på at låse op for,
        samt din avatar.
        </br> Du kan trykke på "Style din Avatar" for at give ham/hende et nyt look. Du låser op for nyt tøj ved at
        bruge hjemmesiden</p>

    <section class="mileGrid">
        <article class="mileCell1">
            <h3>Nyligt optjent</h3><br>
            <article class="mileAch">
                <article class="innerAch" ><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="achText">Religions emne gennemført</p>
                </article>
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="achText">Religions emne gennemført</p>
                </article>
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="achText">Religions emne gennemført</p>
                </article>
                <article class="innerAch" id="innerAch4"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="achText">Religions emne gennemført</p>
                </article>
                <article class="innerAch" id="innerAch5"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="achText">Religions emne gennemført</p>
                </article>
            </article>
        </article>
        <article class="mileCell2">
            <h3>Din Avatar</h3><br>
            <article class="innerAvatar">
                <img src="pictures/avatarplaceholder.png" alt="Avatar">
            </article>
        </article>
        <article class="mileCell3">
            <h3>Du er der næsten!</h3><br>
            <article class="mileAch">
                <article class="innerAch"> <img src="pictures/locked.png" alt="låst" class="achImg">
                    <br>
                    <p class="achText">Historie emne gennemført</p>
                </article>
                <article class="innerAch"> <img src="pictures/locked.png" alt="låst" class="achImg">
                    <br>
                    <p class="achText">Historie emne gennemført</p>
                </article>
                <article class="innerAch"> <img src="pictures/locked.png" alt="låst" class="achImg">
                    <br>
                    <p class="achText">Historie emne gennemført</p>
                </article>
                <article class="innerAch" id="innerAch9"> <img src="pictures/locked.png" alt="låst" class="achImg">
                    <br>
                    <p class="achText">Historie emne gennemført</p>
                </article>
                <article class="innerAch" id="innerAch10"> <img src="pictures/locked.png" alt="låst" class="achImg">
                    <br>
                    <p class="achText">Historie emne gennemført</p>
                </article>
            </article>
        </article>
        <a class="btnOne achBtn" href="allmilestones.php">
            <button class="btnOne achBtn">Se alle dine Achievements</button>
        </a>
        <a class="btnOne achBtn" href="avatarStyle.php" id="styleBtn">
            <button class="btnOne achBtn" type="submit" onclick="">Style din Avatar</button>
        </a>

    </section>


    <footer class="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</body>

</html>