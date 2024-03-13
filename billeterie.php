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

    <script src="./script/billeterie.js"></script>
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
            <!-- <a href="#etape1" onclick="afficherEtape('etape1')" class="navLinkBilleterie">Date de visite</a>
            <a href="#etape2" onclick="afficherEtape('etape2')" class="navLinkBilleterie">Nombre de billets</a>
            <a href="#etape3" onclick="afficherEtape('etape3')"class="navLinkBilleterie">Coordonnées</a> -->

            <button class="navButton" onclick="afficherEtape('etape1')">Date de visite</button>
            <button class="navButton" onclick="afficherEtape('etape2')">Nombre de billets</button>
            <button class="navButton" onclick="afficherEtape('etape3')">Coordonnées</button>
        </div>
        <div class="resa">

                <form action="traiteResa.php" method="POST">
                    <div class="etape" id="etape1">
                        <p>
                            <label for="date">Choisissez une date :</label>
                            <input type="date" id="date" name="date">
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
                                <input type="radio" id="radio5" name="horaire" value="14:00" required="">
                                <label for="radio5">14:00</label>
                                <input type="radio" id="radio6" name="horaire" value="15:00" required="">
                                <label for="radio6">15:00</label>
                                <input type="radio" id="radio7" name="horaire" value="16:00" required="">
                                <label for="radio7">16:00</label>
                                <input type="radio" id="radio8" name="horaire" value="17:00" required="">
                                <label for="radio8">17:00</label>
                                <input type="radio" id="radio9" name="horaire" value="18:00" required="">
                                <label for="radio9">18:00</label>
                            </div>
                        </p>
                        <button type="button" class="valid one" onclick="passerEtape('etape1', 'etape2')">Valider</button>
                    </div>
                    
                    <div class="etape" id="etape2" style="display: none;">
                        <p>
                            <label for="number">Nombre de billets uniques pour l'exposition :</label>
                        </p>
                        <p class="numberBillets">
                            <button class='decrement qteTotale' type='button'>-</button>
                            <input type="number" id="number" name="number" min='1' max='10' value="1" readonly required>  
                            <button class='increment qteTotale' type='button'>+</button>

                        </p>
                            
                        </p>
                        <button type="button" class="valid two" onclick="passerEtape('etape2', 'etape3')">Valider</button>
                    </div>
                    <div class="etape" id="etape3" style="display: none;">
                        <p>
                            <label for="nom">Nom : </label>
                            <input type="text" id="nom" name="nom" reqauired>
                        </p>
                        <p>
                            <label for="prenom">Prénom :</label>
                            <input type="text" id="prenom" name="prenom" required>
                        </p>
                        <p>
                            <label for="mail">Adresse mail :</label>
                            <input type="mail" id="mail" name="mail" required>
                        </p>
                        <p>
                            <input type="checkbox" id="conditions" name="conditions" required>
                            <label for="conditions">J’accèpte les conditions générales de ventes de l’exposition Esprit Vigée</label>
                        </p>
                        <p>
                            <input type="submit" value="valider" class="submit">
                        </p>
                    </div>
        
                    

                </form>
                <div class="recap">
                    <img src="./styles/images/afficheExpo.png" class="affiche" alt="">
                    <div class= recapTxt>
                        <p class="titleBillet">Exposition Esprit Vigée</p>
                        <p>Mode d'obtention : e-ticket, gratuit</p>
                        <p class="date" style="display: none;">Date : le <span id="dateChoisie"></span> à <span id="horaireChoisi"></span></p>
                        <p class="nbBillets" style="display: none;">Nombre de billets : <span id="nombreBillets"></span></p>
                    </div>
                </div>
            
        



    </section>




    <footer>
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

        </footer>

    <script src="./script/menu.js"></script>
    <script src="./script/halo.js"></script>
    

    
</body>
</html>