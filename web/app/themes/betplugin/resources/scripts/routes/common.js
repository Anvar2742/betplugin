export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    let burger = $('#burger');
    let mainMenu = $('.main-menu');
    let mainMenuWrapper = $('.main-menu-wrapper');
    let burgerOpen = false;
    let dropdownArrow = $('.dropdown-arrow');

    burger.on('click', () => {
      if (!burgerOpen) {
        mainMenuWrapper.css('display', 'block');
        mainMenu.css('display', 'block');
      } else {
        mainMenuWrapper.css('display', '');
        mainMenu.css('display', '');
      }

      burgerOpen = !burgerOpen;
    });

    $(window).on('resize', () => {
      setInterval(() => {
        mainMenuWrapper.css('display', '');
        mainMenu.css('display', '');
      }, 250);
    });

    dropdownArrow.on('click', function (e) {
      e.preventDefault();
      // e.stopPropagation();

      let $this = $(this);

      if ($this.next().hasClass('block')) {
        $this.next().removeClass('block').addClass('hidden');
      } else {
        $this.parent().parent().find('.sub-menu').removeClass('block').addClass('hidden');
        $this.next().toggleClass('hidden block');
      }
    });

    let closeInfo = $('.close-info');
    let parent = closeInfo.parent();

    closeInfo.on('click', () => {
      parent.slideUp("fast", () => {
        parent.remove();
      });
    });
  },
};
