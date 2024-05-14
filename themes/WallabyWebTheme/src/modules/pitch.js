import $ from 'jquery';

class pitch {
    constructor() {
        this.pitchWidth();
        this.Events();
    }

    Events() {
        $(window).on('resize', () => {
            this.pitchWidth();
        });
    }
    // Methods will go here
    
    pitchWidth() {
        if (window.innerWidth < 701) {
            let img1Width = $('#img1').height();
            $('#img2').css('height', img1Width);
        }
    }
}

export default pitch;