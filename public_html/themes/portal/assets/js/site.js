"use strict"

const SiteApplication = new (function() {

    stickyApp();

    function stickyApp() {

        const bar = document.getElementById('top');
        const ad = document.getElementById('adTop');
        const header = document.getElementById('header');
        const nav = document.getElementById('navbar');

        const offsetMargin = nav.offsetHeight + bar.offsetHeight;
        const stickyOffset = nav.offsetTop + nav.offsetHeight;

        window.onscroll = function() {
            if( window.pageYOffset >= stickyOffset ) {
                header.classList.add('sticky');
                ad.style.marginTop = offsetMargin+'px';
            } else {
                header.classList.remove('sticky');
                ad.style.marginTop = '0px';
            }
        };
    }
});
