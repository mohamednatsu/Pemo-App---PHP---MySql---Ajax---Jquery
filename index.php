<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin App</title>
    <link rel="stylesheet" href="index.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<style>
    body {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.navigation {
    width: 100%;
    height: 30%;
    margin: 0 auto;
    display: flex;
    flex-direction: row;
    justify-content: space-around;
    align-items: center;
    background-color: rgb(239, 243, 248);
    box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
}

.navbar {
    list-style: none;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    padding: 20px;
}

.navbar .link {
    margin-left: 25px;
    cursor: pointer;
    color: #666;
    font-size: large;
    transition: all 0.2s ease-in-out;
}

.logo {
    color: blueviolet;
}

.logo .dot {
    font-weight: bold;
    color: black;
    font-size: 30px;
}

.footer {
    display: flex;
    bottom: 0;
    background-color: rgb(239, 243, 248);
    width: 100%;
    justify-content: space-around;
    align-items: center;
    box-shadow: rgba(67, 71, 85, 0.27) 0px 0px 0.25em, rgba(90, 125, 188, 0.05) 0px 0.25em 1em;
}

.menu {
    display: flex;
}

.menu .mn {
    padding: 30px;
}

.menu .mn h2 {
    color: blueviolet;
}

.menu .mn p {
    color: #777;
}

.info {
    color: #777;
}

.mn input {
    outline: none;
    border: none;
    border-radius: 7px;
    padding: 10px; 
}


button {
    width: 50px;
    height: 30px;
    margin-left: 10px;
    outline: none;
    border: none;
    background: blueviolet;
    color: white;
    font-size: 14px;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.2s ease-in-out;
}


@media screen and (max-width: 600px) {
    .footer {
        flex-direction: column;
    }
}


/* Hover section */

.mn button:hover {
    transform: translateY(-5px);
}
.mn button:not(:hover) {
    transform: translateY(0px);
}

.link:hover {
    color: blueviolet;
    transform: translateY(-4px);
}

.link:hover {
    transform: translateY(0px);
}

.register {
    width: 100%;
    height: 100%;
}

.main {
    margin: 80px auto;
    width: 40%;
    display: flex;
    border-radius: 8px;
    height: 100%;
    padding: 40px;
    padding-top: 10px;
    padding-right: 20px;
    flex-direction: column;
    background-color: rgb(239, 243, 248);
    box-shadow: rgba(0, 0, 0, 0.1) 0px 1px 2px 0px;
}

.feild {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items:center;
    padding: 12px;
} 

.feild label {
    text-align: start;
    color: #666;
    font-weight: 500;
    font-size: 18px;
}

.feild input {
    width: 75%;
    outline: none;
    border-radius: 7px;
    padding: 10px;
    font-size: 18px;
}

.border-style {
    border: 0.5px solid #666;
}

.labels {
    margin-top: 20px;
}

.main-text {
    text-align: center;
    color: blueviolet;
    font-size: 30px;
    margin-bottom: 10px;
}


.btn {
    width: 70%;
    padding: 25px;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto;
    margin-top: 50px;
    font-size: 20px;
    transition: all 0.5s ease-in-out;
    box-shadow: rgba(17, 17, 26, 0.1) 0px 0px 16px;
}

.btn:hover {
    transform: scale(1.08);
}
.btn:not(:hover) {
    transform: scale(1.00);
}

.feild input:focus {
    border: blueviolet 1px solid;
    outline: none;
}
/* 
.feild input:not(:focus) {
    outline: none;
    /* border: none; */

.Notvalid  {
    border: red 1px solid; !important
    outline: none;
}


#error-message {
    width: 80%;
    padding: 13px;
    border-radius: 4px;
    background-color: rgb(248,215,218);
    color: #721C24;
    text-align: start;
    font-weight: 300;
    font-size: larger;
    margin: 10px auto;
    border: double 1px rgb(248,215,218);
}

