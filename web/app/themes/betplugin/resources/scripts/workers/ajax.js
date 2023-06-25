// When a message is received from the parent thread, start an async function.
self.onmessage = async (event) => {
  try {
    // Use the fetch API to send a POST request to the specified URL.
    const response = await fetch(event.data.url, {
      method: 'POST', // Use the POST method for the request.
      credentials: 'same-origin', // Include credentials in the request, if same-origin.
      headers: {'Content-Type': 'application/x-www-form-urlencoded'}, // Set the Content-Type header to 'application/x-www-form-urlencoded'.
      body: `action=${event.data.data.action}&params=${event.data.data.params}`, // Set the request body to the action and params provided by the parent thread.
    });

    // Parse the response as JSON.
    const data = await response.json();
    // Send a message back to the parent thread with the parsed data.
    postMessage(data);
  } catch (error) {
    // If an error occurs, log the error to the console.
    console.error(`An error occurred while processing the message: ${error.message}`, error);
  }
};
