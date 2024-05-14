import $ from 'jquery';

class footer {
    constructor() {
        this.Events();
    }

    Events() {
        this.footerWidth();

        $(window).on('resize', () => {
            this.footerWidth();
        });
    }
    // Methods will go here
    
    footerWidth() {
        
    }
}

export default reasonHeight;