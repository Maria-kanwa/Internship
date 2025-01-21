<?php
/**
 * Template Name: Main Category Page
 */

get_header(); ?>

<div class="container">
    <h1><?php single_cat_title(); ?></h1>
    <p><?php echo category_description(); ?></p>

    <h2>Subcategories</h2>
    <ul>
        <?php
        // Get the current category ID
        $current_cat_id = get_queried_object_id();

        // Fetch subcategories
        $args = array(
            'parent' => $current_cat_id,
            'hide_empty' => true
        );

        $subcategories = get_categories($args);
        
        if ($subcategories) {
            foreach ($subcategories as $subcategory) {
                echo '<li><a href="' . esc_url(get_category_link($subcategory->term_id)) . '">' . esc_html($subcategory->name) . '</a></li>';
            }
        } else {
            echo '<li>No subcategories found.</li>';
        }
        ?>
    </ul>

    <h2>Posts in <?php single_cat_title(); ?></h2>
    <ul>
        <?php
        // Fetch posts in the main category
        $posts_args = array(
            'category' => $current_cat_id,
            'posts_per_page' => -1
        );
        $posts = new WP_Query($posts_args);

        if ($posts->have_posts()) {
            while ($posts->have_posts()) {
                $posts->the_post();
                echo '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
            }
            wp_reset_postdata();
        } else {
            echo '<li>No posts found in this category.</li>';
        }
        ?>
    </ul>
</div>

<?php get_footer(); ?>
