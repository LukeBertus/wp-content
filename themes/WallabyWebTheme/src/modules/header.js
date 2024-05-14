import $ from 'jquery';

class headerJS {
    constructor() {
        this.Events();
        $('.navbar-toggler').html('<span class="navbar-toggler-icon"><svg class="svg-toggle" fill="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3,6H21V8H3V6M3,11H21V13H3V11M3,16H21V18H3V16Z" /></svg></span>');
        $('.navbar-toggler-icon').css('background-image', 'none');
    }

    Events() {
        $('.navbar-toggler').on('click', function() {
            let isHidden = $(this).attr('aria-expanded');
            if (isHidden === 'true') {
                $('.navbar').removeClass('dropdown-open');
            } else {
                $('.navbar').addClass('dropdown-open');
            }
            
            $('.svg-toggle').css('fill', '#dddddd');
            setTimeout(function() {
                $('.svg-toggle').css('fill', 'white');
            }, 100);
        });
    }
    // Methods will go here
    
}

export default headerJS;