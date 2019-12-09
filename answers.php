<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Klassens svar</title>
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
            <li><a href="kristendom.php" >Kristendomskundskab</a></li>
            <li><a href="hvad-er-religion.php"> Hvad er religion?</a></li>
            <li><a href="laeren-om-alt.php">Læren om alt</a></li>
            <li>Klassens svars</li>
    </ul>

    <h1 class="overskrift">Diskussion</h1>
    <section class="ansGrid">
        <article class="ansCell1">
            <h3>Klassens svar - Hvad kan vi blandt andet lære om religion?</h3><br>
            <article class="ansinnerGrid" id="pull" ref="drag_target">
                <article class="ansInner" >
                
                </article>
            </article>
        </article>
        <article class="ansCell1 margin-top">
            <h3 class="margin-top">Klassens svar - Hvorfor mener teksten blandt andet, at mennesker vælger at være troende</h3><br>
            <article class="ansinnerGrid" id="pull2" ref="drag_target">
                <article class="ansInner">
                </article>
            </article>
        </article>
    </section>


    <footer class="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>


<script>
        var pull = new Vue({
            el: "#pull",
            data: {

            },
            mounted() {
            if (localStorage.getItem("droppedRef")) {
                console.log(localStorage.getItem("droppedRef"))
                this.$refs["drag_target"].innerText = localStorage.getItem("droppedRef");
                }
            }
            
        })
    </script>

    <script>
        var pull2 = new Vue({
            el: "#pull2",
            data: {

            },
            mounted() {
            if (localStorage.getItem("droppedRef2")) {
                console.log(localStorage.getItem("droppedRef2"))
                this.$refs["drag_target"].innerText = localStorage.getItem("droppedRef2");
                }
            }
            
        })
    </script>



</body>

</html>