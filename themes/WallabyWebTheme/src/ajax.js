
jQuery(function($) {
    console.log("hit")
    $('#myForm').on('submit', function(e) {
        e.preventDefault();

        var name = $('#name').val();
        var email = $('#email').val();
        var message = $('#message').val();
        console.log(name, email, message);
        console.log(my_script_data.ajax_url);
        $.ajax({
            url: my_script_data.ajax_url, // Use the AJAX URL from the localized data
            type: 'POST',
            data: {
                action: 'my_form_action', // This should match the action hook in your PHP function
                name: name,
                email: email,
                message: message
            },
            success: function(response) {
                $('#submit').after('<p id="success">' + response.data + '</p>');
                $('#myForm')[0].reset();
            },
            error: function(error) {
                $('#submit').after('<p id="error">' + error.data + '</p>');
            }
        });
    });
});