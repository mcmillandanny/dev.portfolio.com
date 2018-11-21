<?php get_header()?>
    <section id="single-project">
        
        <?php if( get_field('project_title') ):?>
            <h1><?php the_field('project_title')?></h1>
        <?php endif;?>
        <img src="<?php the_field('project_image')?>" alt="project-image" />

        <div class="project-blurb">
            <p><?php the_field('project_blurb')?></p>
        </div>
    </section>
<?php get_footer()?>
