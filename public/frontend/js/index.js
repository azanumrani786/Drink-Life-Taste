/*slider */
const sliderImg = [
    {
        category: "Sparkling refresher",
        src: "./frontend/img/sparkling.png",
    },
    {
        category: "Recovery drink",
        src: "./frontend/img/recovery.png",
    },
    {
        category: "Energy drink",
        src: "./frontend/img/energy-drink.png",
    },
];
const recoveryVideoSrc =
    "https://www.youtube.com/embed/vDuji5Q7hug?si=DWmM2-Ktw6oVyqJ3&amp;controls=0";
const sprinklingVideoSrc =
    "https://www.youtube.com/embed/SxNazVxwXfo?si=GaHsyw9FFKVv7Plf&amp;controls=0";
const energyVideoSrc =
    "https://www.youtube.com/embed/gID71CfTJms?si=iUcEH_9KcySWYl2B";
const next = document.querySelector(".next");
const preview = document.querySelector(".preview");
const imageBg = document.querySelector(".water");
const drinkImg = document.querySelector(".drink");
const categoryShow = document.querySelector(".category-show");
const contactUs = document.querySelector(".contact-us");
const titleHero = document.querySelector(".hero-title");
const citrus = document.querySelector(".citrus");
const heroText = document.querySelector(".hero-text");
const titleParagraph = document.querySelector(".title");
const textBelowVideo = document.querySelector(".textBelowVideo");
const video = document.querySelector("#video");
let index = 0;
next.addEventListener("click", () => {
    drinkImg.classList.remove("animate__backInLeft");
    imageBg.classList.remove("animate__backInLeft");
    drinkImg.classList.remove("animate__backInRight");
    imageBg.classList.remove("animate__backInRight");
    void drinkImg.offsetWidth && imageBg.offsetWidth;
    if (index <= 1) {
        index++;
        drinkImg.src = sliderImg[index].src;
        categoryShow.innerText = sliderImg[index].category;
        drinkImg.classList.add("animate__backInRight");
        imageBg.classList.add("animate__backInLeft");
        if (sliderImg[index].category === "Recovery drink") {
            console.log("recovery");
            imageBg.style.filter = "hue-rotate(300deg)";
            categoryShow.style.border = "4px solid #3ab54a";
            categoryShow.style.color = "#3ab54a";
            contactUs.style.background = "#3ab54a";
            titleHero.style.color = "#3ab54a";
            citrus.style.background = "#3ab54a";
            titleHero.innerText = "Refresh Your Body, Recharge Your Strength!";
            heroText.innerText = `Bounce Back Stronger! Enjoy +Recovery in Fruit Punch, Orange Citrus, Strawberry, and Mango`;
            textBelowVideo.innerText =
                'From start to finish, pure energy in motion. Enjoy the taste of life, fueled by precision."';
            video.src = recoveryVideoSrc;
        } else if (sliderImg[index].category === "Energy drink") {
            imageBg.style.filter =
                "hue-rotate(170deg) saturate(2) brightness(1.2)";
            categoryShow.style.border = "4px solid #f36523";
            categoryShow.style.color = "#f36523";
            contactUs.style.background = "#f36523";
            titleHero.style.color = "#f36523";
            citrus.style.background = "#f36523";
            titleHero.innerText =
                " Energy Drink Unleash Your Power, Fuel Your Energy!";
            heroText.innerText =
                " Boost Your Energy, Embrace the Flavor – Strawberry Guava, Fruit Punch, Mango, Orange, Original, and Tropical Punch!";
            titleParagraph.innerText = "Sparkling Blood Orange";
            textBelowVideo.innerText =
                "Replenished and revived, straight from our hands to yours. Enjoy the taste of life, one refreshing recovery at a time.";
            video.src = energyVideoSrc;
        }
    } else {
        index = 0;
        imageBg.style.filter = "filter: hue-rotate(135deg)";
        imageBg.style.border = "#fb004f";
        categoryShow.style.color = "#fb004f";
        drinkImg.src = sliderImg[index].src;
        categoryShow.innerText = sliderImg[index].category;
        drinkImg.classList.add("animate__backInRight");
        imageBg.classList.add("animate__backInLeft");
        contactUs.style.background = "#fb004f";
        titleHero.style.color = "#fb004f";
        citrus.style.background = "#fb004f";
        titleHero.innerText =
            "Sparkling Refresher Fizzy and Fresh, Perfectly Refreshing!";
        heroText.innerText =
            "Now in Pompelmo Grapefruit, Blood Orange, Mandarin Orange, Mango, Pineapple Ginger, Pomegranate Cherry, and Tropical Punch!";
        video.src = sprinklingVideoSrc;
    }
});

