document.addEventListener('DOMContentLoaded', () => {
    const skillContainer = document.querySelector('.section-4');
    const skillValues = document.querySelectorAll('.valueSkill');

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                skillValues.forEach(span => {
                    const finalValue = parseInt(span.getAttribute('data-value'), 10);
                    let currentValue = 0;
                    const incrementTime = 3500 / finalValue;

                    const incrementValue = () => {
                        currentValue++;
                        span.textContent = currentValue + '%';
                        span.parentNode.style.width = currentValue + '%';

                        if (currentValue < finalValue) {
                            setTimeout(incrementValue, incrementTime);
                        };
                    };

                    incrementValue();
                });

                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.1
    });

    observer.observe(skillContainer);
});

const sliders = [
    {
        src: "/frontend/img/slider_single_1.jpg",
      },
      {
        src: "/frontend/img/slider_single_2.jpg",
      },
      {
        src: "/frontend/img/slider_single_3.jpg"
      }
];


const sliderImg = document.querySelector('.slider-img');
const next = document.querySelector('.next');
const prev = document.querySelector('.prev');

let index = 0;

next.addEventListener('click', () => {
    if(index <= 1) {
       index++;
       sliderImg.src = sliders[index].src;
    } else {
        index = 0;
        sliderImg.src = sliders[index].src;
    };
});

prev.addEventListener('click', () => {
    if(index >= 1){
    index--;
    sliderImg.src = sliders[index].src;
    } else {
        index = 2;
        sliderImg.src = sliders[index].src;
    };
});

const closeVideo = document.querySelector('.closeVideo');
const videoOverlay = document.querySelector('.video-overlay');
const openVideo = document.querySelector('.openVideo');

closeVideo.addEventListener('click', () => {
videoOverlay.classList.remove('active');
});

openVideo.addEventListener('click', () => {
videoOverlay.classList.add('active');
})
