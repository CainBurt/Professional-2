import '@popperjs/core'
import 'bootstrap'

const Common = (function() {
    const mobileMenuBtn = document.getElementById('toggle-mobile-menu');
    const headerNav = document.getElementById('header-navigation');

    return {
        init: function () {
            mobileMenuBtn.addEventListener('click', this.toggleMobileMenu)
        },

        toggleMobileMenu: function () {
            document.body.classList.toggle('mobile-menu-opened');
        },

        showHeader: function () {
            let scrollPos = window.scrollY;

            if(scrollPos > 50) {
                document.body.classList.add('header-show');
            } else {
                document.body.classList.remove('header-show');
            }

        }
    }
}());

Common.init();

window.addEventListener('scroll', function(e) {
    Common.showHeader();
});






