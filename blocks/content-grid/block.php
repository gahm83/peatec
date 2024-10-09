<?php
/**
 * Testimonial Block template.
 *
 * @param array $block The block settings and attributes.
 */

// Load values and assign defaults.
$quote             = !empty(get_field( 'quote' )) ? get_field( 'quote' ) : 'Your quote here...';
$marquee_title    = get_field( 'marquee_text' );
$marquee_pos      = get_field( 'marquee_text_position' );
$title            = get_field( 'titulo' );
$subtitle  = get_field( 'subtitulo' );
$content        = get_field( 'contenido' );
?>
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
  <div class="py-24 space-y-16">
    <div class="w-11/12 max-w-screen-lg mx-auto">
      <div class="grid md:grid-cols-12">
        <div class="relative md:col-span-4">
          <h2 class="text-green uppercase md:absolute md:bottom-full md:pb-2">Nosotros</h2>
          <h2 class="text-32 font-semibold leading-none">Innovación constante desde 2020</h2>
        </div>
        <div class="md:col-span-7 md:col-start-6">
          <p>Nos enfocamos en optimizar servicios y entregar productos de calidad a la altura de diferentes verticales de negocio, buscando siempre que nuestros aliados comerciales generen ahorro, confianza y satisfacción en cada uno de los proyectos, servicios y productos que se trabajan en conjunto.</p>
        </div>
      </div>
    </div>
    <?php get_template_part('components/marquee', null, array('title' => 'Innovación')); ?>
  </div>
</section>