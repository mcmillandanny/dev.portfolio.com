<?php 
         $args = array(
            "post_type" => "portfolio",
            "category_name" => get_field('portfolio_display_category'),
            "posts_per_page" => -1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>                            
       
    <a href="<?php the_permalink() ?>"><?php the_title()?></a>

 <?php endwhile; wp_reset_postdata(); endif; ?>