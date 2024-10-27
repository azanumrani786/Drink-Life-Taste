//const container = document.querySelector('.container-counts');
//const counters = document.querySelectorAll('.count');
let active = false;
function updateCount(counter) {
    const target = parseInt(counter.dataset.count);
    let count = 0;

    function incrementCount() {
        if (count < target) {
            count++;
            counter.innerText = count;
            setTimeout(incrementCount, 10);
        } else {
            counter.innerText = target;
        };
    };

    incrementCount();
};


document.addEventListener('DOMContentLoaded', () => {
    const containers = document.querySelectorAll('.container-counts');
    let active = false;

    function checkVisibility(container) {
        const containerTop = container.offsetTop;
        const containerHeight = container.offsetHeight;

        if (pageYOffset > containerTop - containerHeight - 200 && !container.classList.contains('active')) {
            const counters = container.querySelectorAll('.count');
            counters.forEach(counter => {
                counter.innerText = 0;
                updateCount(counter);
            });
            container.classList.add('active');
        };
    };

    window.addEventListener('scroll', () => {
        containers.forEach(container => {
            checkVisibility(container);
        });
    });
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
        priceElement.textContent = `${price}`;
    });
});


const sliderNutritions = [
    {
      category: "energy",
      src: "./public/img/flavor/Energy drink Fruit punch.png",
      calories: '100',
      caffeine: '250',
      cabs: '40',
      fats: '60',
      name: 'Energy drink Fruit punch'
    },
    {
      category: "energy",
      src: "./public/img/flavor/Energy drink mango.png",
      calories: '200',
      caffeine: '350',
      cabs: '100',
      fats: '50',
      name: 'Energy drink mango'
    },
    {
      category: "energy",
      src: "./public/img/flavor/Energy drink orange.png",
      calories: '400',
      caffeine: '350',
      cabs: '200',
      fats: '100',
      name: 'Energy drink orange'
    },
    {
      category: "energy",
      src: "./public/img/flavor/Energy drink original.png",
      calories: '400',
      caffeine: '350',
      cabs: '200',
      fats: '100',
      name: 'Energy drink original'
    },
    {
        category: "energy",
        src: "./public/img/flavor/Energy drink strawberry g.png",
        calories: '400',
        caffeine: '350',
        cabs: '200',
        fats: '100',
        name: 'Energy drink strawberry'
    },
    {
        category: "energy",
        src: "./public/img/flavor/Energy drink tropical punch.png",
        calories: '400',
        caffeine: '350',
        cabs: '200',
        fats: '100',
        name: 'Energy drink tropical punch'
    },
    {
        category: "recovery",
        src: "./public/img/flavor/Recovery Drink fruit punch.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Recovery Drink fruit punch'
    },
    {
        category: "recovery",
        src: "./public/img/flavor/Recovery Drink mango.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Recovery Drink mango'
    },
    {
        category: "recovery",
        src: "./public/img/flavor/Recovery Drink orange.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Recovery Drink orange'
    },
    {
        category: "recovery",
        src: "public/img/flavor/Recovery Drink strwaberry.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Recovery Drink strwaberry'
    },
    {
        category: "sparkling",
        src: "./public/img/flavor/Sparkling blood orange.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling blood orange'
    },
    {
        category: "sparkling",
        src: "./public/img/flavor/Sparkling cherry.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling cherry'
    },
    {
        category: "sparkling",
        src: "./public/img/flavor/Sparkling grapefruit.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling grapefruit'
    },
    {
        category: "sparkling",
        src: "./public/img/flavor/Sparkling mandarin orange.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling mandarin orange'
    },
    {
        category: "sparkling",
        src: "./public/img/flavor/Sparkling mango.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling mango'
    },
    {
        category: "sparkling",
        src: "./public/img/flavor/Sparkling pineapple ginger.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling pineapple ginger'
    },
    {
        category: "sparkling",
        src: "./public/img/flavor/Sparkling Tropical punch.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling Tropical punch'
    },
  ];

let indexNutrition = 0;