preview.addEventListener("click", () => {
    drinkImg.classList.remove("animate__backInRight");
    imageBg.classList.remove("animate__backInRight");
    drinkImg.classList.remove("animate__backInLeft");
    imageBg.classList.remove("animate__backInLeft");
    void drinkImg.offsetWidth && imageBg.offsetWidth;
    if (index >= 1) {
        index--;
        drinkImg.src = sliderImg[index].src;
        categoryShow.innerText = sliderImg[index].category;
        drinkImg.classList.add("animate__backInLeft");
        imageBg.classList.add("animate__backInRight");
        if (sliderImg[index].category === "Recovery drink") {
            console.log("recovery");
            imageBg.style.filter = "hue-rotate(300deg)";
            categoryShow.style.border = "4px solid #3ab54a";
            categoryShow.style.color = "#3ab54a";
            contactUs.style.background = "#3ab54a";
            titleHero.style.color = "#3ab54a";
            citrus.style.background = "#3ab54a";
            titleHero.innerText = "Refresh Your Body, Recharge Your Strength!";
            heroText.innerText = `Sparkling Blood Orange.`;
            textBelowVideo.innerText =
                'From start to finish, pure energy in motion. Enjoy the taste of life, fueled by precision."';
            video.src = recoveryVideoSrc;
        } else if (sliderImg[index].category === "Sparkling refresher") {
            imageBg.style.filter = "hue-rotate(135deg)";
            categoryShow.style.border = "4px solid #fb004f";
            categoryShow.style.color = "#fb004f";
            contactUs.style.background = "#fb004f";
            titleHero.style.color = "#fb004f";
            citrus.style.background = "#fb004f";
            titleHero.innerText =
                "Sparkling Refresher Fizzy and Fresh, Perfectly Refreshing!";
            heroText.innerText =
                "Now in Pompelmo Grapefruit, Blood Orange, Mandarin Orange, Mango, Pineapple Ginger, Pomegranate Cherry, and Tropical Punch!";
            video.src = sprinklingVideoSrc;
        }
    } else {
        index = 2;
        drinkImg.src = sliderImg[index].src;
        categoryShow.innerText = sliderImg[index].category;
        drinkImg.classList.add("animate__backInLeft");
        imageBg.classList.add("animate__backInRight");
        imageBg.style.filter = "hue-rotate(170deg) saturate(2) brightness(1.2)";
        categoryShow.style.border = "4px solid #f36523";
        categoryShow.style.color = "#f36523";
        contactUs.style.background = "#f36523";
        titleHero.style.color = "#f36523";
        citrus.style.background = "#f36523";
        titleHero.innerText = "Unleash Your Power, Fuel Your Energy!";
        heroText.innerText =
            " Boost Your Energy, Embrace the Flavor – Strawberry Guava, Fruit Punch, Mango, Orange, Original, and Tropical Punch!";
        textBelowVideo.innerText =
            "Replenished and revived, straight from our hands to yours. Enjoy the taste of life, one refreshing recovery at a time.";
        video.src = energyVideoSrc;
    }
});
/* end slider */
const openVideo = document.querySelector(".open-video");
const videOverlay = document.querySelector(".video-overlay");
const closeVideo = document.querySelector(".closeVideo");
const body = document.querySelector("body");

openVideo.addEventListener("click", () => {
    videOverlay.classList.add("active");
    videOverlay.classList.add("videoModal");
});

closeVideo.addEventListener("click", () => {
    videOverlay.classList.remove("active");
    videOverlay.classList.remove("videoModal");
});

//const container = document.querySelector('.container-counts');
//const counters = document.querySelectorAll('.count');

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
        }
    }

    incrementCount();
}
document.addEventListener("DOMContentLoaded", () => {
    const containers = document.querySelectorAll(".container-counts");
    let active = false;

    function checkVisibility(container) {
        const containerTop = container.offsetTop;
        const containerHeight = container.offsetHeight;

        if (
            pageYOffset > containerTop - containerHeight - 200 &&
            !container.classList.contains("active")
        ) {
            const counters = container.querySelectorAll(".count");
            counters.forEach((counter) => {
                counter.innerText = 0;
                updateCount(counter);
            });
            container.classList.add("active");
        }
    }

    window.addEventListener("scroll", () => {
        containers.forEach((container) => {
            checkVisibility(container);
        });
    });
});

const btns = document.querySelectorAll(".btn");

btns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        const card = e.target.closest(".card");
        const cardBtns = card.querySelectorAll(".btn");
        cardBtns.forEach((b) => b.classList.remove("active"));
        const button = e.target;
        button.classList.add("active");
        const price = button.getAttribute("data-price");
        const priceElement = card.querySelector(".price");
        priceElement.textContent = `${price}`;
        console.log(typeof price);
        if (price === "32.00" && card.classList.contains("recovery")) {
            card.querySelector("img").src = "./frontend/img/drinks.png";
            console.log(card);
        } else if (price === "34.00" && card.classList.contains("energy")) {
            card.querySelector("img").src = "./frontend/img/drinks.png";
        } else if (price === "30.00" && card.classList.contains("sparkling")) {
            card.querySelector("img").src = "./frontend/img/drinks.png";
        }
        if (price !== "32.00" && card.classList.contains("recovery")) {
            card.querySelector("img").src = "./frontend/img/recovery-nbg.png";
        } else if (price !== "34.00" && card.classList.contains("energy")) {
            card.querySelector("img").src = "./frontend/img/energy-nobg.png";
        } else if (price !== "30.00" && card.classList.contains("sparkling")) {
            card.querySelector("img").src = "./frontend/img/sparkling-nobg.png";
        }
    });
});

/*
const categorySelects = document.querySelectorAll('.category-select');

const categoryProducts = [
    {
        category: "sparkling",
        img: "./frontend/img/sparkling-nobg.png",
    },
    {
        category: "sparkling",
        img: "./frontend/img/sparkling-nobg.png",
    },
    {
        category: "sparkling",
        img: "./frontend/img/sparkling-nobg.png",
    },
    {
        category: "sparkling",
        img: "./frontend/img/sparkling-nobg.png",
    },
    {
        category: "sparkling",
        img: "./frontend/img/sparkling-nobg.png",
    },
    {
        category: "sparkling",
        img: "./frontend/img/sparkling-nobg.png",
    },
    {
        category: "sparkling",
        img: "./frontend/img/sparkling-nobg.png",
    },
    {
        category: "sparkling",
        img: "./frontend/img/sparkling-nobg.png",
    },
    {
        category: "energy",
        img: "./frontend/img/energy-nobg.png",
    },
    {
        category: "energy",
        img: "./frontend/img/energy-nobg.png",
    },
    {
        category: "energy",
        img: "./frontend/img/energy-nobg.png",
    },
    {
        category: "energy",
        img: "./frontend/img/energy-nobg.png",
    },
    {
        category: "energy",
        img: "./frontend/img/energy-nobg.png",
    },
    {
        category: "energy",
        img: "./frontend/img/energy-nobg.png",
    },
    {
        category: "energy",
        img: "./frontend/img/energy-nobg.png",
    },
    {
        category: "energy",
        img: "./frontend/img/energy-nobg.png",
    },
    {
        category: "recovery",
        img: "./frontend/img/recovery-nbg.png",
    },
    {
        category: "recovery",
        img: "./frontend/img/recovery-nbg.png",
    },
    {
        category: "recovery",
        img: "./frontend/img/recovery-nbg.png",
    },
    {
        category: "recovery",
        img: "./frontend/img/recovery-nbg.png",
    },
    {
        category: "recovery",
        img: "./frontend/img/recovery-nbg.png",
    },
    {
        category: "recovery",
        img: "./frontend/img/recovery-nbg.png",
    },
    {
        category: "recovery",
        img: "./frontend/img/recovery-nbg.png",
    },
    {
        category: "recovery",
        img: "./frontend/img/recovery-nbg.png",
    },
];


const swiperWrapper = document.querySelector('.swiper-wrapper');
categorySelects.forEach(categorySelect => {
    categorySelect.addEventListener('click', (e) => {
    swiperWrapper.innerHTML = '';
    const id = e.target.id;
    console.log(id)
     createSlider(id);
    });
});

function createSlider(id) {
    categoryProducts.forEach(categoryProduct => {
        if(categoryProduct.category === id) {
           console.log(categoryProduct.img);
           const card = document.createElement("div");
           card.classList.add('swiper-slide');
           card.innerHTML =   `<div class="slide-card">
           <img src="${categoryProduct.img}" alt="...">
           <div class="bg"></div>
           </div>`;
           if (categoryProduct.category === 'energy') {
            card.querySelector('.bg').style.background = "linear-gradient(to top, #FF7F00, #FFCC66)";
           } else if (categoryProduct.category === 'recovery') {
            card.querySelector('.bg').style.background = " linear-gradient(to bottom, #FF7F00, #66CC33)";
           } else if (categoryProduct.category === "sparkling") {
            card.querySelector('.bg').style.background = "linear-gradient(to bottom, #ebb119, #e8396c)";
           };
           swiperWrapper.append(card);
        };
    });
};
createSlider('energy');

*/

