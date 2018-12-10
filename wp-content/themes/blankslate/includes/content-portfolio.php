<!-- <?php 
         $args = array(
            "post_type" => "portfolio",
            "category_name" => get_field('portfolio_display_category'),
            "posts_per_page" => -1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>                            
       
    <a href="<?php the_permalink() ?>"><?php the_title()?></a>

 <?php endwhile; wp_reset_postdata(); endif; ?> --> -->
 <h1 class="portfolio-header">Portfolio</h1>
 <section id="portfolio-container">
        <div class="col-container">
            <div class="col-1"></div>
            <div class="col-2"></div>
            <div class="col-3"></div>
        <div>
 </section>
