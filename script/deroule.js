var dropdownBtn = document.getElementById("dropdownBtn");
var dropdownContent = document.getElementById("dropdownContent");

dropdownBtn.addEventListener("click", function() {
  dropdownContent.classList.toggle("show");
});
document.addEventListener("DOMContentLoaded", function() {
    var currentLang = "fr"; // par défaut=fr
    
    // recup le fichier JSON 
    fetch('./script/translations.json')
        .then(response => response.json())
        .then(data => {
            // fct pour chnger la langue
            function changeLanguage(lang) {
                currentLang = lang;
                updatePage(); // mise à jour du cntenu de la page après avoir changé la lg
                localStorage.setItem("lang", lang);

            }

            //  mettr a jour le contnu de la page en fct de la langue actuelle
            function updatePage() {
                var translations = data[currentLang];
                for (var key in translations) {
                    var translation = translations[key];
                    var element;
                    if (translation.class) {
                        element = document.querySelector("." + translation.class);
                    } else if (translation.id) {
                        element = document.getElementById(translation.id);
                    }
                    if (element) {
                        element.textContent = translation.text;
                    }
                }
            }
            var savedLang = localStorage.getItem("lang");
            if (savedLang) {
                // utlise la langue enregistree pr afficher le contenu de la page
                changeLanguage(savedLang);
            } else {
                // utlise 1 langue par défaut si aucune langue n'est enregistrée
                updatePage(); //  langue par défaut définie dans currentLang
            }

            //  event pr le clic sur le bouton de langue
            document.getElementById("dropdownContent").addEventListener("click", function(event) {
                if (event.target.classList.contains("en")) {
                    changeLanguage("en"); // chgmnt la langue en anglais
                } else if (event.target.classList.contains("fr")) {
                    changeLanguage("fr"); // chgmnt de la langue en français
                }
            });
        })
        .catch(error => console.error('Erreur lors du chargement du fichier JSON :', error));
});
