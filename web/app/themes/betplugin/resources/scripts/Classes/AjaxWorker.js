// Define a class named AjaxWorker
export default class AjaxWorker {
  // Define a method named doWork which takes in one argument named data
  doWork(data) {
    // Declare a variable named ajax
    let ajax;

    // Check if the Web Worker API is supported and if the ajax variable is undefined
    if (typeof (Worker) !== 'undefined' && typeof (ajax) == 'undefined') {
      // Return a new Promise which takes in two callbacks named resolve and reject
      return new Promise((resolve, reject) => {
        // Create a new Worker instance and store it in the ajax variable
        ajax = new Worker(ajaxObj.tpl_dir_uri + '/public/js/ajax.js');

        // Send a message to the worker with the url and data properties
        ajax.postMessage({
          'url': ajaxObj.admin_url,
          'data': data,
        });

        // Define a function to handle the onmessage event of the worker
        ajax.onmessage = function (event) {
          // Call the resolve callback with the data sent by the worker
          resolve(event.data);

          // Terminate the worker and set the ajax variable to undefined
          ajax.terminate();
          ajax = undefined;
        }

        // Define a function to handle the onerror event of the worker
        ajax.onerror = function (event) {
          // Call the reject callback with the error sent by the worker
          reject(event.error);
        }
      });
    }
  }
}