const sliderNutritions = [
    {
        category: "energy",
        src: "./frontend/img/flavor/Energy drink Fruit punch.png",
        calories: "100",
        caffeine: "250",
        cabs: "40",
        fats: "60",
        name: "Energy drink Fruit punch",
        description:
            "Stay sharp and focused with the classic taste of Fruit Punch, an energy drink that combines natural fruit flavors with a potent energy blend. Ideal for maintaining energy and concentration throughout the day.",
        belowDescription:
            "Fruit Blend: A mix of various fruits, this blend provides essential vitamins and antioxidants, helping to support overall health while delivering a refreshing taste.",
    },
    {
        category: "energy",
        src: "./frontend/img/flavor/Energy drink mango.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Energy drink mango",
        description:
            "Boost your energy with the tropical goodness of Mango. This drink combines natural mango flavor with essential vitamins and caffeine for a sustained energy boost.",
        belowDescription:
            "Mango: Packed with Vitamin A, C, and fiber, mangoes support skin health, immune function, and digestion. The natural sweetness also makes for a delicious energy boost.",
    },
    {
        category: "energy",
        src: "./frontend/img/flavor/Energy drink orange.png",
        calories: "400",
        caffeine: "350",
        cabs: "200",
        fats: "100",
        name: "Energy drink orange",
        description:
            "Brighten your day with the zesty flavor of Orange, an energy drink that combines citrus goodness with natural caffeine and B-vitamins for a powerful pick-me-up.",
        belowDescription:
            "Orange: High in Vitamin C, oranges support immune health and provide a natural source of energy. The citrus flavor is both refreshing and revitalizing.",
    },
    {
        category: "energy",
        src: "./frontend/img/flavor/Energy drink original.png",
        calories: "400",
        caffeine: "350",
        cabs: "200",
        fats: "100",
        name: "Energy drink original",
        description:
            "The classic choice for sustained energy, LifeTaste Energy Drink Original delivers a reliable boost with natural caffeine, taurine, and essential vitamins.",
        belowDescription:
            "Caffeine: A natural stimulant that enhances focus and reduces fatigue.Taurine: Supports neurological development and helps regulate water and mineral levels in the blood, contributing to better physical performance.",
    },
    {
        category: "energy",
        src: "./frontend/img/flavor/Energy drink strawberry g.png",
        calories: "400",
        caffeine: "350",
        cabs: "200",
        fats: "100",
        name: "Energy drink strawberry",
        description:
            "Power through your day with the tropical sweetness of Strawberry Guava, packed with natural energy boosters and essential B-vitamins. This energizing drink provides a clean lift without the crash.",
        belowDescription:
            "Strawberry: Rich in Vitamin C and antioxidants, strawberries support skin health and boost immunity. Guava: High in dietary fiber and Vitamin C, guava supports digestion and immune function while adding a tropical flair.",
    },
    {
        category: "energy",
        src: "./frontend/img/flavor/Energy drink tropical punch.png",
        calories: "400",
        caffeine: "350",
        cabs: "200",
        fats: "100",
        name: "Energy drink tropical punch",
        description:
            "Energize with the exotic flavors of Tropical Punch. This drink blends tropical fruits with a potent energy formula to keep you going strong all day.",
        belowDescription:
            "Tropical Fruits: A blend of nutrient-rich fruits provides essential vitamins, antioxidants, and natural sugars to support energy levels and overall health.",
    },
    {
        category: "recovery",
        src: "./frontend/img/flavor/Recovery Drink fruit punch.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Recovery Drink fruit punch",
        description:
            "Recharge and recover with the refreshing taste of Fruit Punch, packed with electrolytes and essential vitamins to help your body bounce back after intense activity.",
        belowDescription:
            "Electrolytes: Help restore hydration and balance essential minerals in the body after sweating.Vitamins C & E: Antioxidants that support immune function and reduce oxidative stress, aiding in faster recovery.",
    },
    {
        category: "recovery",
        src: "./frontend/img/flavor/Recovery Drink mango.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Recovery Drink mango",
        description:
            "Restore your energy with the tropical flavor of Mango, a recovery drink packed with electrolytes and vitamins to help you bounce back quickly after a workout.",
        belowDescription:
            "Mango: High in Vitamins A and C, mangoes support immune function and skin health, while their natural sweetness makes recovery enjoyable.",
    },
    {
        category: "recovery",
        src: "./frontend/img/flavor/Recovery Drink orange.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Recovery Drink orange",
        description:
            "Refresh and restore with Orange Citrus, a recovery drink that combines the revitalizing taste of citrus with key electrolytes and vitamins for optimal post-exercise recovery.",
        belowDescription:
            "Electrolytes: Essential for rehydration and muscle function, helping to prevent cramps and fatigue.Citrus Fruits: High in Vitamin C, which supports immune health and aids in the repair of body tissues.",
    },
    {
        category: "recovery",
        src: "frontend/img/flavor/Recovery Drink strwaberry.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Recovery Drink strwaberry",
        description:
            "Rehydrate and replenish with Strawberry, a sweet and satisfying recovery drink that delivers essential nutrients to help your body recover and recharge.",
        belowDescription:
            "Strawberry: Rich in Vitamin C and antioxidants, strawberries help reduce inflammation and promote faster recovery after exercise.",
    },
    {
        category: "sparkling",
        src: "./frontend/img/flavor/Sparkling blood orange.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Sparkling blood orange",
        description:
            "Refreshingly light with just a few calories per can, Sparkling Blood Orange is the perfect way to stay hydrated and invigorated without added sugars. Infused with natural blood orange essence, this drink offers a zesty flavor with the added benefit of Vitamin C.",
        belowDescription:
            "Blood Orange: Rich in antioxidants like Vitamin C, blood oranges support your immune system while delivering a bright, tangy taste. These citrus fruits also contain anthocyanins, known for their anti-inflammatory properties.",
    },
    {
        category: "sparkling",
        src: "./frontend/img/flavor/Sparkling cherry.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Sparkling Tropical Punch",
        description:
            "Take a tropical escape with Sparkling Tropical Punch, a low-calorie, fruit-infused beverage that delivers a vibrant burst of exotic flavors. Perfect for staying hydrated and refreshed.",
        belowDescription:
            "Tropical Fruits: This blend of exotic fruits is rich in vitamins, minerals, and antioxidants, providing a refreshing way to support overall health and hydration.",
    },
    {
        category: "sparkling",
        src: "./frontend/img/flavor/Sparkling grapefruit.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Sparkling Pompelmo Grapefruit",
        description:
            "Crisp and revitalizing, Sparkling Pompelmo Grapefruit is a low-calorie drink that delivers a refreshing citrus experience. Made with natural grapefruit essence, it’s the perfect way to hydrate and energize.",
        belowDescription:
            "Grapefruit: High in Vitamin C and antioxidants, grapefruit helps boost immunity and supports weight management. Its natural tartness is balanced by hydrating properties that keep you feeling refreshed.",
    },
    {
        category: "sparkling",
        src: "./frontend/img/flavor/Sparkling mandarin orange.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Sparkling mandarin orange",
        description:
            "Sparkling Mandarin Orange is your go-to for a low-calorie, naturally sweetened drink that revitalizes with every sip. Packed with the natural flavor of mandarin oranges, it offers a refreshing experience that’s both delicious and hydrating.",
        belowDescription:
            "Mandarin Orange: A source of Vitamin C and dietary fiber, mandarin oranges help boost immunity and support digestion. The natural sweetness of mandarins also provides a satisfying flavor without the need for added sugars.",
    },
    {
        category: "sparkling",
        src: "./frontend/img/flavor/Sparkling mango.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Sparkling mango",
        description:
            "Indulge in the tropical taste of Sparkling Mango, a low-calorie refreshment that keeps you feeling light and energized. Made with natural mango extract, this drink offers a fruity escape without any guilt.",
        belowDescription:
            "Mango: Bursting with Vitamins A and C, mangoes support eye health and immune function. The natural sweetness of mangoes provides a satisfying flavor while being rich in dietary fiber.",
    },
    {
        category: "sparkling",
        src: "./frontend/img/flavor/Sparkling pineapple ginger.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Sparkling pineapple ginger",
        description:
            "Experience the unique blend of sweet and spicy with Sparkling Pineapple Ginger. This low-calorie beverage combines the refreshing taste of pineapple with the invigorating kick of ginger, perfect for a revitalizing sip.",
        belowDescription:
            "Pineapple: Packed with Vitamin C and bromelain, pineapple aids in digestion and supports immune health.Ginger: Known for its anti-inflammatory and digestive benefits, ginger adds a spicy twist while helping to soothe the stomach.",
    },
    {
        category: "sparkling",
        src: "./frontend/img/flavor/Sparkling strawberry.png",
        calories: "200",
        caffeine: "350",
        cabs: "100",
        fats: "50",
        name: "Sparkling Pomegranate Cherry",
        description:
            "Sparkling Pomegranate Cherry offers a perfect balance of tart and sweet in a low-calorie drink that’s full of flavor. With natural pomegranate and cherry extracts, this beverage is both refreshing and rich in antioxidants.",
        belowDescription:
            "Pomegranate: A powerhouse of antioxidants, pomegranates help combat oxidative stress and support heart health.Cherry: Rich in vitamins and anti-inflammatory compounds, cherries support joint health and promote better sleep.",
    },
];

