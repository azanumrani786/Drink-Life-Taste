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
const namDrink = document.querySelector('.name-drink');
const seMore = document.querySelector('.see');
const nutritionBtn = document.querySelector('#nutrition');



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
       namDrink.style.color = "#009C4C";
       seMore.style.background = "#009C4C";
       nutritionBtn.style.background = "#009C4C";
}else if(sliderNutritions[indexNutrition].category === 'energy') {
    nutrients.forEach(nutrition => {
        nutrition.style.background = "#F26522";
        nutritionBtn.style.background = "#F26522";
    });
    cards.forEach(card => {
        card.style.border = "4px solid #F26522";
    });
    namDrink.style.color = "#F26522";
    seMore.style.background = "#F26522";
} else if (sliderNutritions[indexNutrition].category === 'sparkling') {
    nutrients.forEach(nutrition => {
        nutrition.style.background = "#E82D73";
    });
    cards.forEach(card => {
        card.style.border = "4px solid #E82D73";
    });
    namDrink.style.color = "#E82D73";
    seMore.style.background = "#E82D73";
    nutritionBtn.style.background = "#E82D73";
};
} else {
    indexNutrition = 0;
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
    nutrients.forEach(nutrition => {
        nutrition.style.background = "#F26522";
    });
    cards.forEach(card => {
        card.style.border = "4px solid #F26522";
    });
    namDrink.style.color = "#F26522";
    seMore.style.background = "#F26522";
    nutritionBtn.style.background =  "#F26522";
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
    namDrink.style.color = "#009C4C";
    seMore.style.background = "#009C4C";
    nutritionBtn.style.background =  "#009C4C";
       console.log('recovery')
   }else if(sliderNutritions[indexNutrition].category === 'sparkling') {
    nutrients.forEach(nutrition => {
        nutrition.style.background = "#E82D73";
    });
    cards.forEach(card => {
        card.style.border = "4px solid #E82D73";
    });
    namDrink.style.color = "#E82D73";
    seMore.style.background = "#E82D73";
    nutritionBtn.style.background = "#E82D73";
   } else if(sliderNutritions[indexNutrition].category === 'energy') {
    nutrients.forEach(nutrition => {
        nutrition.style.background = "#F26522";
    });
    cards.forEach(card => {
        card.style.border = "4px solid #F26522";
    });
    namDrink.style.color = "#F26522";
    seMore.style.background = "#F26522";
    nutritionBtn.style.background =  "#F26522";
};
} else {
    indexNutrition = 16;
    console.log(sliderNutritions[indexNutrition].name)
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
    nutrients.forEach(nutrition => {
        nutrition.style.background = "#E82D73";
    });
    cards.forEach(card => {
        card.style.border = "4px solid #E82D73";
    });
    namDrink.style.color = "#E82D73";
    seMore.style.background = "#E82D73";
    nutritionBtn.style.background = "#E82D73";
};
});