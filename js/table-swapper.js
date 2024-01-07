function loadStamby() {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Open a GET request to the table/table-bus-standby.php file
    xhr.open("GET", "table/table-bus-standby.php");

    // Send the request
    xhr.send();

    // Define a function to handle the response
    xhr.onreadystatechange = function() {
      // Check if the request is completed and successful
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Get the content of the file as a string
        let response = xhr.responseText;

        // Get the table-container element by id
        let tableContainer = document.getElementById("table-container");

        // Set the innerHTML of the table-container to the response
        tableContainer.innerHTML = response;

      }
    };
  }

  function loadArrivals() {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Open a GET request to the table/table-arrivals.php file
    xhr.open("GET", "table/table-arrivals.php");

    // Send the request
    xhr.send();

    // Define a function to handle the response
    xhr.onreadystatechange = function() {
      // Check if the request is completed and successful
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Get the content of the file as a string
        let response = xhr.responseText;

        // Get the table-container element by id
        let tableContainer = document.getElementById("table-container");

        // Set the innerHTML of the table-container to the response
        tableContainer.innerHTML = response;
      }
    };
  }

  function loadDepartures() {
    // Create a new XMLHttpRequest object
    let xhr = new XMLHttpRequest();

    // Open a GET request to the table/table-departures.php file
    xhr.open("GET", "table/table-departures.php");

    // Send the request
    xhr.send();

    // Define a function to handle the response
    xhr.onreadystatechange = function() {
      // Check if the request is completed and successful
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Get the content of the file as a string
        let response = xhr.responseText;

        // Get the table-container element by id
        let tableContainer = document.getElementById("table-container");

        // Set the innerHTML of the table-container to the response
        tableContainer.innerHTML = response;
      }
    };
  }