let indexNutrition = 0;

const nextNutrition = document.querySelector(".next-nutrition");
const prevNutrition = document.querySelector(".prev-nutrition");
const drinkNutrition = document.querySelector(".drink-nutrition");
const calories = document.querySelector(".calories");
const caffeine = document.querySelector(".caffeine");
const cabs = document.querySelector(".cabs");
const fats = document.querySelector(".fats");
const nameDrink = document.querySelector(".name-drink");
const nutrients = document.querySelectorAll(".nutrient");
const cards = document
    .querySelector(".container-nutrition")
    .querySelectorAll(".card");
const namDrink = document.querySelector(".name-drink");
const seMore = document.querySelector(".see");
const nutritionBtn = document.querySelector("#nutrition");
const description = document.querySelector(".description");
const belowDescription = document.querySelector(".belowDescription");
const count = document.querySelector(".figure");

nextNutrition.addEventListener("click", () => {
    drinkNutrition.classList.remove("animate__backInLeft");
    drinkNutrition.classList.remove("animate__backInRight");
    void drinkNutrition.offsetWidth && waterBg.offsetWidth;
    if (indexNutrition <= 15) {
        indexNutrition++;
        console.log(indexNutrition);
        drinkNutrition.src = sliderNutritions[indexNutrition].src;
        nameDrink.innerText = sliderNutritions[indexNutrition].name;
        calories.setAttribute(
            "data-count",
            sliderNutritions[indexNutrition].calories
        );
        caffeine.setAttribute(
            "data-count",
            sliderNutritions[indexNutrition].caffeine
        );
        cabs.setAttribute("data-count", sliderNutritions[indexNutrition].cabs);
        fats.setAttribute("data-count", sliderNutritions[indexNutrition].fats);
        description.innerText = sliderNutritions[indexNutrition].description;
        belowDescription.innerText =
            sliderNutritions[indexNutrition].belowDescription;
        const counters = document.querySelectorAll(".count");
        counters.forEach((counter) => {
            counter.innerText = 0;
            updateCount(counter);
        });
        drinkNutrition.classList.add("animate__backInLeft");
        if (sliderNutritions[indexNutrition].category === "recovery") {
            console.log("recovery");
            nutrients.forEach((nutrition) => {
                nutrition.style.background = "#009C4C";
                console.log("cont");

                description.innerText =
                    sliderNutritions[indexNutrition].description;
                belowDescription.innerText =
                    sliderNutritions[indexNutrition].belowDescription;
            });
            cards.forEach((card) => {
                card.style.border = "4px solid #009C4C";
            });
            count.forEach((count) => {
                console.log(count);
                count.style.color = "#009C4C";
            });
            namDrink.style.color = "#009C4C";
            seMore.style.background = "#009C4C";
            nutritionBtn.style.background = "#009C4C";
        } else if (sliderNutritions[indexNutrition].category === "energy") {
            nutrients.forEach((nutrition) => {
                nutrition.style.background = "#F26522";
                nutritionBtn.style.background = "#F26522";
                description.innerText =
                    sliderNutritions[indexNutrition].description;
                belowDescription.innerText =
                    sliderNutritions[indexNutrition].belowDescription;
            });
            cards.forEach((card) => {
                card.style.border = "4px solid #F26522";
            });
            count.forEach((count) => {
                console.log(count);
                count.style.color = "#F26522";
            });
            namDrink.style.color = "#F26522";
            seMore.style.background = "#F26522";
        } else if (sliderNutritions[indexNutrition].category === "sparkling") {
            nutrients.forEach((nutrition) => {
                nutrition.style.background = "#E82D73";
                count.style.color = "#E82D73";
                description.innerText =
                    sliderNutritions[indexNutrition].description;
                belowDescription.innerText =
                    sliderNutritions[indexNutrition].belowDescription;
            });
            cards.forEach((card) => {
                card.style.border = "4px solid #E82D73";
            });
            count.forEach((count) => {
                console.log(count);
                count.style.color = "#E82D73";
            });
            namDrink.style.color = "#E82D73";
            seMore.style.background = "#E82D73";
            nutritionBtn.style.background = "#E82D73";
        }
    } else {
        indexNutrition = 0;
        drinkNutrition.src = sliderNutritions[indexNutrition].src;
        nameDrink.innerText = sliderNutritions[indexNutrition].name;
        calories.setAttribute(
            "data-count",
            sliderNutritions[indexNutrition].calories
        );
        caffeine.setAttribute(
            "data-count",
            sliderNutritions[indexNutrition].caffeine
        );
        cabs.setAttribute("data-count", sliderNutritions[indexNutrition].cabs);
        fats.setAttribute("data-count", sliderNutritions[indexNutrition].fats);
        const counters = document.querySelectorAll(".count");
        counters.forEach((counter) => {
            counter.innerText = 0;
            updateCount(counter);
        });
        drinkNutrition.classList.add("animate__backInRight");
        nutrients.forEach((nutrition) => {
            nutrition.style.background = "#F26522";
            description.innerText =
                sliderNutritions[indexNutrition].description;
            belowDescription.innerText =
                sliderNutritions[indexNutrition].belowDescription;
        });
        cards.forEach((card) => {
            card.style.border = "4px solid #F26522";
        });
        namDrink.style.color = "#F26522";
        seMore.style.background = "#F26522";
        nutritionBtn.style.background = "#F26522";
    }
});

