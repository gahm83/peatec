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
  <div class="aspect-[3/1] bg-green">
    dddd
  </div>
</section>

<section>
  <div class="py-24 space-y-16">
    <div class="w-11/12 max-w-screen-lg mx-auto">
      <div class="grid md:grid-cols-12">
        <div class="relative md:col-span-4">
          <h2 class="text-green uppercase md:absolute md:bottom-full md:pb-2">Clientes</h2>
          <h2 class="text-32 font-semibold leading-none">Compromiso, excelencia e innovación</h2>
        </div>
        <div class="md:col-span-7 md:col-start-6">
          <p>En nuestra trayectoria, hemos tenido el privilegio de colaborar con diversas empresas, ayudándolas a superar desafíos tecnológicos y alcanzar sus objetivos. Nuestros casos de éxito son testimonio de nuestro compromiso con la excelencia y la innovación en soluciones TIC. </p>
        </div>
      </div>
    </div>
    <?php get_template_part('components/marquee', null, array('title' => 'Confianza')); ?>
  </div>
</section>

<section class="overflow-hidden relative">
  <div class="bg-white before:absolute before:content-[''] before:block before:w-screen before:h-screen before:bg-green before:origin-top-right before:top-1/2 before:right-1/2 before:rotate-45 before:-translate-x-12">
    <div class="w-11/12 max-w-screen-lg mx-auto">
      <div class="grid grid-cols-12">
        <div class="relative md:col-span-4 place-self-center">
          <h4 class="uppercase md:absolute md:bottom-full md:pb-2">Clientes</h4>
          <h2 class="text-32 font-semibold leading-none">Soluciones TIC de Vanguardia</h2>
        </div>
        <div class="md:col-span-6 md:col-start-7 grid grid-cols-3">
          <?php for ($x = 1; $x <= 9; $x++) { ?>
          <figure class="flex items-center justify-center aspect-square">
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/clientes/cliente-0'. $x . '.jpg' ); ?>" alt="" class="w-36" />
          </figure>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="relative bg-gradient-to-r from-[#42A5FE] via-[#344DC8] to-[#276398]">
    <!-- <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/bg-banner.png' ); ?>" alt="" class="absolute w-full h-full object-cover"> -->
    <div class="w-11/12 max-w-screen-lg mx-auto py-24">
      <div class="relative w-8/12 mx-auto flex flex-col items-center space-y-8">
        <h2 class="text-48 lg:text-64 text-center leading-none uppercase">¿Están listos para el éxito?</h2>
        <a href="" class="flex items-center justify-center bg-green w-40 h-10 uppercase">Contacto</a>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="bg-white text-black py-16 space-y-20">
    <?php get_template_part('components/marquee', null, array('title' => 'Casos de éxito')); ?>
    <div class="w-11/12 max-w-screen-lg mx-auto space-y-16">
      <div class="flex items-start justify-between">
        <div class="md:basis-4/12 relative">
          <h2 class="text-green uppercase md:absolute md:bottom-full md:pb-2">Casos de éxito</h2>
          <h2 class="text-32 font-semibold leading-none">La solución TI
          que tu empresa necesita</h2>
        </div>
        <div class="flex space-x-5">
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
      </div>
      <div class="swiper swiper-casos-exito !overflow-visible">
        <div class="swiper-wrapper">
        <?php for ($x = 0; $x <= 10; $x++) { ?>
          <div class="swiper-slide">
            <div class="rounded-3xl bg-light-grey p-5 space-y-6">
              <figure class="rounded-full bg-dark-grey w-28 h-28"></figure>
              <p>Shadow undo object edit link ellipse mask distribute asset. Inspect team strikethrough rectangle asset horizontal pencil undo slice. Clip comment bold.</p>
              <p class="text-18">
                <span class="font-semibold">Gabriela Sánchez</span>, Innovate
              </p>
            </div>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();