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
      src: "/frontend/img/flavor/Energy drink Fruit punch.png",
      calories: '100',
      caffeine: '250',
      cabs: '40',
      fats: '60',
      name: 'Energy drink Fruit punch',
      color: '#f36523'
    },
    {
      category: "energy",
      src: "/frontend/img/flavor/Energy drink mango.png",
      calories: '200',
      caffeine: '350',
      cabs: '100',
      fats: '50',
      name: 'Energy drink mango',
      color: '#f36523'
    },
    {
      category: "energy",
      src: "/frontend/img/flavor/Energy drink orange.png",
      calories: '400',
      caffeine: '350',
      cabs: '200',
      fats: '100',
      name: 'Energy drink orange',
      color: '#f36523'
    },
    {
      category: "energy",
      src: "/frontend/img/flavor/Energy drink original.png",
      calories: '400',
      caffeine: '350',
      cabs: '200',
      fats: '100',
      name: 'Energy drink original',
      color: '#f36523'
    },
    {
        category: "energy",
        src: "/frontend/img/flavor/Energy drink strawberry g.png",
        calories: '400',
        caffeine: '350',
        cabs: '200',
        fats: '100',
        name: 'Energy drink strawberry',
        color: '#f36523'
    },
    {
        category: "energy",
        src: "/frontend/img/flavor/Energy drink tropical punch.png",
        calories: '400',
        caffeine: '350',
        cabs: '200',
        fats: '100',
        name: 'Energy drink tropical punch',
        color: '#f36523'
    },
    {
        category: "recovery",
        src: "/frontend/img/flavor/Recovery Drink fruit punch.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Recovery Drink fruit punch',
        color: 'rgb(0, 156, 76)'
    },
    {
        category: "recovery",
        src: "/frontend/img/flavor/Recovery Drink mango.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Recovery Drink mango',
        color: 'rgb(0, 156, 76)'
    },
    {
        category: "recovery",
        src: "/frontend/img/flavor/Recovery Drink orange.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Recovery Drink orange',
        color: 'rgb(0, 156, 76)'
    },
    {
        category: "recovery",
        src: "/frontend/img/flavor/Recovery Drink strwaberry.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Recovery Drink strwaberry',
        color: 'rgb(0, 156, 76)'
    },
    {
        category: "sparkling",
        src: "/frontend/img/flavor/Sparkling blood orange.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling blood orange',
        color: 'rgb(232, 45, 115)'
    },
    {
        category: "sparkling",
        src: "/frontend/img/flavor/Sparkling cherry.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling cherry',
        color: 'rgb(232, 45, 115)'
    },
    {
        category: "sparkling",
        src: "/frontend/img/flavor/Sparkling grapefruit.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling grapefruit',
        color: 'rgb(232, 45, 115)'
    },
    {
        category: "sparkling",
        src: "/frontend/img/flavor/Sparkling mandarin orange.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling mandarin orange',
        color: 'rgb(232, 45, 115)'
    },
    {
        category: "sparkling",
        src: "/frontend/img/flavor/Sparkling mango.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling mango',
        color: 'rgb(232, 45, 115)'
    },
    {
        category: "sparkling",
        src: "/frontend/img/flavor/Sparkling pineapple ginger.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling pineapple ginger',
        color: 'rgb(232, 45, 115)'
    },
    {
        category: "sparkling",
        src: "/frontend/img/flavor/Sparkling Tropical punch.png",
        calories: '200',
        caffeine: '350',
        cabs: '100',
        fats: '50',
        name: 'Sparkling Tropical punch',
        color: 'rgb(232, 45, 115)'
    },
];

const nutritionSection = document.querySelector('.nutrition-section');

sliderNutritions.forEach(sliderNutrition => {
    console.log(sliderNutrition)
    const container = document.createElement('div');
    container.classList.add('container-nutrition', 'container-counts');
    container.innerHTML = `
       <div class="right" data-aos="fade-up" data-aos-duration="2000">
                    <h4 style="background-color: ${sliderNutrition.color};" id="nutrition">${sliderNutrition.category}</h4>
                    <h2 style="color: ${sliderNutrition.color};" class="name-drink" id="Citrus blast flavor">${sliderNutrition.name}</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus laoreet facilisis lectus, a rutrum lectus lacinia vitae. In auctor aliquam aliquam. Phasellus vel dolor fermentum, placerat dui et, lacinia nibh. Praesent eu dictum tortor. Sed est turpis, pretium et libero aliquam, consectetur laoreet orci. </p>
                    <div class="flex">
                        <div class="card" style="border-color: ${sliderNutrition.color};">
                            <div class="overlay"></div>
                            <span style="background-color: ${sliderNutrition.color};" id="calories" class="nutrient">Calories</span>
                            <p><span class="count calories" data-count="230">0</span> KCAL</p>
                        </div>
                        <div class="card" style="border-color: ${sliderNutrition.color};">
                            <div class="overlay"></div>
                            <span style="background-color: ${sliderNutrition.color};" id="caffeine" class="nutrient">Caffeine</span>
                            <p><span class="count caffeine" data-count="250">0</span> mg</p>
                        </div>
                        <div class="card" style="border-color: ${sliderNutrition.color};">
                            <div class="overlay"></div>
                            <span style="background-color: ${sliderNutrition.color};" id="cabs" class="nutrient">Cabs</span>
                            <p><span class="count cabs" data-count="40">0</span> g</p>
                        </div>
                        <div class="card" style="border-color: ${sliderNutrition.color};">
                            <div class="overlay"></div>
                            <span style="background-color: ${sliderNutrition.color};"  id="fats" class="nutrient">fats</span>
                            <p><span class="count fats" data-count="40">0</span> g</p>
                        </div>
                    </div>
                    <p>*Nullam aliquet felis magna, et pretium sapien consectetur et. Sed efficitur quam in viverra elementum. Aliquam congue lacus in odio euismod, ut commodo nunc tristique.</p>
<!--                    <a style="background-color: ${sliderNutrition.color};" class="see" href="#" id="see more nutrition">view all nutrition</a>-->
                </div>
                <div class="left" data-aos="fade-up" data-aos-duration="2000">
                    <img class="drink-nutrition animate__animated" src="${sliderNutrition.src}" alt="">
                </div>
    `;
    nutritionSection.append(container);
});