prevNutrition.addEventListener("click", () => {
    drinkNutrition.classList.remove("animate__backInRight");
    drinkNutrition.classList.remove("animate__backInLeft");
    void drinkNutrition.offsetWidth && waterBg.offsetWidth;
    if (indexNutrition >= 1) {
        indexNutrition--;
        console.log(indexNutrition);
        drinkNutrition.src = sliderNutritions[indexNutrition].src;
        nameDrink.innerText = sliderNutritions[indexNutrition].name;
        calories.setAttribute(
            "data-count",
            sliderNutritions[indexNutrition].calories
        );
        caffeine.setAttribute(
            "data-count",
            sliderNutritions[indexNutrition].caffeine
        );
        cabs.setAttribute("data-count", sliderNutritions[indexNutrition].cabs);
        fats.setAttribute("data-count", sliderNutritions[indexNutrition].fats);
        description.innerText = sliderNutritions[indexNutrition].description;
        belowDescription.innerText =
            sliderNutritions[indexNutrition].belowDescription;
        const counters = document.querySelectorAll(".count");
        counters.forEach((counter) => {
            counter.innerText = 0;
            updateCount(counter);
        });
        drinkNutrition.classList.add("animate__backInRight");
        if (sliderNutritions[indexNutrition].category === "recovery") {
            nutrients.forEach((nutrition) => {
                nutrition.style.background = "#009C4C";
                description.innerText =
                    sliderNutritions[indexNutrition].description;
                belowDescription.innerText =
                    sliderNutritions[indexNutrition].belowDescription;
            });
            cards.forEach((card) => {
                card.style.border = "4px solid #009C4C";
            });
            count.forEach((count) => {
                console.log(count);
                count.style.color = "#009C4C";
            });
            namDrink.style.color = "#009C4C";
            seMore.style.background = "#009C4C";
            nutritionBtn.style.background = "#009C4C";
            console.log("recovery");
        } else if (sliderNutritions[indexNutrition].category === "sparkling") {
            nutrients.forEach((nutrition) => {
                nutrition.style.background = "#E82D73";
                description.innerText =
                    sliderNutritions[indexNutrition].description;
                belowDescription.innerText =
                    sliderNutritions[indexNutrition].belowDescription;
            });
            cards.forEach((card) => {
                card.style.border = "4px solid #E82D73";
            });
            console.log(count);
            count.forEach((count) => {
                console.log(count);
                count.style.color = "#E82D73";
            });
            namDrink.style.color = "#E82D73";
            seMore.style.background = "#E82D73";
            nutritionBtn.style.background = "#E82D73";
        } else if (sliderNutritions[indexNutrition].category === "energy") {
            nutrients.forEach((nutrition) => {
                nutrition.style.background = "#F26522";
                description.innerText =
                    sliderNutritions[indexNutrition].description;
                belowDescription.innerText =
                    sliderNutritions[indexNutrition].belowDescription;
            });
            cards.forEach((card) => {
                card.style.border = "4px solid #F26522";
            });
            count.forEach((count) => {
                console.log(count);
                count.style.color = "#F26522";
            });
            namDrink.style.color = "#F26522";
            seMore.style.background = "#F26522";
            nutritionBtn.style.background = "#F26522";
        }
    } else {
        indexNutrition = 16;
        console.log(sliderNutritions[indexNutrition].name);
        drinkNutrition.src = sliderNutritions[indexNutrition].src;
        nameDrink.innerText = sliderNutritions[indexNutrition].name;
        calories.setAttribute(
            "data-count",
            sliderNutritions[indexNutrition].calories
        );
        caffeine.setAttribute(
            "data-count",
            sliderNutritions[indexNutrition].caffeine
        );
        cabs.setAttribute("data-count", sliderNutritions[indexNutrition].cabs);
        fats.setAttribute("data-count", sliderNutritions[indexNutrition].fats);
        description.innerText = sliderNutritions[indexNutrition].description;
        belowDescription.innerText =
            sliderNutritions[indexNutrition].belowDescription;
        const counters = document.querySelectorAll(".count");
        counters.forEach((counter) => {
            counter.innerText = 0;
            updateCount(counter);
        });
        drinkNutrition.classList.add("animate__backInRight");
        nutrients.forEach((nutrition) => {
            nutrition.style.background = "#E82D73";
        });
        cards.forEach((card) => {
            card.style.border = "4px solid #E82D73";
        });
        namDrink.style.color = "#E82D73";
        seMore.style.background = "#E82D73";
        nutritionBtn.style.background = "#E82D73";
    }
});

