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
                    <p class="whiteText">Milepæle</p>
                </a></article>
            <article class="navCell4"><input type="text" class="search" placeholder="Søg"></article>
            <article class="navCell5"><img src="pictures/Search2.png" alt="search2" class="searchSize"></article>
    </header>

        <ul class="breadcrumb">
            <li><a href="home.php" >Forside</a></li>
            <li>Milepæle</li>
        </ul>

    <h1 class="overskrift">Milepæle</h1>
    <p class="underoverskrift">Her kan du se dine oplåste præstationer, de præstationer du er tæt på at låse op for,
        samt din avatar.
        </br> Du kan trykke på "style din Avatar" for at give ham/hende et nyt look. Du låser op for nyt tøj ved at
        bruge hjemmesiden</p>

    <section class="mileGrid">
        <article class="mileCell1">
            <h3>Nyligt optjent</h3><br>
            <article class="mileAch">
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
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
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="achText">Religions emne gennemført</p>
                </article>
                <article class="innerAch"><img src="pictures/unlocked.png" alt="oplåst" class="achImg">
                    <br>
                    <p class="achText">Religions emne gennemført</p>
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
                <article class="innerAch"> <img src="pictures/locked.png" alt="låst" class="achImg">
                    <br>
                    <p class="achText">Historie emne gennemført</p>
                </article>
                <article class="innerAch"> <img src="pictures/locked.png" alt="låst" class="achImg">
                    <br>
                    <p class="achText">Historie emne gennemført</p>
                </article>
            </article>
        </article>
        <a class="btnOne achBtn" href="allmilestones.php">
            <button class="btnOne achBtn">Se alle dine Achievements</button>
        </a>
        <a class="btnOne achBtn" href="avatarStyle.php">
            <button class="btnOne achBtn" type="submit" onclick="">Style din Avatar</button>
        </a>

    </section>


    <footer class="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</body>

</html>