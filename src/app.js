import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

//Sliders
const slideServicios = new Swiper('.swiper-servicios', {
  slidesPerView: 4,
  loop: true,
  autoplay: true,
  delay: 2500
});

const slideCasosExito = new Swiper('.swiper-casos-exito', {
  slidesPerView: 3,
  loop: true,
  autoplay: true,
  delay: 2500,
  spaceBetween: 24,
});



const marquees = document.querySelectorAll('.marquee-item');
marquees.forEach(marqueeString => {
  const marqueeContainer = marqueeString.parentNode;
  const viewportWidth = window.innerWidth;
  const stringWidth = marqueeString.offsetWidth;
  let repeatCount = Math.floor(viewportWidth / stringWidth);
  if (repeatCount <= 1) {
    repeatCount = Math.floor((viewportWidth * 2) / stringWidth);
    marqueeContainer.classList.remove('basis-screen');
    marqueeContainer.classList.add('basis-screen2x');
  }
  for (let i = 1; i < repeatCount; i++) {
    const clone = marqueeString.cloneNode(true);
    marqueeContainer.appendChild(clone);
  }
  const marqueeContainerClone = marqueeContainer.cloneNode(true);
  marqueeContainer.parentNode.appendChild(marqueeContainerClone);
});