//translate
const translations = {
    "Unleash Your Power Fuel Your Energy": {
        fr: "Libérez votre puissance, alimentez votre énergie",
    },
    "contact us": {
        fr: "Contactez-nous",
    },
    "Citrus Blast Flavor": {
        fr: "Saveur Citrus Blast",
    },
    "Stores Around The World": {
        fr: "Magasins dans le monde entier",
    },
    "Satisfied Customer": {
        fr: "Client satisfait",
    },
    "Cooperation With Country": {
        fr: "Coopération avec les pays",
    },
    "enjoy the taste of life": {
        fr: "Savourez le goût de la vie",
    },
    "about us": {
        fr: "environ",
    },
    "Unleash your power, fuel your energ": {
        fr: "Libérez votre puissance, alimentez votre énergie",
    },
    "Unleash your power, fuel your energyUn leash your power,fuel your energyUnleash your power,fuel your energy":
        {
            fr: "Libérez votre puissance, alimentez votre énergieLaissez libre cours à votre puissance, alimentez votre énergieLibérez votre puissance, alimentez votre énergie",
        },
    "Unleash your power": {
        fr: "Libérez votre puissance",
    },
    "Unleash your power, fuel your energyUn": {
        fr: "Libérez votre puissance, alimentez votre énergieUn",
    },
    "learn more": {
        fr: "Pour en savoir plus",
    },
    "sugar per can": {
        fr: "sucre par boîte",
    },
    "glutin free": {
        fr: "sans glutine",
    },
    "fat free": {
        fr: "Sans gras",
    },
    sparkling: {
        fr: "boisson pétillante",
    },
    energy: {
        fr: "boisson énergisante",
    },
    recovery: {
        fr: "boisson de récupération",
    },
    "view all product": {
        fr: "Voir tous les produits",
    },
    variant: {
        fr: "variante",
    },
    "More flavor, more power": {
        fr: "Plus de saveur, plus de puissance",
    },
    "more variant": {
        fr: "Plus de variantes",
    },
    nutrition: {
        fr: "nutrition",
    },
    "Citrus blast flavor": {
        fr: "Saveur d’explosion d’agrumes",
    },
    calories: {
        fr: "calories",
    },
    caffeine: {
        fr: "caféine",
    },
    cabs: {
        fr: "Taxis",
    },
    fats: {
        fr: "corps gras",
    },
    "see more nutrition": {
        fr: "Voir plus Nutrition",
    },
    "our client": {
        fr: "Notre client",
    },
    "Trust by Our clients around the world": {
        fr: "La confiance de nos clients dans le monde entier",
    },
    "see more": {
        fr: "Voir plus",
    },
    product: {
        fr: "produit",
    },
    "Which flavor do you like?": {
        fr: "Quelle saveur aimez-vous ?",
    },
    can: {
        fr: "1 pouvoir",
    },
    pack: {
        fr: "1 emballer",
    },
    "go shop": {
        fr: "boutique",
    },
    "can 1": {
        fr: "1 pouvoir",
    },
    "pack 1": {
        fr: "1 emballer",
    },
    "go shop 1": {
        fr: "boutique",
    },
    "can 2": {
        fr: "1 pouvoir",
    },
    "pack 2": {
        fr: "1 emballer",
    },
    "go shop 2": {
        fr: "boutique",
    },
    "more product": {
        fr: "Plus de produit",
    },
    Testimonial: {
        fr: "Attestation",
    },
    "What our client said": {
        fr: "Ce que notre client a dit",
    },
    discount: {
        fr: "Rabais",
    },
    "Get 10% Off This Month": {
        fr: "Obtenez 10% de réduction ce mois-ci",
    },
    "go shop 3": {
        fr: "boutique",
    },
    "Our Latest news": {
        fr: "Nos dernières actualités",
    },
    "more blog": {
        fr: "plus de blog",
    },
    news: {
        fr: "nouvelles",
    },
    "news 1": {
        fr: "nouvelles",
    },
    "news 2": {
        fr: "nouvelles",
    },
    "Positive Consumer Feedback Drives…": {
        fr: "Les retours positifs des consommateurs...",
    },
    "Energy Drink Industry Thrives…": {
        fr: "L’industrie des boissons énergisantes prospère...",
    },
    "Revamped Energy Drink Formulas…": {
        fr: "Des formules de boissons énergisantes revisitées...",
    },
    "read more": {
        fr: "Lire la suite",
    },
    "read more 1": {
        fr: "Lire la suite",
    },
    "read more 2": {
        fr: "Lire la suite",
    },
    "Get In Touch With Us": {
        fr: "Contactez-nous",
    },
    "Leave a Message": {
        fr: "Laissez un message.",
    },
    "send message": {
        fr: "Envoyer un message",
    },
    "subscribe  for our monthly Newsletter": {
        fr: "abonnez-vous à notre newsletter mensuelle",
    },
    send: {
        fr: "Envoyer",
    },
    "Register / Login": {
        fr: "S’inscrire / Se connecter",
    },
    "our products": {
        fr: "Nos produits",
    },
    "LifeTaste Fitness": {
        fr: "LifeTaste Aptitude",
    },
    "Store Locator": {
        fr: "Localisateur de magasin",
    },
    Ambassadors: {
        fr: "Ambassadrices",
    },
    "my account": {
        fr: "Mon compte",
    },
    "About us": {
        fr: `Environ <i class="fas fa-angle-down"></i>`,
    },
    "contact us": {
        fr: "Contactez-nous",
    },
    events: {
        fr: "épreuves",
    },
    "about LifeTaste": {
        fr: "Environ LifeTaste",
    },
    "Quick links": {
        fr: "Liens rapides",
    },
    "Our client": {
        fr: "Notre Client",
    },
    Contact: {
        fr: "Contact",
    },
    Home: {
        fr: "Accueil",
    },
    "About Us": {
        fr: "À propos de nous",
    },
    Product: {
        fr: "Produit",
    },
    Pages: {
        fr: "Pages",
    },
    "Contact Us": {
        fr: "Contactez-nous",
    },
};

