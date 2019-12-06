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
            
        </article>
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
        <li class="breadcrumb-item active" aria-current="page">Forside</li>
    </ul>

    <img src="pictures/avatarplaceholder.png" alt="Din avatar" class="avatar">

    <section class="workSpace marginTop">
        <article class="homeCell">
            <article class="smallhomeCell">
                <article class="innerCell"><img src="pictures/historie trans.png" alt="Historie" class="imgSize">
                </article>
                <article class="innerCell2">
                    <h2>Historie</h2>
                </article>
                <article class="innerCell3">
                    <p>Tryk her for at finde spændende og relevane tekster, samt opsøge ny viden inden for faget
                        historie</p>
                </article>
            </article>
        </article>

        <article class="homeCell2">
            <article class="smallhomeCell">
                <article class="innerCell"><img src="pictures/english.png" alt="Engelsk" class="imgSize"></article>
                <article class="innerCell2">
                    <h2>Engelsk</h2>
                </article>
                <article class="innerCell3">
                    <p>Tryk her for at finde spændende og relevane tekster, samt opsøge ny viden inden for faget engelsk
                    </p>
                </article>
            </article>
        </article>

        <article class="homeCell3">
            <article class="smallhomeCell">
                <article class="innerCell"><img src="pictures/math.png" alt="Matematik" class="imgSize"></article>
                <article class="innerCell2">
                    <h2>Matematik</h2>
                </article>
                <article class="innerCell3">
                    <p>Tryk her for at finde spændende og relevane tekster, samt opsøge ny viden inden for faget
                        matematik</p>
                </article>
            </article>
        </article>

        <a href="kristendom.php">
            <artcile class="homeCell4">
                <article class="smallhomeCell">
                    <article class="innerCell"><img src="pictures/handsthick.png" alt="Kristendomskunstskab"
                            class="imgSize"></article>
                    <article class="innerCell2">
                        <h2>Kristendomskundskab</h2>
                    </article>
                    <article class="innerCell3">
                        <p>Tryk her for at finde spændende og relevane tekster, samt opsøge ny viden inden for faget
                            kristendomskundskab</p>
                    </article>
                </article>
            </artcile>
        </a>

        <article class="homeCell5">
            <article class="smallhomeCell">
                <article class="innerCell"><img src="pictures/tree.png" alt="Naturfag" class="imgSize"></article>
                <article class="innerCell2">
                    <h2>Naturfag</h2>
                </article>
                <article class="innerCell3">
                    <p>Tryk her for at finde spændende og relevane tekster, samt opsøge ny viden inden for faget
                        naturfag</p>
                </article>
            </article>
        </article>

        <article class="homeCell6">
            <article class="smallhomeCell">
                <article class="innerCell"><img src="pictures/samfund.png" alt="Samfundsfag" class="imgSize"></article>
                <article class="innerCell2">
                    <h2>Samfundsfag</h2>
                </article>
                <article class="innerCell3">
                    <p>Tryk her for at finde spændende og relevane tekster, samt opsøge ny viden inden for faget
                        samfundsfag</p>
                </article>
            </article>
        </article>
    </section>






    <footer class="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</body>

</html>