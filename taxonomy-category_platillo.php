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
?>
<section class="bg-[#F6EFEA]">
  <?php
    // Get the current term
    $current_term = get_queried_object();

    // Get child terms of the current term
    $child_terms = get_terms( array(
        'taxonomy'   => 'category_platillo',
        'child_of'   => $current_term->term_id,
        'hide_empty' => true,
    ) );

    $term_counter = 0;

    if ( ! empty( $child_terms ) && ! is_wp_error( $child_terms ) ) :
      foreach ( $child_terms as $child_term ) :
      //$class_name = ( $term_counter % 2 == 0 ) ? 'bg-[#F6EFEA]' : 'bg-white';
      ?>
      <div class="odd:bg-[#F6EFEA] even:bg-white pb-10 last:pb-[96vw] last:md:pb-[48vw] last:lg:pb-[36vw] last:xl:pb-[30vw]">
        <div class="w-11/12 max-w-[1360px] mx-auto pt-10 <?php if ($term_counter == 0) echo "border-t border-black/15"; ?> ">
          <h2 class="text-2xl lg:text-4xl text-center font-bold "><?php echo $child_term->name; ?></h2>
          <?php
            $query = new WP_Query( array(
              'post_type'      => 'platillo',
              'posts_per_page' => -1,
              'tax_query'      => array(
                  array(
                    'taxonomy' => 'category_platillo',
                    'field'    => 'term_id',
                    'terms'    => $child_term->term_id,
                    'include_children' => false,
                  ),
                ),
              )
            );
            
            if ( $query->have_posts() ) : ?>
            <div class="mt-8 grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <?php
              while ( $query->have_posts() ) :
                $query->the_post();
                get_template_part('components/card', 'platillo', array('type'	=> 'menu'));
              endwhile;
              ?>
            </div>
            <?php
              wp_reset_postdata();
              else: ?>
              <p><?php _e( 'No posts found for this term.', 'your-text-domain' ); ?></p>
            <?php endif;
          ?>
        </div>
      </div>
      <?php
      $term_counter++;
      endforeach; ?>
    <?php else : ?>
      <div class="w-11/12 max-w-[1360px] mx-auto pt-10 pb-[96vw] md:pb-[48vw] lg:pb-[36vw] xl:pb-[30vw] border-t border-black/15">
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php
        if ( have_posts() ) :
          while ( have_posts() ) :
            the_post();
            $platilloProps = array(
              'type'	=> 'menu'
            );
            get_template_part('components/card', 'platillo', $platilloProps);
          endwhile;
        endif;
        ?>
        </div>
      </div>
    <?php endif;
  ?>
</section>
<?php
get_footer();
