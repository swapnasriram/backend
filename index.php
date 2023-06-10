<?php 
require_once "config.php";
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title> User - Login and Register</title>
    <link rel="stylesheet" href="style.css">
</head>
        <body>
            <div id="header">
                <a href="privacy.html">privacy policy</a>
                <a href="privacy.html">term and condition</a>
                
            </div>
            <header>
                <h2>Web Devolopment</h2>
                <nav>
                    <a href="#">HOME</a><li></li>
                    <a href="#">BLOG</a>
                    <a href="#">CONTACT</a>
                    <a href="#">ABOUT</a>
</nav>
<div class="Sign-In-Up">
    <button type='button' onclick="popup('login-popup')">LOGIN</button>
    <button type='button' onclick="popup('register-popup')">REGISTER</button>
</div>
</header>
<div class="popup-container"> id="login-popup">
    <div class="popup">
    <form>
        <h2>
            <span>USER LOGIN></span>
            <button type="reset">X</button>
</h2>
            <input type="text" placeholder="E-mail or Username" name="e-mail or username">
            <input type="password" placeholder="password">
            <button type="submit" class="login-btn">LOGIN</button>
</form>
</div>
</div>

<div class="popup-container"> id="register-popup">
    <div class="register popup">
    <form>
        <h2>
            <span>USER REGISTER></span>
            <button type="reset" onclick="popup('register-popup')">X</button>
</h2>
            <input type="text" placeholder="Full Name" name="fullname">
            <input type="text" placeholder="Username" name="username">
            <input type="email" placeholder="E-mail" name="email">
            <input type="password" placeholder="Password" name="password">>
            <button type="submit" class="register-btn">REGISTER</button>
</form>
</div>
</div>


<script>
    function popup(popup_name)
    {
     get_popup=document.getelementsbyid(popup_name);
     if(get_popup.style.display=="flex")
    {
     get_popup.style.display=="none";
}
else
{
get_popup.style.display="flex";
}
    }
    </script>

</body>
</html>]