function changeText(elementId, translationKey, lang) {
    const element = document.getElementById(elementId);
    if (
        element &&
        translations[translationKey] &&
        translations[translationKey][lang]
    ) {
        element.innerHTML = translations[translationKey][lang];
    } else {
        console.warn(
            `Element with ID '${elementId}' not found or translation missing for key '${translationKey}' in language '${lang}'`
        );
    }
}

function changeLanguage(lang) {
    if (lang === "en") {
        window.location.reload();
    } else {
        for (const [elementId, translation] of Object.entries(translations)) {
            changeText(elementId, elementId, lang);
        }
    }
}

document.addEventListener("DOMContentLoaded", () => {
    const languageSelector = document.querySelector(".languagebtn");
    const languageMenu = document.getElementById("language");
    languageSelector.addEventListener("click", () => {
        languageMenu.style.display =
            languageMenu.style.display === "block" ? "none" : "block";
    });

    document.querySelectorAll(".language li").forEach((item) => {
        item.addEventListener("click", () => {
            const selectedLang = item.getAttribute("data-lang");
            changeLanguage(selectedLang);
            languageMenu.style.display = "none";
            languageSelector.innerHTML = item.innerHTML;
        });
    });
});

const categorySelects = document.querySelectorAll(".category-select");

const categoryProducts = [
    {
        id: 16,
        category: "sparkling",
        img: "./frontend/img/sparkling/one.png",
        name: "Sprinkling Mandarin Orange",
        price: 2.99,
    },
    {
        id: 17,
        category: "sparkling",
        img: "./frontend/img/sparkling/two.png",
        name: "Sprinkling Manage",
        price: 3.49,
    },
    {
        id: 18,
        category: "sparkling",
        img: "./frontend/img/sparkling/three.png",
        name: "Sprinkling Pineapple Ginger",
        price: 2.99,
    },
    {
        id: 19,
        category: "sparkling",
        img: "./frontend/img/sparkling/four.png",
        name: "Sprinkling Topical Punch",
        price: 3.49,
    },
    {
        id: 20,
        category: "sparkling",
        img: "./frontend/img/sparkling/five.png",
        name: "Sprinkling Blood Orange",
        price: 2.99,
    },
    {
        id: 21,
        category: "sparkling",
        img: "./frontend/img/sparkling/six.png",
        name: "Sprinkling Pomegranate Cherry",
        price: 3.49,
    },
    {
        id: 22,
        category: "sparkling",
        img: "./frontend/img/sparkling/seven.png",
        name: "Sprinkling Pompelum Grapefruit",
        price: 2.99,
    },
    {
        id: 23,
        category: "recovery",
        img: "./frontend/img/recovery/four.png",
        name: "Recovery Strawberry",
        price: 3.99,
    },
    {
        id: 24,
        category: "recovery",
        img: "./frontend/img/recovery/three.png",
        name: "Recovery Orange",
        price: 3.49,
    },
    {
        id: 25,
        category: "recovery",
        img: "./frontend/img/recovery/two.png",
        name: "Recovery Mango",
        price: 3.99,
    },
    {
        id: 26,
        category: "recovery",
        img: "./frontend/img/recovery/one.png",
        name: "Recovery Fruit Punch",
        price: 3.49,
    },
    {
        id: 27,
        category: "energy",
        img: "frontend/img/energy/two.png",
        name: "Energy Mango",
        price: 4.99,
    },
    {
        id: 28,
        category: "energy",
        img: "frontend/img/energy/one.png",
        name: "Energy Topical Punch",
        price: 4.49,
    },
    {
        id: 29,
        category: "energy",
        img: "frontend/img/energy/three.png",
        name: "Energy Orange",
        price: 4.99,
    },
    {
        id: 30,
        category: "energy",
        img: "frontend/img/energy/four.png",
        name: "Energy Original",
        price: 4.49,
    },
    {
        id: 31,
        category: "energy",
        img: "frontend/img/energy/five.png",
        name: "Energy Fruit Punch",
        price: 4.99,
    },
    {
        id: 32,
        category: "energy",
        img: "frontend/img/energy/six.png",
        name: "Energy Strawberry Guava",
        price: 4.49,
    },
];

