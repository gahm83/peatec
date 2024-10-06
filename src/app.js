import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

//Swiper Hero
const slideServicios = new Swiper('.swiper-servicios', {
  slidesPerView: 4,
  loop: true,
  autoplay: true,
  delay: 2500
});

const marquees = document.querySelectorAll('.marquee-item');
marquees.forEach(marqueeString => {
  const marqueeContainer = marqueeString.parentNode;
  const viewportWidth = window.innerWidth;
  const stringWidth = marqueeString.offsetWidth;
  let repeatCount = Math.floor(viewportWidth / stringWidth);
  if (repeatCount <= 1) {
    repeatCount = Math.floor((viewportWidth * 2) / stringWidth);
    marqueeContainer.classList.remove('twcss-basis-screen');
    marqueeContainer.classList.add('twcss-basis-screen2x');
  }
  for (let i = 1; i < repeatCount; i++) {
    const clone = marqueeString.cloneNode(true);
    marqueeContainer.appendChild(clone);
  }
  const marqueeContainerClone = marqueeContainer.cloneNode(true);
  marqueeContainer.parentNode.appendChild(marqueeContainerClone);
});