const nextNutrition = document.querySelector('.next-nutrition');
const prevNutrition = document.querySelector('.prev-nutrition');
const drinkNutrition = document.querySelector('.drink-nutrition');
const calories = document.querySelector('.calories');
const caffeine = document.querySelector('.caffeine');
const cabs = document.querySelector('.cabs');
const fats = document.querySelector('.fats');
const nameDrink = document.querySelector('.name-drink');
const nutrients = document.querySelectorAll('.nutrient');
const cards = document.querySelector('.container-nutrition').querySelectorAll('.card');


nextNutrition.addEventListener('click', () => {
drinkNutrition.classList.remove('animate__backInLeft');
drinkNutrition.classList.remove('animate__backInRight');
void drinkNutrition.offsetWidth && waterBg.offsetWidth;
if(indexNutrition <= 15) {
    indexNutrition++;
    console.log(indexNutrition)
  drinkNutrition.src = sliderNutritions[indexNutrition].src;
  nameDrink.innerText = sliderNutritions[indexNutrition].name;
  calories.setAttribute('data-count', sliderNutritions[indexNutrition].calories);
  caffeine.setAttribute('data-count', sliderNutritions[indexNutrition].caffeine);
  cabs.setAttribute('data-count', sliderNutritions[indexNutrition].cabs);
  fats.setAttribute('data-count', sliderNutritions[indexNutrition].fats);
  const counters = document.querySelectorAll('.count');
  counters.forEach(counter => {
    counter.innerText = 0;
    updateCount(counter);
  });
  drinkNutrition.classList.add('animate__backInLeft');
  if(sliderNutritions[indexNutrition].category === 'recovery') {
    console.log('recovery')
    nutrients.forEach(nutrition => {
        nutrition.style.background = "#009C4C";
       });
       cards.forEach(card => {
        card.style.border = "4px solid #009C4C";
       });
}else if(sliderNutritions[indexNutrition].category === 'energy') {
    nutrients.forEach(nutrition => {
        nutrition.style.background = "#F26522";
    });
    cards.forEach(card => {
        card.style.border = "4px solid #F26522";
    });
} else if (sliderNutritions[indexNutrition].category === 'sparkling') {
    nutrients.forEach(nutrition => {
        nutrition.style.background = "#E82D73";
    });
    cards.forEach(card => {
        card.style.border = "4px solid #E82D73";
    });
};
};
});

