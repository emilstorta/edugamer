<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Side</title>
    <link rel="stylesheet" href="SASS/style.css">
    <link rel="icon" href="pictures/FavIcon.png" type="image/gif" sizes="16x16">
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>

<body>
    <article id="pageContainer">
        <article id="contentWrap">
            <header class="headerIndex">
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

                        </form>

                        <?php 
                        if (isset($_GET['l'])) {
                            if (($_GET['l']) == 'f') {
                                echo "<p>Forkert brugernavn eller password</p>";
                            }


                        }
                        
                        ?>

                        <div id="app" class="loginInfo">
                            <button  v-on:click="call('Brugernavn: Admin \nPassword Admin123')">Få kode og password</button>
                        
                        </div>


                    <script>
                    var app = new Vue({
                    el: '#app',
                    methods: {
                        call: function (message) {
                            alert(message)
                        }
                        
                    }
                   })
                </script>
            </article>
        </article>
    </article>
    <footer class="footer" id="footer">
        <p class="footerLeft whiteText">Kontakt </br> Seebladsgade 2 </br> 5100 Odense C </br> Tlf. 54 19 54 12 </p>
        <p class="footerRight whiteText"> &copy; 2019 Adaptics</p>
    </footer>
</body>

</html>