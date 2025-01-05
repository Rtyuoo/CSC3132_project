$(document).ready(function () {
    $("#stockForm").on("submit", function (e) {
      e.preventDefault();
  
      // Create FormData object to handle file uploads
      let formData = new FormData(this);
  
      $.ajax({
        url: "insert_stock.php",
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function (response) {
          if (response === "success") {
            alert("Stock added successfully!");
            $("#stockForm")[0].reset();
          } else {
            alert("Error: " + response);
          }
        },
        error: function () {
          alert("An error occurred while processing the request.");
        },
      });
    });
  });
  