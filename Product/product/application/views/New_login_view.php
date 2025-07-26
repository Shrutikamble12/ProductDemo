<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="<?= base_url() ?>Assets\images\330703.png" sizes="32x32" type="image/png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppies", sans-serif;
        }
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-image: url('<?= base_url() ?>Assets/images/desktop-wallpaper-newspaper-background-black-and-white-newspaper.jpg');
             /*background-image: url('<?= base_url() ?>Assets/images/backgroundinimg.jpg')*/
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
        }
        .apper {
            width: 420px;
            background-color: transparent;
            border: 2px solid rgba(255, 255, 255, .2);
            backdrop-filter: blur(20px);
            box-shadow: 0 0 10px rgba(0, 0, 0, .2);
            color: white;
            border-radius: 10px;
            padding: 30px 40px;
        }
        .wrapper h1 {
            font-size: 36px;
            text-align: center;
            background: -webkit-linear-gradient(#c92a10, #ffc107);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .wrapper .input-box {
            position: relative;
            width: 100%;
            height: 50px;
            margin: 30px 0;
        }
        .input-box input {
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            border: 2px solid rgba(255, 255, 255, .2);
            border-radius: 40px;
            font-size: 16px;
            color: #fff;
            padding: 20px 45px 20px 20px;
        }
        .input-box input::placeholder {
            color: #fff;
        }
        .input-box input:focus {
            box-shadow: 0 0 0 0.1rem rgb(250, 250, 253);
        }
        .input-box i {
            position: absolute;
            color: white;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
        }
        .wrapper .remember-forgot {
            display: flex;
            justify-content: space-between;
            font-size: 14.5px;
            margin: -15px 0 15px;
        }
        .remember-forgot label input {
            accent-color: #fff;
            margin-right: 3px;
        }
        .remember-forgot a {
            color: #fff;
            text-decoration: none;
        }
        .remember-forgot a:hover {
            text-decoration: underline;
        }
        .wrapper .btn {
            width: 100%;
            height: 45px;
            background-color: #fff;
            border: none;
            outline: none;
            border-radius: 40px;
            box-shadow: 0 0 10px rgba(0, 0, 0, .1);
            cursor: pointer;
            font-size: 16px;
            color: #333;
            font-weight: 600;
        }
        .wrapper .register-Link {
            font-size: 14.5px;
            text-align: center;
            margin: 20px 0 15px;
        }
        .register-Link p a {
            color: #fff;
            text-decoration: none;
            font-weight: 600;
        }
        .register-Link p a:hover {
            text-decoration: underline;
        }
        .validationText {
            color: red;
            margin-left: 12px;
            font-size: 12px;
            font-family: sans-serif;
            font-weight: 900;
        }
        #loading {
            position: fixed;
            width: 100%;
            height: 100vh;
            background: rgba(255, 255, 255, 0.8);
            display: none;
            justify-content: center;
            align-items: center;
            z-index: 99999;
        }
        .loader {
            width: 50px;
            padding: 8px;
            aspect-ratio: 1;
            border-radius: 50%;
            background: #25b09b;
            --_m: 
                conic-gradient(#0000 10%,#000),
                linear-gradient(#000 0 0) content-box;
            -webkit-mask: var(--_m);
                    mask: var(--_m);
            -webkit-mask-composite: source-out;
                    mask-composite: subtract;
            animation: l3 1s infinite linear;
        }
        @keyframes l3 {
            to { transform: rotate(1turn); }
        }
        .footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            color: orange;
            text-align: center;
            padding: 50px;
            font-size: 16px;
            font-weight: 900;
        }
        .footer a {
            color: orange;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div id="loading">
        <div class="loader"></div>
    </div>

   <div class="wrapper">
        <form role="form" id="Form" action="Dashbord/create" method="post" style="border: 2px solid transparent;
    padding: 18px;
    backdrop-filter: blur(20px);
    border-image: linear-gradient(45deg, #e5c31f, #17edef) 1;
    border-image-slice: 1;">
            <h1>Login</h1>
            <p style="text-align: center;" class="validationText" id="errorLogin"></p>
            <div class="input-box">
                <input type="text" placeholder="Username" id="username" name="username" value="<?php if(!empty($data)) echo $data[0]->username;?>" required>
                <i class="fa-solid fa-user"></i>
                <p class="validationText" id="erroruname"></p>
            </div>
            
            <div class="input-box">
                <input type="password" placeholder="Password" id="password" name="password" value="<?php if(!empty($data)) echo $data[0]->password;?>" required>
                <i class="fa-solid fa-lock"></i>
                <p class="validationText" id="errorpassword"></p>
            </div>

            <button type="submit" class="btn" id="btn_login">Login</button>
            <div class="register-Link">
                <!-- <p>Don't have an account? <a href="">Register</a></p> -->
            </div>
        </form>
    </div>

    <div class="footer">
        <p class="m-0"><a href="#">Designed &amp; Developed By Comtranse Technology Pvt.Ltd.</a> 2024</p>
    </div>

    <script src="<?php echo base_url(); ?>Assets/js/jquery.min.js"></script> 
    <script src="<?php echo base_url(); ?>Assets/js/CreateJs/New_login.js"></script> 
    <!-- <script>
    document.getElementById('btn_login').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the form from submitting immediately
        document.getElementById('loading').style.display = 'flex';

        // Get the username and password values
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Validate credentials
        if (username === 'admin' && password === 'admin') {
            // Simulate an async operation (e.g., an AJAX request)
            setTimeout(function() {
                document.getElementById('loading').style.display = 'none';
                // Form can be submitted here
                document.getElementById('Form').submit(); // Submit the form
            }, 2000); // Adjust this time based on your needs
        } else {
            // Show an error message
            document.getElementById('errorLogin').textContent = 'Invalid username or password';
            document.getElementById('loading').style.display = 'none';
        }
    });
</script> -->

<script>
    document.getElementById('btn_login').addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the form from submitting immediately
        document.getElementById('loading').style.display = 'flex';

        // Get the username and password values
        var username = document.getElementById('username').value;
        var password = document.getElementById('password').value;

        // Validate credentials
        if (username === 'admin' && password === 'admin') {
            // Simulate an async operation (e.g., an AJAX request)
            setTimeout(function() {
                document.getElementById('loading').style.display = 'none';
                // Form can be submitted here
                document.getElementById('Form').submit(); // Submit the form
            }, 1000); // Adjust this time to 1 second
        } else {
            // Show an error message and hide the loader immediately
            document.getElementById('errorLogin').textContent = 'Invalid username or password';
            document.getElementById('loading').style.display = 'none';
        }
    });
</script>


</body>
</html>


