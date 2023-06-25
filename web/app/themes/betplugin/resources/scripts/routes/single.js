export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    jQuery(document).ready(($) => {
      // JavaScript to be fired on all pages, after page specific JS is fired
      const slider = $(".font-size-slider");
      const currentFontSize = $('.current-font-size');
      console.log(slider.val())

      currentFontSize.text(slider.val() + 'px');

      let entryContent = $('.entry-content');

      slider.on('input', (e) => {
        entryContent.css('font-size', e.target.value + 'px');
        currentFontSize.text(e.target.value + 'px');
      });
    });
  },
};
