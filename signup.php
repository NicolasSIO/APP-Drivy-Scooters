<?php
    require_once 'header.php';
?>
    <form action="/action_page.php" style="padding-top:90px;border:1px solid #ccc;">
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="fistname"><b>Fistname</b></label>
            <input type="text" placeholder="Enter Fistname" name="fistname" required>

            <label for="lastname"><b>Lastname</b></label>
            <input type="text" placeholder="Enter Lastname" name="lastname" required>

            <label for="phone_number"><b>Phone number</b></label>
            <input type="text" placeholder="Enter Phone number" name="phone_number" required>

            <label for="email"><b>Email</b></label>
            <input type="email" placeholder="Enter Email" name="email" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

            <label for="birthday"><b>Birthday</b></label>
            <input type="date" placeholder="Enter Birthday" name="birthday" required>

            <label>
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
            </label>

            <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
