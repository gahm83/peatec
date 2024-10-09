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