const swiperWrapper = document.querySelector(".swiper-wrapper");

const gradients = [
    "linear-gradient(to top, #ffffeb, #fff77d, #ffffeb)", // Yellow
    "linear-gradient(to top, #deffce, #abff7f, #deffce)", // Green
    "linear-gradient(to top, #ffebce, #ffc77e, #ffebce)", // Orange
    "linear-gradient(to top, #ffe4e4, #ff8082, #ffe4e4)", // Hot Pink
];

const colors = [
    "#008263", // Green
    "#FA5903", // Orange
];

categorySelects.forEach((categorySelect) => {
    categorySelect.addEventListener("click", (e) => {
        swiperWrapper.innerHTML = "";
        const id = e.target.id;
        console.log(id);
        createSlider(id);
    });
});

function createSlider(id) {
    let gradientIndex = 0;
    let colorIndex = 0;

    categoryProducts.forEach((categoryProduct) => {
        if (categoryProduct.category === id) {
            const card = document.createElement("div");
            card.classList.add("swiper-slide");

            card.style.background = gradients[gradientIndex];
            card.innerHTML = `
                <div class="slide-card">
                    <img src="${categoryProduct.img}" alt="...">
                    <form class="addTocartForm" data-product-id="${categoryProduct.id}">
                        <h3 style="color: ${colors[colorIndex]};">${categoryProduct.name}</h3>

                        <p style="color: ${colors[colorIndex]};">Pack of 12</p>
                        <div class="flex-quantity">
                            <div class="quantity" style="color: ${colors[colorIndex]}; border: 1px solid ${colors[colorIndex]};">
                                <span class="addQuantity">+</span>
                                <span class='quantitySelect'>1</span>
                                <span class="decreaseQuantity">-</span>
                            </div>
                            <button type="submit" style="background-color: ${colors[colorIndex]};">Add to cart / <span class="price">${categoryProduct.price}</span> </button>
                        </div>
                        <a href="/us/product/detail/${categoryProduct.id}" style="color: ${colors[colorIndex]};">View Details</a>
                    </form>
                </div>`;

            swiperWrapper.append(card);

            card.querySelector(".addQuantity").addEventListener(
                "click",
                (e) => {
                    let quantitySelect =
                        e.target.parentNode.querySelector(".quantitySelect");
                    let newQuantity = Number(quantitySelect.innerText);
                    newQuantity++;
                    quantitySelect.innerText = newQuantity;
                }
            );

            card.querySelector(".decreaseQuantity").addEventListener(
                "click",
                (e) => {
                    let quantitySelect =
                        e.target.parentNode.querySelector(".quantitySelect");
                    let newQuantity = Number(quantitySelect.innerText);
                    if (newQuantity > 1) {
                        newQuantity--;
                    }
                    quantitySelect.innerText = newQuantity;
                }
            );

            card.querySelector(".addTocartForm").addEventListener(
                "submit",
                async (e) => {
                    e.preventDefault();
                    const form = e.target;
                    const quantity = Number(
                        e.target.parentNode.querySelector(".quantitySelect")
                            .innerText
                    );
                    console.log("Quantity:", quantity);
                    const productId = form.getAttribute("data-product-id");
                    console.log("Product ID:", productId);
                    const price = Number(
                        form.querySelector(".price").innerText
                    );
                    console.log("Price:", price);
                    const data = {
                        productId: id,
                        quantity: quantity,
                        price: price,
                    };
                    try {
                        const response = await fetch(
                            "/us/cart/cart/add/" + productId + "/" + quantity,
                            {
                                method: "GET",
                                headers: {
                                    "Content-Type": "application/json",
                                },
                            }
                        );
                    } catch (error) {
                        console.error("Error:", error);
                    }
                }
            );

            gradientIndex = (gradientIndex + 1) % gradients.length;
            colorIndex = (colorIndex + 1) % colors.length;
        }
    });
}

createSlider("energy");

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}

const addQuantitys = document.querySelectorAll(".add");

addQuantitys.forEach((addQuantity) => {
    addQuantity.addEventListener("click", (e) => {
        const quantitySelect =
            addQuantity.parentNode.querySelector(".quantitySelect");
        let quantity = parseInt(quantitySelect.dataset.quantity) || 1;
        quantity++;
        quantitySelect.dataset.quantity = quantity;
        quantitySelect.innerText = quantity;
    });
});

const decreaseQuantitys = document.querySelectorAll(".remove");

decreaseQuantitys.forEach((decreaseQuantity) => {
    decreaseQuantity.addEventListener("click", () => {
        const quantitySelect =
            decreaseQuantity.parentNode.querySelector(".quantitySelect");
        let quantity = parseInt(quantitySelect.dataset.quantity) || 1;

        if (quantity > 1) {
            quantity--;
            quantitySelect.dataset.quantity = quantity;
            quantitySelect.innerText = quantity;
        }
    });
});

const addTocartForms = document.querySelectorAll(".formCart");

addTocartForms.forEach((addTocartForm) => {
    addTocartForm.addEventListener("submit", async (e) => {
        e.preventDefault();

        const quantity =
            Number(
                e.target.parentNode.querySelector(".quantitySelect").dataset
                    .quantity
            ) || 1;
        console.log("Quantity:", quantity);

        const id = e.target.id;
        console.log("Product ID:", id);

        const price = Number(
            e.target.parentNode.querySelector(".price").innerText
        );
        console.log("Price:", price);

        const data = {
            productId: id,
            quantity: quantity,
            price: price,
        };

        try {
            const url = "";
            const response = await fetch(url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                },
                body: JSON.stringify(data),
            });
            if (!response.ok) {
                throw new Error(`Server error: ${response.status}`);
            }
            const result = await response.json();
            console.log("Product added to cart:", result);
        } catch (error) {
            console.error("Failed to add product to cart:", error);
        }
    });
});