.success-message {
    width: 80%;
    padding: 13px;
    border-radius: 4px;
    background-color: #D4EDDA;
    color: #155759;
    text-align: start;
    font-weight: 300;
    font-size: larger;
    margin: 10px auto;
    border: double 1px #D4EDDA;
}
</style>
<body>
    <div class="">
        <?php
            include 'Header.php';
        ?>
    </div>
    <!-- The Main Registeration -->

    <div class="register">
        <div class="main">  
            <div id="response"></div>
            <h2 class="main-text">Registration</h2>
            <div id="error-message"></div>
            <div id="success-message"></div>
            <form method="POST" id="formRegister" class="labels">
                <div class="feild">
                    <label for="">Full Name</label>
                    <input class="border-style" type="text" id="fullName" name="fullName">
                </div>

                <div class="feild">
                    <label for="">Username</label>
                    <input class="border-style" type="text" id="username" name="username">
                </div>

                <div class="feild">
                    <label for="">Email</label>
                    <input class="border-style" type="email" id="email" name="email">
                </div>

                <div class="feild">
                    <label for="">Birthdate</label>
                    <input class="border-style" type="date" id="date" name="date">
                </div>

                <div class="feild">
                    <label for="">Phone</label>
                    <input class="border-style" type="tel" id="phone" name="phone">
                </div>

                <div class="feild">
                    <label for="">Address</label>
                    <input class="border-style" type="text" id="address" name="address">
                </div>
                
                <div class="feild">
                    <label for="">Password</label>
                    <input class="border-style" type="password" id="password" name="password">
                </div>

                <div class="feild">
                    <label for="">Re-Password</label>
                    <input class="border-style" type="password" id="RePassword" name="RePassword">
                </div>
                <button type="submit" class="btn">Register</button>
            </form>

        </div>
    </div>


    <!-- ///////// -->
    <div class="">
        <?php
            include 'Footer.php';
        ?>
    </div>
    <script>
        

$('#error-message').hide();
$('#success-message').hide();
$(document).ready(function() {
    $('#formRegister').submit(function(e) {
        e.preventDefault(); // Prevent form submission
        
        // Clear previous error messages
        
        
        // Retrieve form data
        var username = $('#username').val();
        var email = $('#email').val();
        var fullname = $('#fullName').val();
        var rePasword = $('#RePassword').val();
        var password = $('#password').val();
        var date = $('#date').val();
        var phone = $('#phone').val();
        var address = $('#address').val();
        
        // Basic validation
        if (fullname.trim() === '') {
            $('#error-message').show();
            $('#error-message').html('Please enter a full name');
            $('#fullName').removeClass("border-style");
            $('#fullName').addClass("Notvalid");
            return false;
        }
        else {
            $('#fullName').addClass("border-style");
            $('#fullName').removeClass("Notvalid");
        }


        // validate of username
        if (username.trim() === '') {
            $('#error-message').show();
            $('#error-message').html('Please enter a username');
            $('#username').removeClass("border-style");
            $('#username').addClass("Notvalid");
            return false;
        }
        else {
            $('#username').addClass("border-style");
            $('#username').removeClass("Notvalid");
        }
        
        // validate of email
        if (email.trim() === '') {
            $('#error-message').show();
            $('#error-message').html('Please enter an email');
            $('#email').removeClass("border-style");
            $('#email').addClass("Notvalid");
            return false;
        }
        else {
            $('#email').addClass("border-style");
            $('#email').removeClass("Notvalid");
        }

        // validate of password
        if (password.trim() === '') {
            $('#error-message').show();
            $('#error-message').html('Please enter a password');
            $('#password').removeClass("border-style");
            $('#password').addClass("Notvalid");
            return false;
        }
        else {
            $('#password').addClass("border-style");
            $('#password').removeClass("Notvalid");
        }
        

        // validate of phone
        if (phone.trim() === '') {
            $('#error-message').show();
            $('#error-message').html('Please enter a Phone number');
            $('#phone').removeClass("border-style");
            $('#phone').addClass("Notvalid");
            return false;
        }
        else {
            $('#phone').addClass("border-style");
            $('#phone').removeClass("Notvalid");
        }
        

        // validate of address
        if (address.trim() === '') {
            $('#error-message').show();
            $('#error-message').html('Please enter a Address');
            $('#address').removeClass("border-style");
            $('#address').addClass("Notvalid");
            return false;
        }
        else {
            $('#address').addClass("border-style");
            $('#address').removeClass("Notvalid");
        }

        // regex in case of validation
        var phoneNumberPattern = /^(010|011|012)[0-9]{8}$/;
        
        // Test the phone number pattern
        if (!phoneNumberPattern.test(phone)) {
            $('#error-message').html('Please enter a Phone number');
            $('#error-message').show();
            return false;
        }

        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (!emailRegex.test(email)) {
            $('#error-message').show();
            $('#error-message').html('Please enter a valid email');
            $('#email').addClass("Notvalid");
            return false;
        }
        // If all validation passes, you can proceed with form submission
        // Here, you can use AJAX to submit the form data to the server
        
        // Example AJAX request:
        
        $.ajax({
            type: 'POST',
            url: 'submit.php',
            data: $('#formRegister').serialize(),
            success: function(response) {
                $('#response').html(response); 
            },
            error: function(xhr, status, error) {
                $('#response').html(error); 
            }
        });
        
        
        // For demonstration, we'll just log the form data
        console.log('Form submitted successfully!');
        console.log('Username: ' + username);
        console.log('Email: ' + email);
        console.log('Password: ' + password);
        $('#error-message').hide();
        $('#success-message').addClass("success-message");
        $('#success-message').show();
        $('#success-message').html('Form submitted successfully!');

    });
});

console.log("goooooo")
    </script>
</body>
</html>