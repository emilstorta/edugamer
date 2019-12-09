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
    <title>Milepæle</title>
    <link rel="stylesheet" href="SASS/style.css">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <link rel="icon" href="pictures/FavIcon.png" type="image/gif" sizes="16x16">
</head>

<body>

            <header>
                <article class="headerGrid">
                    <article class="navCell1"><a href="index.php"><img src="pictures/Logo.png" alt="Adaptics Logo"
                                class="logo"></a>
                    </article>
                </article>
            </header>
    
    <h1 class="notFound">Hov, der er sket et fejl. Vend tilbage til start her!</h1>
    <button></button>


    <footer class="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</body>

</html>