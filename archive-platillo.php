<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sushi-itto
 */

get_header();
get_template_part('/components/menu', 'categories');
if ( have_posts() ) : ?>
<section>
  <div class="bg-[#F6EFEA]">
    <div class="w-11/12 max-w-[1360px] mx-auto pt-10 pb-24 border-t border-black/15">
      <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 pb-[96vw] md:pb-[48vw] lg:pb-[36vw] xl:pb-[30vw]">
      <?php
        while ( have_posts() ) :
          the_post();
          get_template_part('components/card', 'platillo', array('type'	=> 'menu'));
        endwhile; ?>
      </div>
    </div>
  </div>
</section>
<?php endif;
get_footer();