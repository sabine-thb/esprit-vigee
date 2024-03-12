<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billeterie - Esprit Vigée</title>

    <link rel="stylesheet" href="./styles/all.css">
    <link rel="stylesheet" href="./styles/menu.css">
    <link rel="stylesheet" href="./styles/billeterie.css">
    <link rel="stylesheet" href="./styles/footer.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <header class="halo-container">
            <div class="nav1">
                <a href="index.html" class="logoContainer">
                    <img src="./styles/images/logo.png" class="logo" alt="logo de l'exposition">
                </a>
                <div class="mobile-nav-button one">
                    <div class="mobile-nav-button__line"></div>
                    <div class="mobile-nav-button__line"></div>
                    <div class="mobile-nav-button__line"></div>
                </div>
            </div>
            <nav class="mobile-menu">
                <ul>
                    <li><a href="index.html" class="burgerLinks">Accueil</a></li>
                    <li><a href="gallerie.html" class="burgerLinks">Gallerie</a></li>
                    <li><a href="concept.html" class="burgerLinks">Le concept</a></li>
                    <li><a href="billeterie.php" class="burgerLinks">Billeterie</a></li>
                    <li><a href="contact.html" class="burgerLinks">Contact</a></li>
                </ul>
            </nav>

            <div class="nav2">
                <a href="gallerie.html" class="navLink">Gallerie</a>
                <a href="concept.html" class="navLink">Le concept</a>
                <a href="index.html">
                    <img src="./styles/images/logo.png" class="logo" alt="logo de l'exposition">
                </a>
                <a href="billeterie.php" class="navLink">Billeterie</a>
                <a href="contact.html" class="navLink">Contact</a>


            </div>
            <div class="scrollNav">
                <div class="mobile-nav-button two">
                    <div class="mobile-nav-button__line"></div>
                    <div class="mobile-nav-button__line"></div>
                    <div class="mobile-nav-button__line"></div>
                </div>
            </div>

            </div>


            
    </header>
    <section class="billeterie">
        <h1 class="title">Billeterie</h1>
        <div class="degrade"></div>
        <div class="navBilleterie">
            <a href="billeterie.php?action=dateVisite" class="navLinkBilleterie">Date de visite</a>
            <a href="billeterie.php?action=nombreBillets" class="navLinkBilleterie">Nombre de billets</a>
            <a href="billeterie.php?action=coordonnées" class="navLinkBilleterie">Coordonnées</a>
        </div>
        <div class="resa">
            <?php if($_GET['action'] == 'dateVisite'): ?>
                <form action="billeterie.php?action=nombreBillets">
                    <p>
                        <label for="date">Choisissez une date :</label>
                        <input type="date" id="date">
                    </p>
                    <p>
                        <label for="date">Choisissez un horaire :</label><br>
                        <div class="horaires">
                            
                            <input type="radio" id="radio1" name="horaire" value="10:00" required="">
                            <label for="radio1">10:00</label>
                            <input type="radio" id="radio2" name="horaire" value="11:00" required="">
                            <label for="radio2">11:00</label>
                            <input type="radio" id="radio3" name="horaire" value="12:00" required="">
                            <label for="radio3">12:00</label>
                            <input type="radio" id="radio4" name="horaire" value="13:00" required="">
                            <label for="radio4">13:00</label>
                            <input type="radio" id="radio5" name="horaire" value="14:00">
                            <label for="radio5">14:00</label>
                            <input type="radio" id="radio6" name="horaire" value="15:00">
                            <label for="radio6">15:00</label>
                            <input type="radio" id="radio7" name="horaire" value="16:00">
                            <label for="radio7">16:00</label>
                            <input type="radio" id="radio8" name="horaire" value="17:00">
                            <label for="radio8">17:00</label>
                            <input type="radio" id="radio9" name="horaire" value="18:00">
                            <label for="radio9">18:00</label>
                        </div>
                    </p>
                    <p>
                        <input type="submit" value="valider" class="submit">
                    </p>

                </form>
                <div class="recap">
                    <img src="./styles/images/afficheExpo.png" class="affiche" alt="">
                    <div class= recapTxt>
                        <p class="titleBillet">Exposition Esprit Vigée</p>
                        <p>Mode d'obtention : e-ticket, gratuit</p>
                    </div>
                </div>
                
                
                

            <?php endif; ?>

            <?php if($_GET['action'] == 'nombreBillets'): ?>
                <!-- Code HTML pour l'action 'nombreBillets' -->
            <?php endif; ?>

            <?php if($_GET['action'] == 'coordonnées'): ?>
                <!-- Code HTML pour l'action 'coordonnées' -->
            <?php endif; ?>
            
            
        </div>

        <script>
        window.onload = function() {
            document.getElementById('date').focus();
        };
        </script>
        



    </section>




    <!-- <footer>
            <div class="logoContainer">
                <img src="./styles/images/logo.png" class="logoFooter" alt="">
                <div>
                    <p class="titleExpo">Esprit Vigée</p>
                    <p class="agence">Une exposition de Gallerie Past'elle</p>
                </div>

            </div>

            <div class="pages">
                <a href="ML.html" class="footerLink bold">Mentions légales</a>
                <a href="gallerie.html" class="footerLink">Gallerie</a>
                <a href="concept.html" class="footerLink">Le concept</a>
                <a href="billeterie.php" class="footerLink">Billeterie</a>
                <a href="contact.html" class="footerLink">Contact</a>
            </div>
            <div class="reseaux">
                <p class="bold contact">Contact</p>
                <div class="linksReseau">
                    <a href="" class="linkReseau">
                        <img src="./styles/images/facebook.png" class="reseau" alt="lien vers facebook">
                    </a>
                    <a href="" class="linkReseau">
                        <img src="./styles/images/pinterest.png" class="reseau" alt="lien vers pinterest">
                    </a>
                    <a href="" class="linkReseau">
                        <img src="./styles/images/instagram.png" class="reseau" alt="lien vers instagram">
                    </a>

                </div>

            </div>

        </footer> -->

    <script src="./script/menu.js"></script>
    <script src="./script/halo.js"></script>

    
</body>
</html>