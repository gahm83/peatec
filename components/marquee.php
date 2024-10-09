
<div class="flex flex-nowrap animate-marquee max-w-full">
  <div class="flex justify-around basis-full shrink-0">
    <div class="marquee-item">
      <div class="flex items-center space-x-8 px-8">
        <div class="text-64 text-green uppercase whitespace-nowrap"><?= $args['title']; ?></div>
        <?php get_template_part('assets/gradient-dots'); ?>
      </div>
    </div>
  </div>
</div>