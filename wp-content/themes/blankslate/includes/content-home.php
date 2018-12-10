
<section id="home" name="home">
    <a name="home"></a>
        <div class="hero-container">
            <div class="hero-img-container">
                <img src="<?php echo get_template_directory_uri()?>/images/hero-filler.jpg" alt="hero-image" />
                <div class="home-blurb-box"></div>
                <h1 class="home-blurb">Hello, I'm Daniel</h1>  
                <h2 class="home-blurb-2">AN ASPIRING WEB DEVELOPER</h2>
            </div>            
          
            <p class="home-scroll-down">Scroll Down</p>
        </div>
</section>

 <!-- <?php 
         $args = array(
            "post_type" => "portfolio",
            "category_name" => get_field('portfolio_display_category'),
            "posts_per_page" => -1,
        );
        $query = new WP_Query($args);
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>                            
       
    <a href="<?php the_permalink() ?>"><?php the_title()?></a> -->

<!-- <?php endwhile; wp_reset_postdata(); endif; ?> -->

<section id="work" name="work">
<a name="content-home.php#work"></a>
    <div class="portfolio-img"></div>
        <a class="hansel" href="http://google.com"></a>
        <a class="react" href="http://google.com"></a>
        <a class="vue" href="http://google.com"></a>
        <a class="vma" href="http://google.com"></a>
        <a class="game" href="http://google.com"></a>
</section>
<section class="work-box">
    <div class="hansel-box info">
        <div>
            <h1>Hansel and Gretel</h1>
            <h2>Interactive E-Book</h1>
            <p>Technologies used:</p>
            <p>HTML5, SCSS, GSAP, JavaScript</p>
            <a href="#">View Site</a>
        </div>
    </div>
    <div class="react-box info">
        <div>
            <h1>Old Spice</h1>
            <h2>Re-Designed Old Spice Website</h1>
            <p>Technologies used:</p>
            <p>HTML5, SCSS, GSAP, React/Redux</p>
            <a href="#">View Site</a>
        </div>
    </div>
    <div class="vue-box info">
        <div>
            <h1>Internet Game Database</h1>
            <h2>Using IDGB API</h1>
            <p>Technologies used:</p>
            <p>HTML5, SCSS, Vue</p>
            <a href="#">View Site</a>
        </div>
    </div>
    <div class="vma-box info">
        <div>
            <h1>VMA'S</h1>
            <h2>Re-Designed VMA's</h1>
            <p>Technologies used:</p>
            <p>HTML5, SCSS, JavaScript, Node</p>
            <a href="#">View Site</a>
        </div>
    </div>
    <div class="game-box info">
        <div>
            <h1>Unity2d Game</h1>
            <h2>Made a 2d game in unitiy</h1>
            <p>Technologies used:</p>
            <p>Unity C#</p>
            <a href="#">View Site</a>
        </div>
    </div>
    
</section>
<section id="about-me">
    <h1>About Me</h1>
    <p>I am an avid developer, pet lover, and crappy guitarist. When my head is not stuck in a computer, I enjoy going to the park with my dog or kayaking down the Chattahoochee.
And I cook cool shit.(ask me about my risotto). Every since a young age computes have had my attention, deciding to work with them has been a rewarding passion for myself. 
</p>

</section>
<aside>
    <div class="me"></div>
 </aside>
 <footer>
    <div class="mobile-bottom-nav">
        <a href="#" >Email</a>
        <a href="#" >GitHub</a>
        <a href="#" >LinkedIn</a>
        <a href="#" >Facebook</a>
    </div>
 </footer>