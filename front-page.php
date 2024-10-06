<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sushi-itto
 */

get_header();
?>
<section>
  <div class="relative">
    <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/bg-hero.jpg' ); ?>" alt="" class="absolute w-full h-full object-cover">
    <div class="relative w-11/12 max-w-screen-lg mx-auto pt-72">
      <div class="grid gap-y-8 md:grid-cols-12 place-items-end">
        <div class="md:col-span-6 space-y-5">
          <h1 class="text-20 lg:text-24 leading-none">#InnovamosTuEntornoDigital</h2>
          <h1 class="text-36 lg:text-64 leading-none uppercase">Soluciones Integrales en tecnologías de la información</h1>
        </div>
        <div class="md:col-span-6 space-y-8">
          <p>Desde la implementación de infraestructuras tecnológicas robustas hasta la integración de sistemas complejos, nuestro compromiso es claro: ser un socio confiable y estratégico en cada paso del camino</p>
          <a href="" class="flex items-center justify-center bg-blue w-40 h-10 uppercase">Contacto</a>
        </div>
      </div>
      <div class="grid grid-cols-12 bg-gradient-to-b from-blue to-green rounded-3xl md:rounded-[100px] py-12 mt-16 md:mt-32">
        <div class="col-span-10 col-start-2 flex flex-col items-center md:flex-row md:justify-between space-y-8 md:space-y-0">
          <div class="flex items-center space-x-4 max-w-[300px]">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
              <path d="M10.666 4.534V3.48C10.666 1.48 11.866 0 14.666 0C17.466 0 18.666 1.48 18.666 3.48V4.534C18.666 6.52 17.466 8 14.666 8C11.88 8 10.666 6.52 10.666 4.534ZM21.334 4.534V3.48C21.334 1.48 22.534 0 25.334 0C28.134 0 29.334 1.48 29.334 3.48V4.534C29.334 6.52 28.134 8 25.334 8C22.546 8 21.334 6.52 21.334 4.534ZM32 14.134V15.2C32 17.2 33.2 18.666 36 18.666C38.8 18.666 40 17.2 40 15.2V14.134C40 12.134 38.786 10.666 36 10.666C33.2 10.666 32 12.134 32 14.134ZM32 24.8V25.866C32 27.866 33.2 29.334 36 29.334C38.8 29.334 40 27.866 40 25.866V24.8C40 22.8 38.786 21.334 36 21.334C33.2 21.334 32 22.8 32 24.8ZM21.334 14.134V15.2C21.334 17.2 22.546 18.666 25.334 18.666C28.134 18.666 29.334 17.2 29.334 15.2V14.134C29.334 12.134 28.134 10.666 25.334 10.666C22.534 10.666 21.334 12.134 21.334 14.134ZM21.334 25.866V24.8C21.334 22.8 22.534 21.334 25.334 21.334C28.134 21.334 29.334 22.8 29.334 24.8V25.866C29.334 27.866 28.134 29.334 25.334 29.334C22.546 29.334 21.334 27.866 21.334 25.866ZM21.334 35.466V36.534C21.334 38.534 22.546 40 25.334 40C28.134 40 29.334 38.534 29.334 36.534V35.466C29.334 33.466 28.134 32 25.334 32C22.534 32 21.334 33.466 21.334 35.466ZM10.666 14.134V15.2C10.666 17.2 11.88 18.666 14.666 18.666C17.466 18.666 18.666 17.2 18.666 15.2V14.134C18.666 12.134 17.466 10.666 14.666 10.666C11.866 10.666 10.666 12.134 10.666 14.134ZM10.666 25.866V24.8C10.666 22.8 11.866 21.334 14.666 21.334C17.466 21.334 18.666 22.8 18.666 24.8V25.866C18.666 27.866 17.466 29.334 14.666 29.334C11.88 29.334 10.666 27.866 10.666 25.866ZM10.666 35.466V36.534C10.666 38.534 11.88 40 14.666 40C17.466 40 18.666 38.534 18.666 36.534V35.466C18.666 33.466 17.466 32 14.666 32C11.866 32 10.666 33.466 10.666 35.466ZM0 15.2V14.134C0 12.134 1.2 10.666 4 10.666C6.8 10.666 8 12.134 8 14.134V15.2C8 17.2 6.8 18.666 4 18.666C1.214 18.666 0 17.2 0 15.2ZM0 24.8V25.866C0 27.866 1.214 29.334 4 29.334C6.8 29.334 8 27.866 8 25.866V24.8C8 22.8 6.8 21.334 4 21.334C1.2 21.334 0 22.8 0 24.8Z" fill="white"/>
            </svg>
            <div class="space-y-2">
              <h2 class="text-24 font-bold leading-none">Stock</h2>
              <p>Disponibilidad de stock sobre producto ofertado.</p>
            </div>
          </div>
          <div class="flex items-center space-x-4 max-w-[300px]">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
              <path d="M3.63629 23.6365C5.6446 23.6365 7.27265 22.0084 7.27265 20.0001C7.27265 17.9918 5.6446 16.3638 3.63629 16.3638C1.62798 16.3638 -7.62939e-05 17.9918 -7.62939e-05 20.0001C-7.62939e-05 22.0084 1.62798 23.6365 3.63629 23.6365Z" fill="white"/>
              <path d="M36.3636 23.6365C38.3719 23.6365 39.9999 22.0084 39.9999 20.0001C39.9999 17.9918 38.3719 16.3638 36.3636 16.3638C34.3553 16.3638 32.7272 17.9918 32.7272 20.0001C32.7272 22.0084 34.3553 23.6365 36.3636 23.6365Z" fill="white"/>
              <path d="M19.9998 40.0003C22.0081 40.0003 23.6362 38.3722 23.6362 36.3639C23.6362 34.3556 22.0081 32.7275 19.9998 32.7275C17.9915 32.7275 16.3634 34.3556 16.3634 36.3639C16.3634 38.3722 17.9915 40.0003 19.9998 40.0003Z" fill="white"/>
              <path d="M19.9999 7.27297C22.0082 7.27297 23.6363 5.64492 23.6363 3.63661C23.6363 1.6283 22.0082 0.000244141 19.9999 0.000244141C17.9916 0.000244141 16.3636 1.6283 16.3636 3.63661C16.3636 5.64492 17.9916 7.27297 19.9999 7.27297Z" fill="white"/>
              <path d="M8.43609 12.0728C10.4444 12.0728 12.0725 10.4447 12.0725 8.43641C12.0725 6.4281 10.4444 4.80005 8.43609 4.80005C6.42778 4.80005 4.79973 6.4281 4.79973 8.43641C4.79973 10.4447 6.42778 12.0728 8.43609 12.0728Z" fill="white"/>
              <path d="M31.5638 35.2005C33.5721 35.2005 35.2001 33.5724 35.2001 31.5641C35.2001 29.5558 33.5721 27.9277 31.5638 27.9277C29.5555 27.9277 27.9274 29.5558 27.9274 31.5641C27.9274 33.5724 29.5555 35.2005 31.5638 35.2005Z" fill="white"/>
              <path d="M8.43609 35.2005C10.4444 35.2005 12.0725 33.5724 12.0725 31.5641C12.0725 29.5558 10.4444 27.9277 8.43609 27.9277C6.42778 27.9277 4.79973 29.5558 4.79973 31.5641C4.79973 33.5724 6.42778 35.2005 8.43609 35.2005Z" fill="white"/>
              <path d="M31.5638 12.0728C33.5721 12.0728 35.2001 10.4447 35.2001 8.43641C35.2001 6.4281 33.5721 4.80005 31.5638 4.80005C29.5555 4.80005 27.9274 6.4281 27.9274 8.43641C27.9274 10.4447 29.5555 12.0728 31.5638 12.0728Z" fill="white"/>
            </svg>
            <div class="space-y-2">
              <h2 class="text-24 font-bold leading-none">Partners</h2>
              <p>Distribuimos las mejores marcas de TI</p>
            </div>
          </div>
          <div class="flex items-center space-x-4 max-w-[300px]">
            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg" class="shrink-0">
              <path d="M15 7.5C15 4.73875 17.2387 2.5 20 2.5C22.7613 2.5 25 4.73875 25 7.5C25 10.2613 22.7613 12.5 20 12.5C17.2387 12.5 15 10.2613 15 7.5Z" fill="white"/>
              <path d="M15 20C15 17.2387 17.2387 15 20 15C22.7613 15 25 17.2387 25 20C25 22.7613 22.7613 25 20 25C17.2387 25 15 22.7613 15 20Z" fill="white"/>
              <path d="M15 32.5C15 29.7387 17.2387 27.5 20 27.5C22.7613 27.5 25 29.7387 25 32.5C25 35.2613 22.7613 37.5 20 37.5C17.2387 37.5 15 35.2613 15 32.5Z" fill="white"/>
              <path d="M2.5 7.5C2.5 4.73875 4.73875 2.5 7.5 2.5C10.2613 2.5 12.5 4.73875 12.5 7.5C12.5 10.2613 10.2613 12.5 7.5 12.5C4.73875 12.5 2.5 10.2613 2.5 7.5Z" fill="white"/>
              <path d="M2.5 20C2.5 17.2387 4.73875 15 7.5 15C10.2613 15 12.5 17.2387 12.5 20C12.5 22.7613 10.2613 25 7.5 25C4.73875 25 2.5 22.7613 2.5 20Z" fill="white"/>
              <path d="M2.5 32.5C2.5 29.7387 4.73875 27.5 7.5 27.5C10.2613 27.5 12.5 29.7387 12.5 32.5C12.5 35.2613 10.2613 37.5 7.5 37.5C4.73875 37.5 2.5 35.2613 2.5 32.5Z" fill="white"/>
              <path d="M27.5 7.5C27.5 4.73875 29.7387 2.5 32.5 2.5C35.2613 2.5 37.5 4.73875 37.5 7.5C37.5 10.2613 35.2613 12.5 32.5 12.5C29.7387 12.5 27.5 10.2613 27.5 7.5Z" fill="white"/>
              <path d="M37.5 20C37.5 22.7613 35.2613 25 32.5 25C29.7387 25 27.5 22.7613 27.5 20C27.5 17.2387 29.7387 15 32.5 15C35.2613 15 37.5 17.2387 37.5 20Z" fill="white"/>
              <path d="M37.5 32.5C37.5 35.2613 35.2613 37.5 32.5 37.5C29.7387 37.5 27.5 35.2613 27.5 32.5C27.5 29.7387 29.7387 27.5 32.5 27.5C35.2613 27.5 37.5 29.7387 37.5 32.5Z" fill="white"/>
            </svg>
  
            <div class="space-y-2">
              <h2 class="text-24 font-bold leading-none">Portafolio</h2>
              <p>Amplio portafolio de productos y soluciones.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="py-52 space-y-32">
    <?php get_template_part('components/marquee', null, array('title' => 'enfoque')); ?>
    <div class="w-11/12 max-w-screen-lg mx-auto">
      <div class="grid md:grid-cols-12">
        <div class="relative md:col-span-4">
          <h2 class="text-green uppercase md:absolute md:bottom-full md:pb-2">Nosotros</h2>
          <h2 class="text-32 font-semibold leading-none">Innovación constante desde 2020</h2>
        </div>
        <div class="md:col-span-7 md:col-start-6">
          <p>Desde nuestra fundación en 2020, hemos combinado la energía y la innovación de un equipo joven con la experiencia y sabiduría de profesionales que llevan más de una década transformando el sector. Este equilibrio nos permite ofrecer soluciones integrales que no solo responden a las necesidades actuales de nuestros clientes, sino que también anticipan los desafíos futuros.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="py-52">
    <div class="w-11/12 max-w-screen-lg mx-auto">
      <div class="grid md:grid-cols-12">
        <div class="relative md:col-span-4">
          <h2 class="text-green uppercase md:absolute md:bottom-full md:pb-2">Servicios</h2>
          <h2 class="text-32 font-semibold leading-none">Soluciones TIC de Vanguardia</h2>
        </div>
        <div class="md:col-span-7 md:col-start-6">
          <p>Desde nuestra fundación en 2020, hemos combinado la energía y la innovación de un equipo joven con la experiencia y sabiduría de profesionales que llevan más de una década transformando el sector. Este equilibrio nos permite ofrecer soluciones integrales que no solo responden a las necesidades actuales de nuestros clientes, sino que también anticipan los desafíos futuros.</p>
        </div>
      </div>

      <div class="swiper">
        <div class="swiper-wrapper">
          <a class="swiper-slide">
            <div class="space-y-4">
              <?php get_template_part('assets/computo'); ?>
              <span>Cómputo</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();