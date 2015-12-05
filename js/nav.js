$(function() {
    $('#login-nav').submit(function(event) {
        var formData = {
            'email': $('#exampleInputEmail2').val(),
            'password': $('#exampleInputPassword2').val()
        };

        $.ajax({
            type: 'POST',
            url: 'php/login.php',
            data: formData,
            dataType: 'json',
            encode: true,
            error: function(request, status, error) {
                console.log(request.responseText);
            },
            success: function(data) {
                if (data.error) {
                    console.log(data.error);
                } else {
                    window.location.replace("homepage.php");
                }
            }
        })

        event.preventDefault();
    });
});