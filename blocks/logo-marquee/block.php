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