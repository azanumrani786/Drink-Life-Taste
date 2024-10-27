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
        "fr": "Accueil"
    },
    "About Us": {
        "fr": "À propos de nous"
    },
    "Product": {
        "fr": "Produit"
    },
    "Pages": {
        "fr": "Pages"
    },
    "Contact Us": {
        "fr": "Contactez-nous"
    },
    "text": {
    fr: "AMBASSADEURS DE LA MARQUE"
    },
    "text1": {
        fr: "Marque LifeTaste Ambassadeurs"
    },
    "text2": {
        fr: "Bienvenue sur la page des ambassadrices de la marque LifeTaste Beverage !"
    },
    "text3": {
        fr: "Chez LifeTaste Beverage, nous avons pour mission de promouvoir un mode de vie plus sain et plus dynamique grâce à notre gamme exceptionnelle de boissons santé. Nos ambassadeurs de marque jouent un rôle central dans la défense de cette cause et inspirent les autres à adopter un mode de vie axé sur le bien-être et la vitalité."
    },
    "text4": {
        fr: "Qui nous recherchons:"
    },
    "text5": {
        fr: "Nous sommes à la recherche de personnes passionnées par la santé, le bien-être et l’impact incroyable qu’une bonne boisson peut avoir sur nos vies. Que vous soyez un passionné de fitness, un défenseur du bien-être, un expert en nutrition ou simplement quelqu’un qui croit au pouvoir d’un mode de vie équilibré, nous vous invitons à nous rejoindre."
    },
    "text6": {
        fr: "TU ES PRÊT? POSTULEZ AU PROGRAMME D’AMBASSADEURS LifeTaste DÈS AUJOURD’HUI."
    },
    "text7": {
        fr: "En tant qu’ambassadeur de la marque LifeTaste, vous ne représenterez pas seulement une marque de boissons, mais aussi une philosophie de bien-être holistique."
    },
    "text8": {
        fr: "Soumettre le formulaire"
    }
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
    