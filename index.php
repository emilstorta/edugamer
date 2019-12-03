<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="SASS/style.css">
</head>

<body>
    <article id="pageContainer">
        <article id="content3rap">
            <header>
                <article class="headerGrid">
                    <article class="navCell1"><a href="index.php"><img src="pictures/Logo.png" alt="Adaptics Logo"
                                class="logo"></a>
                    </article>
                </article>
            </header>
            <article class="wrapper">
                <article class="loginbox">
                    <h1 id="uniMargin">UNI&bull;Login</h1>
                    <article class="loginform">
                        <h3>Brugernavn</h3>
                        <form action="authenicate.php" method="POST">
                            
                            <label for="username"></label>
                            <input type="text" name="username" placeholder="Brugernavn" id="username" required>

                            <label for="password"></label>
                            <input type="password" name="password" placeholder="Kodeord" id="password" required>

                            <input type="submit" value="login">

                        

<!--                        
                        <input type="text" class="loginInput" placeholder="Skriv brugernavn..."></br>
                        <a href="" class="loginlost" id="loginglemt">Glemt brugernavn</a>
                        <h3 id="passwordMargin">Adgangskode</h3>
                        <input type="password" class="loginInput" placeholder="Skriv adgangskode..."></br>
                        <a href="" class="loginlost" id="loginglemt">Glemt adgangskode</a>
                    </article>
                </article>
                <form method="get" action="/pages/main.html">
                    <button class="btnOne" id="btnMargin" type="submit">Log ind</button>
                </form>
            
            -->
            </article>
        </article>
    </article>
    <footer class="footer" id="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</body>

</html>