prevNutrition.addEventListener('click', () => {
drinkNutrition.classList.remove('animate__backInRight');
drinkNutrition.classList.remove('animate__backInLeft');
void drinkNutrition.offsetWidth && waterBg.offsetWidth;
if(indexNutrition >= 1) {
   indexNutrition--;
   console.log(indexNutrition)
   drinkNutrition.src = sliderNutritions[indexNutrition].src;
   nameDrink.innerText = sliderNutritions[indexNutrition].name;
   calories.setAttribute('data-count', sliderNutritions[indexNutrition].calories);
   caffeine.setAttribute('data-count', sliderNutritions[indexNutrition].caffeine);
   cabs.setAttribute('data-count', sliderNutritions[indexNutrition].cabs);
   fats.setAttribute('data-count', sliderNutritions[indexNutrition].fats);
   const counters = document.querySelectorAll('.count');
   counters.forEach(counter => {
     counter.innerText = 0;
     updateCount(counter);
   });
   drinkNutrition.classList.add('animate__backInRight');
   if(sliderNutritions[indexNutrition].category === 'recovery') {
      nutrients.forEach(nutrition => {
       nutrition.style.background = "#009C4C";
      });
      cards.forEach(card => {
        card.style.border = "4px solid #009C4C";
    });
       console.log('recovery')
   }else if(sliderNutritions[indexNutrition].category === 'sparkling') {
    nutrients.forEach(nutrition => {
        nutrition.style.background = "#E82D73";
    });
    cards.forEach(card => {
        card.style.border = "4px solid #E82D73";
    });
   } else if(sliderNutritions[indexNutrition].category === 'energy') {
    nutrients.forEach(nutrition => {
        nutrition.style.background = "#F26522";
    });
    cards.forEach(card => {
        card.style.border = "4px solid #F26522";
    });
};
};
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
    "product": {
        fr: "Produit"
    },
    "Product": {
        fr: "Produit"
    },
    "Home": {
        fr: "Domicile"
    },
    "product 1": {
        fr: "Produit"
    },
    "Which flavor do you like?": {
        fr: "Quelle saveur aimez-vous ?"
    },
    "can": {
        fr: "1 pouvoir"
    },
    "can 1":{
        fr: "1 pouvoir"
    },
    "can 2":{
        fr: "1 pouvoir"
    },
    "can 3":{
        fr: "1 pouvoir"
    },
    "can 4":{
        fr: "1 pouvoir"
    },
    "can 5":{
        fr: "1 pouvoir"
    },
    "pack": {
        fr: "1 emballer"
    },
    "pack 1": {
        fr: "1 emballer"
    },
    "pack 2": {
        fr: "1 emballer"
    },
    "pack 3": {
        fr: "1 emballer"
    },
    "pack 4": {
        fr: "1 emballer"
    },
    "pack 5": {
        fr: "1 emballer"
    },
    "go shop": {
        fr: "Aller magasiner"
    },
    "go shop 1": {
        fr: "Aller magasiner"
    },
    "go shop 2": {
        fr: "Aller magasiner"
    },
    "go shop 3": {
        fr: "Aller magasiner"
    },
    "go shop 4": {
        fr: "Aller magasiner"
    },
    "go shop 5": {
        fr: "Aller magasiner"
    },
    "discount": {
        fr: "Rabais"
    },
    "Get 10% Off This Month" : {
        fr: "Obtenez 10% de réduction ce mois-ci"
    },
    "go shop 6": {
        fr: "boutique"
    },
    "nutrition": {
        fr: "nutrition"
    },
    "Citrus blast flavor": {
       fr: "Saveur d’explosion d’agrumes"
    },
    "calories": {
        fr: "calories"
    },
    "caffeine": {
        fr: "caféine"
    },
    "cabs": {
        fr: "Taxis"
    },
    "fats": {
        fr: "corps gras"
    },
    "see more nutrition": {
       fr: "Voir plus Nutrition"
    },
    "Get In Touch With Us": {
        fr: "Contactez-nous"
    },
    "Leave a Message": {
        fr: "Laissez un message."
    },
    "send message": {
        fr: "Envoyer un message"
    },
    "subscribe  for our monthly Newsletter": {
        fr: "abonnez-vous à notre newsletter mensuelle"
    },
    "send": {
        fr: "Envoyer"
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


const addQuantitys = document.querySelectorAll('.add');

addQuantitys.forEach(addQuantity => {
    addQuantity.addEventListener('click', (e) => {
        const quantitySelect = addQuantity.parentNode.querySelector('.quantitySelect');
        let quantity = parseInt(quantitySelect.dataset.quantity) || 1;
        quantity++;
        quantitySelect.dataset.quantity = quantity;
        quantitySelect.innerText = quantity;
    });
});

const decreaseQuantitys = document.querySelectorAll('.remove');

decreaseQuantitys.forEach(decreaseQuantity => {
    decreaseQuantity.addEventListener('click', () => {
        const quantitySelect = decreaseQuantity.parentNode.querySelector('.quantitySelect');
        let quantity = parseInt(quantitySelect.dataset.quantity) || 1;

        if (quantity > 1) {
            quantity--;
            quantitySelect.dataset.quantity = quantity;
            quantitySelect.innerText = quantity;
        }
    });
});

const addTocartForms = document.querySelectorAll('.formCart');

addTocartForms.forEach(addTocartForm => {
    addTocartForm.addEventListener('submit', async (e) => {
        e.preventDefault();

        const quantity = Number(e.target.parentNode.querySelector('.quantitySelect').dataset.quantity) || 1;
        console.log('Quantity:', quantity);

        const id = e.target.id;
        console.log('Product ID:', id);

        const price = Number(e.target.parentNode.querySelector('.price').innerText);
        console.log('Price:', price);

        const data = {
            productId: id,
            quantity: quantity,
            price: price
        };

        try {
            const url = '';
            const response = await fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify(data)
            });
            if (!response.ok) {
                throw new Error(`Server error: ${response.status}`);
            }
            const result = await response.json();
            console.log('Product added to cart:', result);

        } catch (error) {
            console.error('Failed to add product to cart:', error);
        }
    });
});