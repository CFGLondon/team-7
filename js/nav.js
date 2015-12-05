//Login script for the nav bar drop down menu.

$(function() {
    $('#login-nav').submit(function(event) {
        //Assign values of password and email fields to a temporary variable.
        var formData = {
            'email': $('#exampleInputEmail2').val(),
            'password': $('#exampleInputPassword2').val()
        };
        
        //Send the values of the password and email fields to the login control script.
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
      //End
    
    //If the logout button is pressed then the logout function is called.
    $('#logout').click(function() {
        $.ajax({
            type: 'POST',
            url: 'php/logout.php',
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
    });
});
