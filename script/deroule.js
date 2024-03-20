var dropdownBtn = document.getElementById("dropdownBtn");
var dropdownContent = document.getElementById("dropdownContent");

dropdownBtn.addEventListener("click", function () {
    dropdownContent.classList.toggle("show");
});
document.addEventListener("DOMContentLoaded", function () {
    var currentLang = "fr"; // par défaut=fr

    // recup le fichier JSON 
    fetch('./script/translations.json')
        .then(response => response.json())
        .then(data => {
            // fct pour chnger la langue
            function changeLanguage(lang) {
                currentLang = lang;
                updatePage(); // Mise à jour du contenu de la page après avoir changé la langue
                localStorage.setItem("lang", lang);
            
                // Mettre à jour les valeurs des heures
                updateHourValues(currentLang);

                var submitBtn = document.querySelector('.submit');
                if (submitBtn) {
                    if (lang === 'en') {
                        submitBtn.value = "Confirm";
                    } else if (lang === 'fr') {
                        submitBtn.value = "Valider";
                    }
                } 
            }
                //  mettre a jour le contenu de la page en fct de la langue actuelle
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
                            // Remplacez les sauts de ligne par des balises <br>
                            translation.text = translation.text.replace(/\\n/g, '<br>');
                            element.innerHTML = translation.text; // Utilise innerHTML pour interpréter les balises HTML
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
                document.getElementById("dropdownContent").addEventListener("click", function (event) {
                    if (event.target.classList.contains("en")) {
                        changeLanguage("en"); // chgmnt la langue en anglais
                    } else if (event.target.classList.contains("fr")) {
                        changeLanguage("fr"); // chgmnt de la langue en français
                    }
                });
            })
        .catch(error => console.error('Erreur lors du chargement du fichier JSON :', error));

        function updateHourValues(lang) {
            console.log("updateHourValues called with language: " + lang);
        
            var heures = document.querySelectorAll('input[name="horaire"]');
            heures.forEach(function(heure) {
                switch (heure.value) {
                    case '10:00':
                        heure.value = lang === 'en' ? '10:00 AM' : '10:00';
                        break;
                    case '11:00':
                        heure.value = lang === 'en' ? '11:00 AM' : '11:00';
                        break;
                    case '12:00':
                        heure.value = lang === 'en' ? '12:00 PM' : '12:00';
                        break;
                    case '13:00':
                        heure.value = lang === 'en' ? '1:00 PM' : '13:00';
                        break;
                    case '14:00':
                        heure.value = lang === 'en' ? '2:00 PM' : '14:00';
                        break;
                    case '15:00':
                        heure.value = lang === 'en' ? '3:00 PM' : '15:00';
                        break;
                    case '16:00':
                        heure.value = lang === 'en' ? '4:00 PM' : '16:00';
                        break;
                    case '17:00':
                        heure.value = lang === 'en' ? '5:00 PM' : '17:00';
                        break;
                    case '18:00':
                        heure.value = lang === 'en' ? '6:00 PM' : '18:00';
                        break;
                    default:
                        break;
                }
            });
        }
        
});
