import $ from 'jquery';

class cms {
    constructor() {
        this.Events();
    }

    Events() {
        this.changeHeading();

        $(window).on('resize', () => {
            this.changeHeading();
        });
    }
    // Methods will go here
    changeHeading() {
        if ($(window).width() < 512) {
            $('#cms').text('CMS');
        } else {
            $('#cms').text('Content Management System');
        }
    }
}

export default cms;