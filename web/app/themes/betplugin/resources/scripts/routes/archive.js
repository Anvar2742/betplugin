import AjaxWorker from "@scripts/Classes/AjaxWorker.js";

export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize: function () {
    let calendarAnchor = $('#calendar-anchor');
    let body = $('body');
    let deleteParent = $('.delete-parent');

    let worker = new AjaxWorker();
    let postId = 0;

    deleteParent.on('click', (e) => {
      postId = $(e.target).closest('article').data('id');
      onClick(postId, e);
    });

    function onClick(id, e) {
      if (!id) {
        return;
      }

      let data = {
        'action': 'deletePost',
        'params': id
      }

      let promises = [];
      promises.push(worker.doWork(data));

      Promise.all(promises).then((data) => {
        if (data !== false) {
          if (postId === data[0].data.ID) {
            $(e.target).closest('article').remove();
          }
        } else {
          console.log('Failed');
        }
      });
    }
  },
};
