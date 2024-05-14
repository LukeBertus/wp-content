<?php
/*
Template Name: Perth Website Hosting
*/
?>
<?php get_header() ?>

<div class="hosting-hero">
    <div class="container">
        <div class="hosting-textbox">
            <h1 class="italics">Perth Website Hosting</h1>
            <p class="hosting-title">Your Hosting Solution</p>
            <p class="hosting-subtext" data-aos="fade-zoom-in"><span class="italics">No time to spend trying to maintain your site?</span><br> We manage all things internet so you can focus on what your business does best.</p>
        </div>
        <img data-aos="fade-zoom-in"src="<?=get_theme_file_uri('/images/hosting.svg')?>" alt="">
    </div>
</div>
<div class="hosting-main">
    <div class="container">
        <img data-aos="fade-zoom-in"src="<?=get_theme_file_uri('/images/hosting-body.svg')?>" alt="">
        <div class="hosting-body-textbox">
            <h2>Wordpress Management</h2>
            <p class=hosting-body-upper data-aos="fade-zoom-in">At WallabyWeb we understand you don't want to waste time:</p>
            <ul data-aos="fade-zoom-in">
                <li>Troubleshooting hosting issues</li>
                <li>Keeping up with security updates</li>
                <li>Fixing bugs caused by updates</li>
            </ul>
            <p class=hosting-body-lower data-aos="fade-zoom-in">That's why we will handle <b>everything</b> for you, from getting your site live to ensuring the latest security features are installed. </p>
            <a href="<?=get_permalink(get_page_by_title('Pricing Guide')->ID)?>" class="btn gradient-button" aria-label="See Pricing"></a>
        </div>
    </div>
</div>

<?php get_footer() ?> 