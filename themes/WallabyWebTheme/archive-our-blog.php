<?php get_header() ?>

<div class="blog-archive">
    <div class="container">
        <h1>Blog</h1>
        <div class="blog-posts
        ">
            <?php
            while (have_posts()) {
                the_post();
            ?>
                <div class="blog-post">
                    <a href="<?= the_permalink() ?>">
                        <img src="<?=get_field('thumbnail')?>" alt="">
                        <h2><?= the_title() ?></h2>
                        <p class="excerpt"><?= get_field('subtext') ?></p>
                        <div class="read-more-container">
                            <p class="read-more">READ MORE</p>
                            <img src="<?=get_theme_file_uri('/images/arrow.svg')?>" alt="">
                        </div>
                        <hr>
                        <p class="author-credit">By <span>LUKE ENGBERIK</span></p>
                    </a>
                </div>
            <?php
            }
            ?>
        </div> 
    </div>
</div>

<?php get_footer() ?>