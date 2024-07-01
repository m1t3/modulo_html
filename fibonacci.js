$(document).ready(function() {
    $('#fibonacciForm').submit(function(event) {
       event.preventDefault();
       var formData = $(this).serialize();
       
       $.ajax({
          type: 'POST',
          url: 'fibonacci.php',
          data: formData,
          success: function(response) {
             $('#resultado').html(response);
          }
       });
    });
 });