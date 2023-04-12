$(document).ready(function() {
    $('#checkout-form').submit(function(event) {
        event.preventDefault(); // Prevent form from submitting normally

        // Get the form data
        var formData = $(this).serialize();

        // Send the data using AJAX
        $.ajax({
            url: 'checkout.php',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                // Display the response message
                $('#result').text(response.message);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                // Display error message
                $('#result').text('Error: ' + textStatus);
            }
        });
    });
});
