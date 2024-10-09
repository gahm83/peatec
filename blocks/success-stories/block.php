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