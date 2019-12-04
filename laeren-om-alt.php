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
    <div id="app">
    <header>
        <article class="headerGrid">
            <article class="navCell1"><a href="home.php"><img src="pictures/Logo.png" alt="Adaptics Logo" class="logo"></a></article>
            <article class="navCell2"><a href="home.php"><p class="whiteText">Forside</p></a></article>
            <article class="navCell3"><a href="milestones.php"><p class="whiteText">Milepæle</p></a></article>
            <article class="navCell4"><input type="text" class="search" placeholder="Søg"></article>
            <article class="navCell5"><img src="pictures/Search2.png" alt="search2" class="searchSize"></article>
            <article class="navCell6"><a href="logout.php"><p class="whiteText">Log ud</p></a></article>
    </header>

    <ul class="breadcrumb">
            <li><a href="home.php" >Forside</a></li>
            <li><a href="kristendom.php" >Kristendomskundskab</a></li>
            <li><a href="hvad-er-religion.php"> Hvad er religion?</a></li>
            <li>Læren om alt</li>
        </ul>

    <h1 class="overskrift">Læren om alt</h1>

    <div id="app">

    <article class="avatarTextBox">
    <p class="avatarText"></p>
    </article>
    <img src="pictures/avatarplaceholder.png" alt="Din avatar" class="avatar" >

    </div>

    <section class="textWorkSpace marginTop">
        <article class="textCell1">
           <iframe width="560" height="315" src="https://www.youtube.com/embed/6BQ_K-me8qM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="introVideo"></iframe>
        </article>
        <article class="textCell2"><h2>Opgave 1</h2><br><p class="formText">Gå sammen med din sidemakker og tal i 5 minutter
            om hvad I tror, at mennesker får ud af at være religiøse</p><br><p class="textFont">Hjælpe spørgsmål</p></article>
        <article class="textCell3"><h2>Læren om alt - Har vi brug for religion</h2><br><p class="formText">Hvor er det, at vi i den sekulariserede verden kan lære noget af religionerne? Her er et par eksempler:<br><br>

            Sproget – de religiøse har udviklet et sådant for det mystiske, uforståelige, dybe, eksistentielle svære og umådeligt smukke i vores liv.<br><br>
            
            Organisationen – sekulariseringens modsvar til religionens hellige skrift er kulturens kunstnere, filosoffer og terapeuter. Men de er isolerede. Sårbare. Deprimerede. De kollaborative, brandede, transnationale og disciplinerede religiøse organisationer lærer os, at man må stå sammen, hvis man skal ændre verden.<br><br>
            
           <div id="drag_object" ref="drag_object" class="drag-object" draggable="true" @dragstart="dragstart_handler"> Kunsten – hvor de kristne har bibelen, har vi Platon. </div> Hvor muslimerne har Koranen, har vi Shakespeare. Hvor buddhisterne har mandalaen, har vi graffiti. Vi værner om kunst for kunstens egen skyld. Museer er vores nye kirker. Religionen belærer os om, hvorfor kunsten må være mere end det.<br><br>
            
            Troens kraft
            
            <br>Men vigtigst af alt kan religionen lære os at tro. De fleste kristne, muslimer, hinduer, buddhister og jøder tror ikke, fordi de ikke forstår de grundlæggende naturlove. De tror på trods af denne virkelighedssans. Når du tror på opsvinget midt i finanskrisen, giver det håb. Når du traumatiseres af krigens rædsler, men vælger stadig at tro på det gode i mennesket, skaber det tillid. Når vi skaber teknologier, koalitioner og stor kunst, får fantasien frit løb. 
            Det er vigtigt at kunne tro på noget, der er større end os selv, når livet synes småt, kort og meningsløst. Men hvordan gør vi det? <br><br>
            
            Vi vil gerne tro, men kan ikke altid. Tro kan kun forstås, når den føles og opleves. Religionen kan lære os, hvorfor og hvordan håb, tillid, kontekst og indlevelse er forudsætningen for at tro – også selv om vi ikke tror på dens gud.<br><br>
            
            I dag må vi vælge. Enten er vi ateister, eller også er vi troende. I Danmark synes det som et gensidigt udelukkende valg. Men det behøver det ikke at være. Vi har lige haft besøg af nogle gode venner fra New York. Intellektuelle, aktivistiske ateister. Alligevel sender de hver søndag deres børn i søndagsskole. Hvorfor? Fordi de mener, at deres børn har brug for også at blive udsat for et moralsk kodeks, der ikke enten er småligt familiært indoktrinerende eller kapitalismens frie ’du kan få det hele og lige nu, hvis du vil’-løfter. Et kompleks, der har større sigte og mere kulturhistorisk dybde. De bruger på den måde kirken uden at tro på gud. Det gør vi i Danmark selvfølgelig også til konfirmation og begravelse, men ikke som egentlig bred dannelsesinstitution.<br><br>
            
            Der mangler altså en tredje mulighed. En åbning i vores verden, som vi tørster efter. En ateisme 2.0, hvor det ikke handler om gud eller ikke-gud, men om tro og inspiration i en bredere forstand. Et standpunkt, hvor vi (i modsætning til agnostikeren) lader vores skepsis være udgangspunkt for nysgerrighed og ydmyghed – en søgende tilværelse, hvor der er også er plads til åndelighed, spiritualitet, meditation, kald det, hvad du vil. Det, vi har brug for, er en væren i verden, der tillader en fjerde dimension, som overskrider sekulariseringens almindelige fantasiløshed uden religionens snærende doktriner.
            </p></article>
        <article class="textCell4"><h2>Drag and drop</h2><br><p>Træk de sætninger, som du synes besvarer spørgsmålene, ned i det nedenstående bokse.
            I skal derefter snakke om svarerne i klassen.</p>
            
            <form method="GET" class="formClass">
                    <p class="formText">Hvad kan vi blandt andet lærer gennem religion?</p>
                   <div id="drag_target" ref="drag_target" class="drag-target" @drop="drop_handler" @dragover="dragover_handler"></div>
                    <p class="formText">Hvorfor mener teksten blandt andet, at mennesker vælger at være troende?</p>
                    <div id="drag_target2" ref="drag_target2" class="drag-target" @drop="drop_handler" @dragover="dragover_handler"></div>
            </form>
            <a href="answers.php"> <input type="submit"></a>
            
            <p class="textFont">Sidder du fast? Klik her for at få hjælp</p>
        </article>

        <article class="textCell5">
            <img src="pictures/Religion.jpg" alt="Verdens religioner" class="imgSizeLarge">
        </article>

        <article class="textCell6"></article>
        
    </section>
    <footer class="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C  </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</div>

<script>
        var app = new Vue({
            el: "#app",
            data: {

            },
            methods: {
                dragstart_handler(ev) {
                    // Add the target element's id to the data transfer object
                  //  ev.dataTransfer.setData("elemid", ev.target.id);
                  ev.dataTransfer.setData("text", ev.target.innerText);
                    ev.dataTransfer.dropEffect = "move";
                },
                dragover_handler(ev) {
                    ev.preventDefault();
                },
                drop_handler(ev) {
                    ev.preventDefault();
                    // Get the id of the target and add the moved element to the target's DOM
                    var data = ev.dataTransfer.getData("text");
                    ev.target.innerText = data;
                    localStorage.setItem("droppedRef", data)
                }
            },
            mounted() {
                if (localStorage.getItem("droppedRef")) {
                    this.$refs["drag_target"].innerText = localStorage.getItem("droppedRef")
                }
            }
        })
    </script>






</body>
</html>