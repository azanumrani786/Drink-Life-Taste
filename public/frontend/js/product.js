const thumbs = document.querySelectorAll('.thumb');
const productImage = document.querySelector('.product-img');

thumbs.forEach(thumb => {
    thumb.addEventListener('click', (e) => {
    thumbs.forEach(t => t.classList.remove('active'));
    thumb.classList.add('active');
    const image = thumb.querySelector('img');
    productImage.querySelector('img').src = image.src;
    productImage.querySelector('img').setAttribute('xoriginal', image.src);
    });
});




const changeDeliverys = document.querySelectorAll('.change-delivery');

changeDeliverys.forEach(changeDelivery => {
    changeDelivery.addEventListener('click', () => {
   
        changeDeliverys.forEach(t => {
            const icon = t.querySelector('.check-change');
            icon.classList.remove('fa-circle-check');
            icon.classList.add('fa-circle');
        });

        const icon = changeDelivery.querySelector('.check-change');
        icon.classList.remove('fa-circle');
        icon.classList.add('fa-circle-check');
    });
});


var coll = document.getElementsByClassName("collapsible");
var i;

for (let i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
      this.classList.toggle("active");
    
      if (this.classList.contains("active")) {
        console.log("Il pulsante ha la classe 'active'.");
        this.querySelector('i').classList.remove('fa-angle-down');
        this.querySelector('i').classList.add('fa-angle-up');
      } else {
        this.querySelector('i').classList.add('fa-angle-down');
        this.querySelector('i').classList.remove('fa-angle-up');
      };
  
      var content = this.nextElementSibling;
      if (content.style.display === "block") {
        content.style.display = "none";
      } else {
        content.style.display = "block";
      };
    });
  };
  

  function openTab(evt, tabName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    };
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    };
    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
  };

const openModal = document.querySelector('.openModal');
const closeModal= document.querySelector('.close-modal');
const modal = document.querySelector('.overlay-tab');

openModal.addEventListener('click', () => {
modal.classList.add('active');
//document.querySelector('body').style.overflow = 'hidden';
});

closeModal.addEventListener('click', () => {
modal.classList.remove('active');
document.querySelector('body').style.overflow = 'visible';
});

const btns = document.querySelectorAll('.btn');

