<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title class="tbe">Billeterie - Esprit Vigée</title>

    <link rel="stylesheet" href="./styles/all.css">
    <link rel="stylesheet" href="./styles/menu.css">
    <link rel="stylesheet" href="./styles/billeterie.css">
    <link rel="stylesheet" href="./styles/footer.css">
    <link rel="icon" href="./styles/images/favicon.ico">


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
              <li><a href="index.html" class="burgerLinks l1"></a></li>
              <li><a href="gallerie.html" class="burgerLinks l2"></a></li>
              <li><a href="concept.html" class="burgerLinks l3"></a></li>
              <li><a href="billeterie.php" class="burgerLinks l4"></a></li>
              <li><a href="contact.html" class="burgerLinks l5">Contact</a></li>									
            </ul>
          </nav>
        
        <div class="nav2">
          <a href="gallerie.html"  class="navLink 1 l22"></a>
          <a href="concept.html"  class="navLink 2 l33"></a>
          <a href="index.html" >
            <img src="./styles/images/logo.png" class="logo" alt="logo de l'exposition">
          </a>
          <a href="billeterie.php"  class="navLink 3 l44"></a>
          <a href="contact.html"  class="navLink 4 l55">Contact</a>


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
        <h1 class="title b1"></h1>

        <div class="dropdown">
      <img class="lang-icon" src="./styles/images/langue2.png" alt="Image">
      <button id="dropdownBtn" class="dropbtn dpbtt"><span class="lang"></span> <img class="fl-icon" src="./styles/images/flechefren.png"
          alt="Image">
      </button>
      <div id="dropdownContent" class="dropdown-content">
        <a href="" class="fr fr1"></a>
        <a href="" class="en en2"></a>
      </div>
    </div>
        <div class="degrade"></div>
        <div class="navBilleterie">
            <!-- <a href="#etape1" onclick="afficherEtape('etape1')" class="navLinkBilleterie">Date de visite</a>
            <a href="#etape2" onclick="afficherEtape('etape2')" class="navLinkBilleterie">Nombre de billets</a>
            <a href="#etape3" onclick="afficherEtape('etape3')"class="navLinkBilleterie">Coordonnées</a> -->

            <button class="navButton btnb1" onclick="afficherEtape('etape1')"></button>
            <button class="navButton btnb2" onclick="afficherEtape('etape2')"></button>
            <button class="navButton btnb3" onclick="afficherEtape('etape3')"></button>
        </div>
        <?php if (isset($_GET["resa"] )){  
            echo "<p class=\"reponse repor\">Votre réservation a bien été prise en compte. Un mail vous a été transmis.</p>";
        } 

        if (isset($_GET["err"]) && $_GET["err"] === "date"){  
            echo "<p class=\"reponse rep0\">La date de visite que vous avez sélectionnée est déjà passée.</p>";         
        }

        if (isset($_GET["err"]) && $_GET["err"] === "mail"){  
            echo "<p class=\"reponse rep1\">Le mail que vous avez saisi est invalide.</p>";         
        }
        if (isset($_GET["err"]) && $_GET["err"] === "empty"){  
            echo "<p class=\"reponse rep2\">Veuillez remplir tous les champs.</p>";         
        }

        ?> 
        <div class="resa">
                <form action="traiteResa.php" method="POST">
                    <div class="etape" id="etape1">
                        <p>
                            <label for="date" class="datechoose"></label>
                            <input type="date" id="date" name="date">
                        </p>
                        <p>
                            <label for="date" class="timechoose"></label><br>
                            <div class="horaires">
                                
                                <input type="radio" id="radio1" name="horaire" value="10:00" >
                                <label for="radio1" class="radio1">10:00</label>
                                <input type="radio" id="radio2" name="horaire" value="11:00" >
                                <label for="radio2" class="radio2">11:00</label>
                                <input type="radio" id="radio3" name="horaire" value="12:00" >
                                <label for="radio3" class="radio3">12:00</label>
                                <input type="radio" id="radio4" name="horaire" value="13:00">
                                <label for="radio4" class="radio4">13:00</label>
                                <input type="radio" id="radio5" name="horaire" value="14:00">
                                <label for="radio5" class="radio5">14:00</label>
                                <input type="radio" id="radio6" name="horaire" value="15:00">
                                <label for="radio6" class="radio6">15:00</label>
                                <input type="radio" id="radio7" name="horaire" value="16:00" >
                                <label for="radio7" class="radio7">16:00</label>
                                <input type="radio" id="radio8" name="horaire" value="17:00" >
                                <label for="radio8" class="radio8">17:00</label>
                                <input type="radio" id="radio9" name="horaire" value="18:00" >
                                <label for="radio9" class="radio9">18:00</label>
                            </div>
                        </p>
                        <button type="button" class="valid one" onclick="passerEtape('etape1', 'etape2')">Valider</button>
                    </div>
                    
                    <div class="etape" id="etape2" style="display: none;">
                        <p>
                            <label for="number" class="numberbill"></label>
                        </p>
                        <p class="numberBillets">
                            <button class='decrement qteTotale' type='button'>-</button>
                            <input type="number" id="number" name="tickets" min='1' max='10' value="1" readonly >  
                            <button class='increment qteTotale' type='button'>+</button>

                        </p>
                            
                        </p>
                        <button type="button" class="valid two" onclick="passerEtape('etape2', 'etape3')"></button>
                    </div>
                    <div class="etape" id="etape3" style="display: none;">
                        <p>
                            <label for="nom" class="namee"> </label>
                            <input type="text" id="nom" name="nom" reqauired>
                        </p>
                        <p>
                            <label for="prenom" class="firstname"></label>
                            <input type="text" id="prenom" name="prenom" >
                        </p>
                        <p>
                            <label for="mail" class="mail">Adresse mail :</label>
                            <input type="mail" id="mail" name="mail" >
                        </p>
                        <p>
                            <input type="checkbox" id="conditions" name="conditions" required>
                            <label for="conditions" class="conditionss"></label>
                        </p>
                        <p>
                            <input type="submit" value="valider" class="submit">
                        </p>
                    </div>

                </form>
                <div class="recap">
                    <img src="./styles/images/afficheExpo.png" class="affiche" alt="">
                    <div class= recapTxt>
                        <p class="titleBillet"></p>
                        <p class="obtention"></p>
                        <p class="date" style="display:none">
                            <span class="dateLabel"></span>
                            <span id="dateChoisie"></span> 
                            <span class="horaireLabel"></span> 
                            <span id="horaireChoisi"></span></p>
                        <p class="nbBillets" style="display:none"> 
                            <span class="nbBilletsLabel"></span>
                            <span id="nombreBillets"></span>
                        </p>
                    </div>
                </div>

    </section>




    <footer>
            <div class="logoContainer">
                <img src="./styles/images/logo.png" class="logoFooter" alt="">
                <div>
                    <p class="titleExpo">Esprit Vigée</p>
                    <p class="agence"></p>
                </div>

            </div>

            <div class="pages">
                <a href="ML.html" class="footerLink bold f1"></a>
                <a href="conditionsVente.html" class="footerLink bold f2"></a>
                <a href="gallerie.html" class="footerLink f3"></a>
                <a href="concept.html" class="footerLink f4"></a>
                <a href="billeterie.php" class="footerLink f5"></a>
                <a href="contact.html" class="footerLink f6">Contact</a>
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
    <script src="./script/deroule.js"></script>


    
</body>
</html>