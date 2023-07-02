<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
    <form method="POST" action="submit.php">

        <h2>Welcome!</h2><br><br>
        <!--<label style="display: block; margin-right: 240px;" for="email">E-mail:</label>-->
        <div>
        <i class="fa fa-envelope"></i>
        <input type="email" id="email" name="email" required><br>
        <!--<label style="display: block; margin-right: 220px;" for="password">Password:</label>-->
        <i class="fa fa-lock"></i>
        <input type="password" id="pass" name="pass" required><br>
        </div>
        <a class = "pass"; href="#">Forgot Password?</a>
        <input type="checkbox" id="remember_me" name="remember_me">
        <label style="display: inline;margin-right: 150px; color: black; font-size: small;" for="remember_me">Remember Me</label><br><br>
        <!--<label style="display: block; margin-right: 130px;font-size: small; " for="language">Select Your Language!</label>
        <select id="language" name="language">
            <option>Tamil</option>
            <option>Engish</option>
            <option>Hindi</option>
            <option>Others</option>
        </select><br><br>-->
        <li style="font-size: 10px">Read our Terms & Conditions</li>
        <li style="font-size: 10px">More Secure</li><br>
        <div>
        <input class="sub" type="submit" value="Submit">
        </div>
        <br>
        <br>
        <div>
        <footer>
            <p> &copy Designed and Developed by<!--<a href="https://www.nrg-phoenix.com/" target="_blank"> NRG Phoenix--> Ari</a></p>
        </footer>
        </div>

</form>

</body>

</html>