btns.forEach(btn => {
    btn.addEventListener('click', (e) => {
        const card = e.target.closest('.card');
        const cardBtns = card.querySelectorAll('.btn');
        cardBtns.forEach(b => b.classList.remove('active'));
        const button = e.target;
        button.classList.add('active');
        const price = button.getAttribute('data-price');
        const priceElement = card.querySelector('.price');
        priceElement.textContent = `$ ${price} USD`;
    });
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
  "read": {
    fr: "Lire les 37 avis"
  },
  "1 Question, 137 Answers": {
    fr: "1 question, 137 réponses"
  },
  "1 Question, 137 Answers": {
    fr: `<a href="#" id="1 Question, 137 Answers">1 Question, 137 Answers</a> ou <a href="#">Ecrire un avis</a>`
  },
  "flavor": {
    fr: "saveur"
  },
  "size": {
    fr: "taille"
  },
  "drinks": {
    fr: "4 boissons"
  },
  "delivery options": {
    fr: "Options de livraison"
  },
  "Ship to Me": {
    fr:  `<i class="fas fa-truck"></i> Expédiez-moi <i class="check-change far fa-circle-check"></i>`
  },
  "free shipping": {
    fr: `<span><span class="bold">Livraison gratuite</span> sur les commandes de 35 $+ </span><svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" height="14px" version="1.1" viewBox="0 0 14 14" width="14px" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1"><g transform="translate(-55.000000, -423.000000)"><g transform="translate(56.000000, 424.000000)"><circle cx="6.2" cy="6.2" r="6.2" stroke="#333"></circle><text fill="#333" font-family="CorisandeBold" font-size="12" font-weight="bold"><tspan x="4.75" y="10.5">i</tspan></text></g></g></g></svg>`
  },
  "in Stock": {
    fr: "en stock"
  },
  "Pick Up In-Store": {
    fr:  `<i class="fas fa-shop"></i> Retrait en magasin <i class="check-change far fa-circle"></i>`
  },
  "Please select store to see availability": {
    fr: "Veuillez sélectionner le magasin pour voir la disponibilité"
  },
  "Select Store": {
    fr: "Sélectionnez Magasin"
  },
  "Free Contactless": {
    fr: `<span><span>Sans contact gratuit</span> <span class="bold">Ramassage en bordure de trottoir</span> </span><svg xmlns:xlink="http://www.w3.org/1999/xlink" focusable="false" height="14px" version="1.1" viewBox="0 0 14 14" width="14px" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1"><g transform="translate(-55.000000, -423.000000)"><g transform="translate(56.000000, 424.000000)"><circle cx="6.2" cy="6.2" r="6.2" stroke="#333"></circle><text fill="#333" font-family="CorisandeBold" font-size="12" font-weight="bold"><tspan x="4.75" y="10.5">i</tspan></text></g></g></g></svg>`
  },
  "Ingredients": {
    fr: "Ingrédients"
  },
  "Caffeine": {
    fr: `Caféine <i class="fas fa-angle-down"></i>`
  },
  "Taurirne": {
     fr: `Taurine <i class="fas fa-angle-down"></i>`
  },
  "B-group vitamins": {
    fr: `Vitamines du groupe B <i class="fas fa-angle-down"></i>`
  },
  "Sugars": {
    fr: `Sucres <i class="fas fa-angle-down"></i>`
  },
  "Water": {
    fr: `Water <i class="fas fa-angle-down"></i>`
  },
  "more ingredients": {
    fr: "Plus d’ingrédients"
  },
  "overview": {
    fr: "Aperçu"
  },
  "comments": {
    fr: "Commentaires"
  },
  "detail": {
    fr: "Détail"
  },
  "Excellent Condition": {
    fr: "Excellent état"
  },
  "Frame Included": {
    fr: "Cadre inclus"
  },
  "yes": {
    fr: "oui"
  },
  "Top Piece Guarantee": {
    fr: "Garantie de la pièce supérieure"
  },
  "yes 1": {
    fr: "oui"
  },
  "go shop": {
    fr: 'Aller magasiner'
  },
  "go shop 1": {
    fr: 'Aller magasiner'
  },
  "go shop 2": {
    fr: 'Aller magasiner'
  },
  "go shop 3": {
    fr: 'Aller magasiner'
  },
  "go shop 4": {
    fr: 'Aller magasiner'
  },
  "go shop 5": {
    fr: 'Aller magasiner'
  },
  "go shop 6": {
    fr: 'Aller magasiner'
  },
  "go shop 7": {
    fr: 'Aller magasiner'
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


const wrap = document.querySelector('.wrap');

const flavors = [
  {"id":"1","title":"Mango","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"2","title":"Strawberry","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"3","title":"Orange","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"4","title":"Grape","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"5","title":"Pineapple","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"6","title":"Watermelon","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"7","title":"Peach","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"8","title":"Blueberry","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"9","title":"Lemon","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"10","title":"Raspberry","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"11","title":"Coconut","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"12","title":"Apple","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"13","title":"Cherry","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"14","title":"Banana","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"15","title":"Kiwi","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null},
  {"id":"16","title":"Pomegranate","is_shown":"1","created_by":"3","updated_by":"3","created_at":null,"updated_at":null}
];

flavors.forEach(flavor => {
  const customCheckbox = document.createElement('div');
  customCheckbox.classList.add('custom-checkbox');
  customCheckbox.innerHTML = `
    <input name="${flavor.title}" value="${flavor.id}" type="checkbox" id="${flavor.id}" class="single-checkbox">
    <label for="${flavor.id}" class="button">${flavor.title}</label>
  `;
  wrap.append(customCheckbox);
});
const checkboxes = document.querySelectorAll('.single-checkbox');

checkboxes.forEach((checkbox) => {
  checkbox.addEventListener('change', function() {
    if (this.checked) {
      checkboxes.forEach((cb) => {
        if (cb !== this) {
          cb.checked = false;
        };
      });
    };
  });
});
const checkboxs = document.querySelectorAll('.single-checkboxs');
checkboxs.forEach((checkbox) => {
  checkbox.addEventListener('change', function() {
    if (this.checked) {
      checkboxs.forEach((cb) => {
        if (cb !== this) {
          cb.checked = false;
        };
      });
    };
  });
});