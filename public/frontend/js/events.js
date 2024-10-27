const dropBtns = document.querySelectorAll('.dropbtn');

const disciplines = [];
const country = [];


dropBtns.forEach(dropBtn => {
    dropBtn.addEventListener('click', (event) => {
        event.stopPropagation();
        if (event.target.classList.contains('fa-xmark')) {
            const parent = dropBtn.parentNode;
            const dropdownContent = parent.querySelector('.dropdown-content');

            console.log(parent)
            if(parent.classList.contains('country')) {
                country.length = 0;
                console.log(disciplines)
                const liChecks = dropdownContent.querySelectorAll('.select-options');
                liChecks.forEach(liCheck => {
                   liCheck.querySelector('input').checked = false;
                });
                 dropBtn.innerHTML = '<i class="fas fa-bars-staggered"></i> All locations <i class="fas fa-angle-down"></i>'
            } else {
                disciplines.length = 0;
                console.log(disciplines)
             const liChecks = dropdownContent.querySelectorAll('.select-options-disciplines');
             liChecks.forEach(liCheck => {
                liCheck.querySelector('input').checked = false;
             });
              dropBtn.innerHTML = '<i class="fas fa-bars-staggered"></i> All disciplines <i class="fas fa-angle-down"></i>'
            };

            return; 
        };
        const parent = dropBtn.parentNode;
        const currentDropdown = parent.querySelector('.dropdown-content');

        document.querySelectorAll('.dropdown-content').forEach(dropdown => {
            if (dropdown !== currentDropdown) {
                dropdown.classList.remove('active');
            }
        });

        currentDropdown.classList.toggle('active');
    });
});

document.addEventListener('click', () => {
    document.querySelectorAll('.dropdown-content').forEach(dropdown => {
        dropdown.classList.remove('active');
    });
});

document.querySelectorAll('.dropdown-content').forEach(dropdown => {
    dropdown.addEventListener('click', (event) => {
        event.stopPropagation();
    });
});


const options = document.querySelectorAll('.options');

options.forEach(option => {
    option.addEventListener('click', () => {
        const parentContainer = option.closest('.select'); 
        parentContainer.querySelectorAll('.options').forEach(opt => opt.classList.remove('active'));
        option.classList.add('active');
    });
});


const selectOptions = document.querySelectorAll('.select-options');

selectOptions.forEach(selectOption => {
    selectOption.addEventListener('click', () => {
        const input = selectOption.querySelector('input');
        input.checked = !input.checked; 
        const optionText = selectOption.innerText;
        if (input.checked) {
            if (!country.includes(optionText)) {
                country.push(optionText);
            };
        } else {
            const index = country.indexOf(optionText);
            if (index !== -1) {
                country.splice(index, 1);
            };
        };
        const text = selectOption.parentNode.parentNode.parentNode.querySelector('.dropbtn');
        if(country.length >= 1) {
            text.innerHTML = `
            <i class="fas fa-bars-staggered"></i>
             countries <span>${country.length}</span>
            <i class="fas fa-xmark"></i>
            `;
        } else {
            text.innerHTML = '<i class="fas fa-bars-staggered"></i> All locations <i class="fas fa-angle-down"></i>'
        }
        console.log(country);
    });
});

const selectOptionsDisciplines = document.querySelectorAll('.select-options-disciplines');



selectOptionsDisciplines.forEach(selectOptionsDiscipline => {
    selectOptionsDiscipline.addEventListener('click', () => {
        const input = selectOptionsDiscipline.querySelector('input');
        input.checked = !input.checked; 
        const optionText = selectOptionsDiscipline.innerText;
        if (input.checked) {
            if (!disciplines.includes(optionText)) {
                disciplines.push(optionText);
            };
        } else {
            const index = disciplines.indexOf(optionText);
            if (index !== -1) {
                disciplines.splice(index, 1);
            };
        };
        const text = selectOptionsDiscipline.parentNode.parentNode.parentNode.querySelector('.dropbtn');
        if(disciplines.length >= 1) {
            text.innerHTML = `
            <i class="fas fa-bars-staggered"></i>
            Disciplines <span>${disciplines.length}</span>
            <i class="fas fa-xmark"></i>
            `;
        } else {
            text.innerHTML = '<i class="fas fa-bars-staggered"></i> All disciplines <i class="fas fa-angle-down"></i>'
        }
        console.log(text);
        console.log(disciplines)
    });
});

