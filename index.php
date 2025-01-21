<?php 
 get_header();

 ?>
 

 <div class="main-container">
    <?php 
    $args = array('post_type' => 'post');
    $query = new WP_Query($args);
    while ($query->have_posts()) : $query->the_post(); ?>
        <div class="single_post">
        <h1><?php the_title(); ?></h1>
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <p><?php the_author();?></p>
            
            <p><?php echo wp_trim_words(get_the_content(), 20, '...'); ?></p>
            <a href="<?php the_permalink(); ?>" class="read-more">Read More</a>
            <p><?php wp_list_comments();?></p> 
        </div>
    <?php endwhile; wp_reset_postdata(); ?>
</div>


</div>



 
 <main>
     <?php
     if ( have_posts() ) :
         while ( have_posts() ) : the_post();
             get_template_part( 'template-parts/content', get_post_format() );
         endwhile;
 
         the_posts_navigation();
 
     else :
         get_template_part( 'template-parts/content', 'none' );
     endif;
     ?>
 </main>




 

 
  <!-- <div class="products-grid">
     <?php
     // Custom query to get products
     $args = array(
         'post_type' => 'product',
         'posts_per_page' => 12, // Number of products to display
         'paged' => ( get_query_var('paged') ) ? get_query_var('paged') : 1,
     );
 
     $loop = new WP_Query($args);
 
     if ($loop->have_posts()) {
         echo '<div class="products-grid-container">';
         while ($loop->have_posts()) : $loop->the_post();
             wc_get_template_part('content', 'product');
         endwhile;
         echo '</div>';
 
         // Pagination
         echo paginate_links(array(
             'total' => $loop->max_num_pages,
         ));
     } else {
         echo __('No products found');
     }
 
     wp_reset_postdata();
     ?>
 </div>  -->
 



 
 
 


 
 <?php 
 get_footer();
 ?>