<?php
/*
Template Name: Perth Wordpress Web Design
*/
?>
<?php get_header() ?>

<div class="wordpress-hero" style="background-image: url('<?=get_theme_file_uri('/images/wordpress-hero.jpg')?>');">
    <div class="container">
        <div class="wordpress-textbox">
            <h1 class="italics">Perth WordPress Web Design</h1>
            <p class="wordpress-title">Elevate your Online Presence.</p>
            <p class="wordpress-subtext"  data-aos="fade-zoom-in">Join the <a href="#cms-view">Content Management System</a> used and trusted by <span class="bold">over 40% of the internet.</span></p>
            <a class="learn-more" href="#cms-view" data-aos="fade-zoom-in">Learn More</a>
        </div>
        <img src="<?=get_theme_file_uri('/images/wordpress-logo.png')?>" alt="" class="wordpress-logo">
    </div>
    <div id="cms-view" class="custom-shape-divider-bottom-1714458691">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</div>
<div class="why-wordpress">
    <div class="container">
        <div class="why-wordpress-textbox">
            <p>Why WordPress?</p>
            <h2 class="italics">Advantages of WordPress Development</h2>
        </div>
        <div class="wordpress-card-container">
            <div class="wordpress-card" data-aos="zoom-out-up">
                <img id="cms-image" src="<?=get_theme_file_uri('/images/cms.svg')?>" alt="">
                <div class="wordpress-card-text">
                    <h3 id="cms" class="wordpress-card-title">Content Management System</h3>
                    <hr>
                    <p class="wordpress-card-content">A Content Management System is an application designed for users to easily manage their website content. WordPress comes with an intuitive CMS that allows anyone to create, edit, and publish content on their website, regardless of technical expertise. This allows the business owners and the employees to manage their site by adding and altering content at their discretion, ensuring the page does not become outdated.</p>
                </div>
            </div>
            <div class="wordpress-card" data-aos="zoom-out-up">
            <img id="security-image" src="<?=get_theme_file_uri('/images/security.svg')?>" alt="">
                <div class="wordpress-card-text">
                    <h3 class="wordpress-card-title">Security</h3>
                    <hr>
                    <p class="wordpress-card-content">WordPress takes several measures to ensure its sites are secure. Every site includes SSL which encrypts all data transmitted, preventing malicious attackers from intercepting data. Security tools scan your site daily, checking uploads, plugins, root files, and more for any vulnerabilities or malware. WordPress also has its own web application firewall (WAF) which examines incoming traffic and blocks requests that appear unnatural.</p>
                </div>
            </div>
            <div class="wordpress-card" data-aos="zoom-out-up">
            <img id="seo-image" src="<?=get_theme_file_uri('/images/seo.svg')?>" alt="">
                <div class="wordpress-card-text">
                    <h3 class="wordpress-card-title">SEO-Friendly</h3>
                    <hr>
                    <p class="wordpress-card-content">Out of the box, WordPress comes with features that guide search engines through your website, ensuring they understand your content and therefore will rank your site for relevant search queries. WordPress also comes with optional plugins such as Yoast SEO, Yoast generates XML sitemaps, a robots.txt file, site-level schema structured data, and more, which is all technical jargon that improves your search ranking. </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="wordpress-affordable">
    <div class="custom-shape-divider-top-1714458795">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="container">
        <div class="affordable-textbox">
            <h2 class="italics">Affordable Wordpress Websites</h2>
            <p class="headline">Sites That Don't Burn the Budget</p>
            <p class="affordable-content" data-aos="fade-zoom-in">WallabyWeb connects you straight to the developer, avoiding unnecessary overhead fees and ensuring personalized attention. This allows us to offer WordPress websites at a fraction of the cost of big agencies.</p>
            <a href="<?=get_permalink(get_page_by_title('Pricing Guide')->ID)?>">View Pricing Guide</a>
        </div>
        <div  data-aos="fade-zoom-in" class="affordable-image">
            <img id="money" src="<?=get_theme_file_uri('/images/money.svg')?>" alt="">
        </div>
    </div>
</div>


<?php get_footer() ?> 
