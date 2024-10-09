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
  <div class="aspect-[3/1] max-h-[350px] bg-green w-full">
    
  </div>
</section>

<section>
  <div class="py-24 space-y-16 bg-white text-black">
    <div class="w-11/12 max-w-screen-lg mx-auto">
      <div class="grid md:grid-cols-12">
        <div class="relative md:col-span-4">
          <h2 class="text-green uppercase md:absolute md:bottom-full md:pb-2">Clientes</h2>
          <h2 class="text-32 font-semibold leading-none">Transforma tu experiencia tecnológica</h2>
        </div>
        <div class="md:col-span-7 md:col-start-6 space-y-5">
          <p>¿Necesitas más información sobre nuestras soluciones TIC? Estamos aquí para ayudarte. Nuestro equipo de expertos está disponible para brindarte la asesoría y el soporte que necesitas para llevar tu negocio al siguiente nivel.</p>
        </div>
      </div>
    </div>
    <?php get_template_part('components/marquee', null, array('title' => 'Hablemos')); ?>
  </div>
</section>

<section>
  <div class="py-24 space-y-16">
    <div class="w-11/12 max-w-screen-lg mx-auto">
      <div class="grid md:grid-cols-12 gap-8 place-items-center">
        <div class="md:col-span-5">
          <div class="relative">
            <h4 class="text-green uppercase md:absolute md:bottom-full md:pb-2">¡CONTÁCTANOS!</h4>
            <h2 class="text-32 font-semibold leading-none mb-8">¡Estamos a un clic de distancia!</h2>
            <p>¿Tienes un proyecto en mente o necesitas asesoría en tecnologías de la información y comunicación? Estamos aquí para ofrecerte soluciones a medida.</p>
          </div>
        </div>
        <div class="md:col-span-7">
          <div class="bg-green rounded-xl px-12 py-12">
            <div class="text-center space-y-8">
              <h2 class="text-32 font-bold leading-none">Juntos, haremos que la tecnología trabaje a tu favor.</h2>
              <p>Completa el formulario y uno de nuestros expertos se pondrá en contacto contigo en breve.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();