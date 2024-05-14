<?php
/*
Template Name: Search Engine Optimisation
*/
?>

<?php get_header() ?>

<div class="seo-hero">
    <div class="container">
        <div class="seo-textbox">
            <h1 class="italics">Search Engine Optimisation Perth</h1>
            <p class="seo-heading">Put Your Brand in the <span class="underline">Spotlight</span></p>
            <p class="seo-subtext" data-aos="fade-zoom-in">SEO allows your website to rank higher for popular search queries, getting <b>more visitors</b> to your site and <b>more customers</b> to your door.</p>
            <a href="#seo" class="btn gradient-button" aria-label="Learn More"></a>
        </div>
        <img src="<?=get_theme_file_uri('/images/seo-icon.svg')?>" alt="">
    </div>
    <div class="custom-shape-divider-bottom-1714458691" id="seo">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
</div>
<div class="seo-explained">
    <div class="container">
        <div class="seo-explained-header">
            <h2>What is SEO?</h2>
            <p data-aos="fade-zoom-in">Search Engine Optimisation is the practice of optimising a website such that it appears higher in Google's search rankings. The aim is to get onto the first page of Google for search terms that are relevant to your brand. This then drives organic traffic to your website from users who otherwise wouldn't know about your business.<br><br><span class="italics">There are three main techniques for SEO:</span></p>
        </div>
        <div class="seo-card-container">
            <div class="seo-card seo-card-backlinks" data-aos="zoom-out-up">
                <img id="backlinks-image" src="<?=get_theme_file_uri('/images/backlink.svg')?>" alt="">
                <div class="seo-card-text">
                    <h3 id="backlinks" class="seo-card-title">Backlinks</h3>
                    <hr>
                    <p class="seo-card-content">Arguably the most important factor for increasing your search results ranking, backlinks are links from other websites linking back to your site. This shows Google that other sites endorse your content and believe you are a credible source of information, Google then uses this information to rank you higher due to an increased likelihood of the user being satisfied with your content. The more reputable the backlink source is, the more value it provides.</p>
                </div>
            </div>
            <div class="seo-card" data-aos="zoom-out-up">
                <img id="blog-post-image" src="<?=get_theme_file_uri('/images/blog-post.svg')?>" alt="">
                <div class="seo-card-text">
                    <h3 id="blog-posts" class="seo-card-title">Blog Posts</h3>
                    <hr>
                    <p class="seo-card-content">Google favors sites that are constantly updating and improving their content, by adding regular blog posts your website is framed as up-to-date and informative. Another benefit of blog posts is that they are fantastic tools for generating backlinks. This is because other websites are far more likely to link to general informative content than business pages.</p>
                </div>
            </div>
            <div class="seo-card" data-aos="zoom-out-up">
                <img id="keyword-image" src="<?=get_theme_file_uri('/images/keyword.svg')?>" alt="">
                <div class="seo-card-text">
                    <h3 id="keywords" class="seo-card-title">Keywords</h3>
                    <hr>
                    <p class="seo-card-content">The final main technique for optimising your website's performance is targeting popular keywords. Keywords are the words or phrases that people search for, such as 'seo services perth'. Through research, the volume and relevancy of keywords can be analyzed to find the keywords that will maximize organic traffic. These keywords are then strategically included in the text markup of pages, in titles, headings, content, etc to increase the likelihood of ranking for these phrases.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="local-seo">
    <div class="custom-shape-divider-top-1714458795">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z" class="shape-fill"></path>
        </svg>
    </div>
    <div class="container">
        <img data-aos="fade-zoom-in" src="<?=get_theme_file_uri('/images/business.png')?>" alt="small business shopfront">
        <div class="local-textbox">
            <h2 class="italics">Local SEO for Small Businesses</h2>
            <p class="local-seo-title">Rank Higher in WA</p>
            <p class="local-seo-text" data-aos="fade-zoom-in">Based out of Perth, Western Australia, WallabyWeb serves the Metropolitan Area with tailored SEO solutions, because no one knows small businesses like small businesses.</p>
        </div>
    </div>
</div>
<div class="affordable-seo">
    <div class="container">
        <div class="affordable-seo-textbox">
            <h2 class="italics">Affordable Seo Packages Perth</h2>
            <p class="affordable-seo-title">Big Impact, Small Budget</p>
            <p class="affordable-seo-text" data-aos="fade-zoom-in">As a small business ourselves, we understand the struggle of juggling finances, staying afloat, and finding enough cash flow to scale. That's why WallayWeb is a developer-run internet solution. This removes the large overheads often imposed by agencies, ensuring we can still provide the highest quality of service, all for the lowest price.</p>
            <a class="btn gradient-button" aria-label="See Pricing" href="<?=get_permalink(get_page_by_title('Pricing Guide')->ID)?>"></a>
        </div>
        <img data-aos="fade-zoom-in" src="<?=get_theme_file_uri('/images/affordable-seo.svg')?>" alt="Women putting money in piggy bank">
    </div>
</div>

<?php get_footer() ?>