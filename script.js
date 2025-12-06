$(document).ready(function() {
    $('#registrationForm').on('submit', function(e) {
        e.preventDefault(); // Prevent default form submission

        // Clear previous error messages
        $('.error').text('');
        $('#formResponse').html('');

        let isValid = true;

        // Validate Name
        const name = $('#name').val();
        if (name.trim() === '') {
            $('#nameError').text('Name is required.');
            isValid = false;
        }

        // Validate Email
        const email = $('#email').val();
        if (email.trim() === '') {
            $('#emailError').text('Email is required.');
            isValid = false;
        } else if (!/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/.test(email)) {
            $('#emailError').text('Please enter a valid email address.');
            isValid = false;
        }

        // If form is valid, submit via AJAX
        if (isValid) {
            $.ajax({
                type: 'POST',
                url: 'process.php',
                data: $(this).serialize(),
                success: function(response) {
                    $('#formResponse').html(response);
                    $('#registrationForm')[0].reset(); // Clear the form
                },
                error: function() {
                    $('#formResponse').html('<p class="error">An error occurred during submission.</p>');
                }
            });
        }
    });
});
