import $ from 'jquery';

class reasonHeight {
    constructor() {
        this.Events();
    }

    Events() {
        this.matchHeight();

        $(window).on('resize', () => {
            this.matchHeight();
        });
    }
    // Methods will go here
    
    matchHeight() {
        let one = $(".reason-textbox-one").height();
        $('#img1').css('height', one * 1.2 + 'px');
        $('#img2').css('height', one * 1.4 + 'px');
        $('#img3').css('height', one * 1.4 + 'px');

        if ($(window).width() < 450) {
            $('#img1').css('height', 'auto');
            $('#img2').css('height', 'auto');
            $('#img3').css('height', 'auto');
        }
    }
}

export default reasonHeight;