<?php
/*
Template Name: About WallabyWeb
*/
?>

<?php get_header() ?>

<div class="about-hero">
    <div class="container">
        <div class="about-textbox">
            <h1>About WallabyWeb</h1>
            <h2>How We Got Started</h2>
            <p class="about-title" data-aos="fade-zoom-in">WallabyWeb started because the founder, Luke Engberink noticed a trend where low-quality websites were the face of high-quality businesses. This unpleasant and often frustrating user experience gave rise to WallabyWeb, with the goal of ensuring a company's professionalism in the real world is reflected in the digital world.</p>
        </div>
        <img data-aos="fade-zoom-in" src="<?=get_theme_file_uri('/images/about-us.svg')?>" alt="">
    </div>
</div>
<div class="about-values">
    <div class="container">
        <h2>Values</h2>
        <div class="value-cards">
            <div class="value-card" data-aos="fade-up">
                <img src="<?=get_theme_file_uri('/images/tailored.svg')?>" alt="">
                <h3>Tailored Design</h3>
                <p>We understand every business is unique and there is no 'one size fits all' website layout. We work with you to understand your brand so we can create the perfect layout, colour palette, and tone that makes your customers feel at home. This also allows us to build the website from the ground up to direct your visitors where you want them to go.</p>
            </div>
            <div class="value-card" data-aos="fade-up">
                <img src="<?=get_theme_file_uri('/images/transparency.svg')?>" alt="">
                <h3>Transparency</h3>
                <p>Creatives can get carried away, so we make it a priority to have clear and regular communication. This ensures we are on the same page from start to finish, and gives you the ability to steer the project in whatever direction you see fit. It also prevents us from working on features that are then removed later down the line, saving you both time and money.</p>
            </div>
            <div class="value-card" data-aos="fade-up">
                <img src="<?=get_theme_file_uri('/images/wallet.svg')?>" alt="">
                <h3>Affordability</h3>
                <p>We believe the main reason businesses have no or low-quality websites is the high costs associated with big agencies, a large portion of these costs are agency overheads that don't contribute to your site. We believe you should only pay for what you get, and that's why WallabyWeb is developer-owned and run, allowing us to provide similar services for a fraction of the cost.</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>