const openFilter = document.querySelector('.openFilter');
const closeFilter = document.querySelector('.closeFilter');
const filterContaier = document.querySelector('.filter');

openFilter.addEventListener('click', () => {
filterContaier.classList.add('active');
});

closeFilter.addEventListener('click', () => {
filterContaier.classList.remove('active');
});


const translations = {
    "Register / Login": {
        fr: "S’inscrire / Se connecter"
    },
    "our products": {
        fr: "Nos produits"
    },
    "LifeTaste Fitness": {
        fr: "LifeTaste Aptitude"
    },
    "Store Locator": {
        fr: "Localisateur de magasin"
    },
    "Ambassadors": {
       fr: "Ambassadrices"
    },
    "my account": {
        fr: "Mon compte"
    },
    "About us": {
        fr: `Environ <i class="fas fa-angle-down"></i>`
    },
    "contact us": {
        fr: "Contactez-nous"
    },
    "events": {
        fr: "épreuves"
    },
    "about LifeTaste": {
        fr: "Environ LifeTaste"
    },
    "Quick links": {
        fr: "Liens rapides"
    },
    "Our client": {
       fr: "Notre Client"
    },
    "Contact": {
        fr: "Contact"
    },
    "Home": {
        fr: "Accueil"
    },
    "About Us": {
        fr: "À propos de nous"
    },
    "Product": {
        fr: "Produit"
    },
    "Pages": {
        fr: "Pages"
    },
    "Contact Us": {
        fr: "Contactez-nous"
    },
    "events": {
        fr: "épreuves"
    },
    "Events": {
        fr: "épreuves"
    },
    "Home": {
        fr: "Domicile"
    },
    "Find Events by Interest": {
        fr: "Trouvez des événements par centre d’intérêt"
    },
    "filter by": {
        fr: "Filtrer par"
    },
    "all locations": {
       fr: `<i class="fas fa-location-dot"></i> Tous les sites <i class="fas fa-angle-down"></i>`
    },
    "All disciplines": {
        fr: `<i class="fas fa-bars-staggered"></i> Toutes disciplines <i class="fas fa-angle-down"></i>`
    },
    "Filter by": {
        fr: "Filtrer par"
    },
    "Upcoming": {
        fr: "Prochain"
    },
    "past": {
        fr: "passé"
    },
    "all": {
        fr: "toute"
    },
    "live": {
        fr: "vivre"
    },
    "title card": {
        fr: "carte de titre"
    },
    "title card 1": {
        fr: "carte de titre"
    },
    "title card 2": {
        fr: "carte de titre"
    },
};

function changeText(elementId, translationKey, lang) {
    const element = document.getElementById(elementId);
    if (element && translations[translationKey] && translations[translationKey][lang]) {
        element.innerHTML = translations[translationKey][lang];
    } else {
        console.warn(`Element with ID '${elementId}' not found or translation missing for key '${translationKey}' in language '${lang}'`);
    };
};

function changeLanguage(lang) {
    if (lang === 'en') {
        window.location.reload();
    } else {
        for (const [elementId, translation] of Object.entries(translations)) {
            changeText(elementId, elementId, lang);
        };
    };
};

document.addEventListener("DOMContentLoaded", () => {
    const languageSelector = document.querySelector('.languagebtn');
    const languageMenu = document.getElementById('language');
    languageSelector.addEventListener('click', () => {
        languageMenu.style.display = languageMenu.style.display === 'block' ? 'none' : 'block';
    });

    document.querySelectorAll('.language li').forEach(item => {
        item.addEventListener('click', () => {
            const selectedLang = item.getAttribute('data-lang');
            changeLanguage(selectedLang);
            languageMenu.style.display = 'none';
            languageSelector.innerHTML = item.innerHTML;
        });
    });
});