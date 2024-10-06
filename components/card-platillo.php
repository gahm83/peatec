<?php $aspectRatio = $args['type'] === "recommendation" ? "aspect-[0.65/1]" : "aspect-[0.86/1] md:aspect-[1.64/1]" ?>
<div class="space-y-3 ">
  <figure class="<?= $aspectRatio; ?> w-full bg-neutral-600 rounded-3xl overflow-hidden [&_img]:w-full [&_img]:h-full [&_img]:object-cover">
    <?php the_post_thumbnail('medium');
    if (is_front_page()): ?>
    <div class="hidden lg:flex absolute top-[10px] left-[10px] items-center justify-center">
      <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
        <rect width="32" height="32" rx="16" fill="white"/>
        <circle cx="14.865" cy="14.865" r="6.11505" stroke="#EE3550" stroke-width="1.5"/>
        <line x1="19.686" y1="19.4835" x2="23.6722" y2="23.4697" stroke="#EE3550" stroke-width="1.5"/>
      </svg>
    </div>
    <?php endif; ?>
  </figure>
  <h2 class="text-2xl font-bold"><?php the_title(); ?></h2>
  <div class="text-sm">
    <p><strong>Dentro:</strong> Phasellus posuere lorem commodo turpis congue ultricies.</p>
    <p><strong>Fuera:</strong> Curabitur scelerisque vehicula nisi a molestie. Sed malesuada lobortis porttitor.</p>
  </div>
</div>