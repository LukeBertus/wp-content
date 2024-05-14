import $ from 'jquery';

class money {
    constructor() {
        this.Events();
    }

    Events() {
        this.evenHeight();

        $(window).on('resize', () => {
            this.evenHeight();
        });
    }
    // Methods will go here
    evenHeight() {
        console.log($(window).width())
        if ($(window).width() > 700) {
            let contentHeight = $('.affordable-textbox').height();
            $('#money').height(contentHeight);
        } else {
            $('#money')[0].style.removeProperty('height');
        }
    }
}

export default money;