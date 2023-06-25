import BlockHeight from "@scripts/Classes/BlockHeight";

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    jQuery(($) => {
      $(window).on('load', doCarousel);

      let carouselSlides = $('.carousel-slides');
      let carouselSlide = $('.carousel-slide');

      function doCarousel() {
        let args = {
          autoPlay: 5000,
          wrapAround: true,
          friction: 0.9,
          pageDots: false,
          prevNextButtons: false,
        };

        setTimeout(() => {
          carouselSlides.flickity(args);
        }, 150);
      }

      $(window).on('load resize', () => {
        let interval = setInterval(() => {
          let blockHeight = new BlockHeight($('.ava-block.carousel-images'));

          carouselSlide.css({
            'height': blockHeight.height + 'px',
            // 'overflow-y': 'hidden'
          });
        }, 100);

        setTimeout(() => {
          clearInterval(interval);
        }, 500)
      });
    });
  },
};
