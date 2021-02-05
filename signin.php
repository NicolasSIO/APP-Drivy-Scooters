<?php
    require_once 'header.php';
?>
<form action="/action_page.php" style="padding-top:90px;border:1px solid #ccc;">
    <div class="container">
        <h1>Sign In</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="email" placeholder="Enter Email" name="email" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required>

        <label>
            <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
        </label>

        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signinbtn">Sign In</button>
        </div>
    </div>
</form>