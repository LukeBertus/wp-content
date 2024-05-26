<?php get_header() ?>
<div class="single">
    <div class="single-banner">
        <div class="single-textbox">
            <h1><?php the_title() ?></h1>
            <p><?=get_field('subtext')?></p>
        </div>
        <div class="single-image" style="background-image: url('<?=get_field("thumbnail")?>')"></div>
    </div>
    <div class="single-divider">
        <hr>
    </div>
    <div class="single-content">
        <div class="single-taco-menu">
            <p class="taco-title">Steps:</p>
            <ul>
                <li class="taco-item"><a href="#wd1" class="taco-link active">#1. Plan your Website</a></li>
                <li class="taco-item"><a href="#wd2" class="taco-link">#2. Plan your Content</a></li>
                <li class="taco-item"><a href="#wd3" class="taco-link">#3. Build a Brand Identity</a></li>
                <li class="taco-item"><a href="#wd4" class="taco-link">#4. Choose your Website Builder</a></li>
                <li class="taco-item"><a href="#wd5" class="taco-link">#5. Plan Pages and Create Wireframes</a></li>
                <li class="taco-item"><a href="#wd6" class="taco-link">#6. Start Building Pages</a></li>
                <li class="taco-item"><a href="#wd7" class="taco-link">#7. Optimise UX</a></li>
                <li class="taco-item"><a href="#wd8" class="taco-link">#8. Make your site Responsive</a></li>
                <li class="taco-item"><a href="#wd9" class="taco-link">#9. Implement SEO</a></li>
                <li class="taco-item"><a href="#wd10" class="taco-link">#10. Get Feedback</a></li>
                <li class="taco-item"><a href="#wd11" class="taco-link">#11. Launch your Website</a></li>
                <li class="taco-item"><a href="#wd12" class="taco-link">#12. Maintain & Improve your Website</a></li>
            </ul>
        </div>
        <div class="single-blog">
        <?php
            while (have_posts() ) :
                the_post();
                the_content();
            endwhile;
            ?>
        </div>
    </div>
</div>
<?php get_footer() ?>