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
    
  </div>
</section>

<section>
  <div class="py-24 space-y-16 bg-white text-black">
    <div class="w-11/12 max-w-screen-lg mx-auto">
      <div class="grid md:grid-cols-12">
        <div class="relative md:col-span-4">
          <h2 class="text-green uppercase md:absolute md:bottom-full md:pb-2">Servicios</h2>
          <h2 class="text-32 font-semibold leading-none">¡Lleva tu negocio 
          al siguiente nivel!</h2>
        </div>
        <div class="md:col-span-7 md:col-start-6 space-y-5">
          <p>Nuestras verticales de negocio te ofrecen una amplia variedad de soluciones y productos.</p>
          <p>Conoce y pregunta por nuestras soluciones en TIC personalizadas. Contáctanos hoy mismo y descubre cómo podemos transformar tu infraestructura tecnológica.</p>
        </div>
      </div>
    </div>
    <?php get_template_part('components/marquee', null, array('title' => 'Innovación')); ?>
  </div>
</section>

<section>
  <div class="py-48">
    <div class="w-11/12 max-w-screen-lg mx-auto">
      <div class="swiper swiper-servicios">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <a class="flex flex-col items-center text-center">
              <?php get_template_part('assets/computo'); ?>
              <span class="block w-36 h-12 text-20 font-bold leading-none mt-2 mb-6">Cómputo</span>
              <span class="block px-6 lg:px-12"> Laptop, Desktop, AIO y Accesorios</span>
            </a>
          </div>
          <div class="swiper-slide">
            <a class="flex flex-col items-center text-center">
              <?php get_template_part('assets/impresion'); ?>
              <span class="block w-36 h-12 text-20 font-bold leading-none mt-2 mb-6">Impresión</span>
              <span class="block px-6 lg:px-12">Láser, MFN, Consumibles y Ploters</span>
            </a>
          </div>
          <div class="swiper-slide">
            <a class="flex flex-col items-center text-center">
              <?php get_template_part('assets/software-licencias'); ?>
              <span class="block w-36 h-12 text-20 font-bold leading-none mt-2 mb-6">Software y Licencias</span>
              <span class="block px-6 lg:px-12">Microsoft, Autodesk, Adobe.</span>
            </a>
          </div>
          <div class="swiper-slide">
            <a class="flex flex-col items-center text-center">
              <?php get_template_part('assets/data-center'); ?>
              <span class="block w-36 h-12 text-20 font-bold leading-none mt-2 mb-6">Datacenter</span>
              <span class="block px-6 lg:px-12">Servidores, Storage, Redes</span>
            </a>
          </div>
          <div class="swiper-slide">
            <a class="flex flex-col items-center text-center">
              <?php get_template_part('assets/seguridad-fisica'); ?>
              <span class="block w-36 h-12 text-20 font-bold leading-none mt-2 mb-6">Seguridad física</span>
              <span class="block px-6 lg:px-12">CCTV, Control de Acceso, Monitoreo</span>
            </a>
          </div>
          <div class="swiper-slide">
            <a class="flex flex-col items-center text-center">
              <?php get_template_part('assets/seguridad-logica'); ?>
              <span class="block w-36 h-12 text-20 font-bold leading-none mt-2 mb-6">Seguridad lógica</span>
              <span class="block px-6 lg:px-12">Firewall, Antivirus, Ciberseguridad</span>
            </a>
          </div>
          <div class="swiper-slide">
            <a class="flex flex-col items-center text-center">
              <?php get_template_part('assets/perifericos'); ?>
              <span class="block w-36 h-12 text-20 font-bold leading-none mt-2 mb-6">Periféricos</span>
              <span class="block px-6 lg:px-12">Cables, Adaptadores, Conectividad</span>
            </a>
          </div>
          <div class="swiper-slide">
            <a class="flex flex-col items-center text-center">
              <?php get_template_part('assets/cableado-estructurado'); ?>
              <span class="block w-36 h-12 text-20 font-bold leading-none mt-2 mb-6">Cableado Estructurado</span>
              <span class="block px-6 lg:px-12">Fibra óptica, UTP, Instalaciones</span>
            </a>
          </div>
          <div class="swiper-slide">
            <a class="flex flex-col items-center text-center">
              <?php get_template_part('assets/consultoria-ti'); ?>
              <span class="block w-36 h-12 text-20 font-bold leading-none mt-2 mb-6">Consultoría TI</span>
              <span class="block px-6 lg:px-12">Desarrollo, Programación, Apps, Migración, Monitoreo, HelpDesk</span>
            </a>
          </div>
          <div class="swiper-slide">
            <a class="flex flex-col items-center text-center">
              <?php get_template_part('assets/virtualizacion'); ?>
              <span class="block w-36 h-12 text-20 font-bold leading-none mt-2 mb-6">Virtualización</span>
              <span class="block px-6 lg:px-12">Sistemas operativos, servicios, Backup</span>
            </a>
          </div>
          <div class="swiper-slide">
            <a class="flex flex-col items-center text-center">
              <?php get_template_part('assets/telefonia'); ?>
              <span class="block w-36 h-12 text-20 font-bold leading-none mt-2 mb-6">Telefonía</span>
              <span class="block px-6 lg:px-12">IP, Análoga, Móvil, Radios</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="bg-white py-16 space-y-12">
    <div class="flex flex-nowrap animate-marquee">
      <div class="flex justify-around shrink-0">
        <div class="marquee-item">
          <div class="flex items-center space-x-8 px-8">
          <?php for ($x = 1; $x <= 14; $x++) { ?>
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/logos/logo-' . str_pad($x, 2, '0', STR_PAD_LEFT) . '.png' ); ?>" alt="" class="shrink-0 w-32 h-auto"/>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="flex flex-nowrap animate-marquee-reverse">
      <div class="flex justify-around shrink-0">
        <div class="marquee-item">
          <div class="flex items-center space-x-8 px-8">
          <?php for ($x = 15; $x <= 25; $x++) { ?>
            <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/logos/logo-' . $x . '.png' ); ?>" alt="" class="shrink-0 w-32 h-auto"/>
          <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();