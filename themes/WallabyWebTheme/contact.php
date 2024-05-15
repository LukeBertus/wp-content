<?php
/*
Template Name: Contact WallabyWeb
*/
?>
<?php get_header() ?>
<div class="contact-main">
    <div class="container">
        <h2>Contact Us</h2>
        <div class="contact-body">
            <div class="contact-form">
                <form id="myForm">
                    <div class="form form-upper">
                        <div class="input">
                            <label for="name">Name: </label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="input">
                            <label for="email">Email: </label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>
                    <div class="form form-upper">
                        <div class="input">
                            <label for="business-name">business name: </label>
                            <input type="text" id="business-name" name="business-name">
                        </div>
                        <div class="input">
                            <label for="business-url">Website URL (if applicable): </label>
                            <input type="text" id="business-url" name="business-url">
                        </div>
                    </div>
                    <div class="form form-lower">
                        <div class="input">
                            <label for="message">message: </label>
                            <textarea id="message" name="message" required></textarea>
                            <input id="submit" type="submit" value="Send">
                        </div>
                    </div>
                </form>
            </div>
            <div class="sidebar">
                <p class="sidebar-text"><b>Not sure where to start?</b> Book a free 30-minute consultation with one of our web design and SEO specialists. We'll discuss your goals and devise the steps to reach them. <a class="book-consultation-link" href="https://calendly.com/services-ag6w/30min" target="_blank">Book consultation</a></p>
                <div class="sidebar-socials">
                    <div class="email-container">
                        <svg class="email-svg" fill="#3e3e3e" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 -960 960 960" width="24"><path d="M160-160q-33 0-56.5-23.5T80-240v-480q0-33 23.5-56.5T160-800h640q33 0 56.5 23.5T880-720v480q0 33-23.5 56.5T800-160H160Zm320-280L160-640v400h640v-400L480-440Zm0-80 320-200H160l320 200ZM160-640v-80 480-400Z"/></svg>
                        <a href="mailto:services@wallabyweb.com.au"class="email">services@wallabyweb.com.au</a>
                    </div>
                    <div class="phone-container">
                        <svg class="phone-svg" fill="#3e3e3e" id="Layer_1" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Layer 1"><path d="m490.341 353.822-78.46-46.692a44.252 44.252 0 0 0 -53.941 6.712c-9.46 9.447-17 16.65-22.4 21.39a11.444 11.444 0 0 1 -9.06 3.01c-29.329-2.3-65.95-22.78-97.94-54.773s-52.47-68.607-54.78-97.943a11.446 11.446 0 0 1 3.01-9.064c4.751-5.4 11.94-12.94 21.39-22.4a44.236 44.236 0 0 0 6.71-53.932l-46.7-78.469a44.208 44.208 0 0 0 -56.42-17.638l-75.83 34.592a44.09 44.09 0 0 0 -25.56 45.798c12.78 101.987 64.09 202.412 144.45 282.779s180.79 131.67 282.78 144.45a42.787 42.787 0 0 0 5.6.35 44.072 44.072 0 0 0 40.19-25.9l34.6-75.831a44.236 44.236 0 0 0 -17.639-56.439z" fill-rule="evenodd"/></svg>
                        <a href="tel:+61436449958" class="phone-num">0436 449 958</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer() ?>