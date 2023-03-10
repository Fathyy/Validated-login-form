<?php
require __DIR__. '/inc/header.php';
// require __DIR__. '/../inc/header.php';
// require 'inc/header.php'?>

<main class="items-wrapper">
<div class="form-wrapper">
    <form action="action.php" method="post" class="actual-form">
        <div class="form-group">
            <input type="text" name="fname" id="fname" placeholder="Full name">
        </div>

        <div class="form-group">
            <input type="text" name="username" id="username" placeholder="Username">
        </div> 

        <div class="form-group">
            <input type="text" name="email" id="email" placeholder="Email">
        </div>

        <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Your Password">
        </div>

        <div class="form-group">
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password">
        </div>

        <div class="form-group">
        <p>Already have an account? Login
            <a href="login.php">Here</a></p>
    </div>

        <div class="login-signup">
            <input type="submit" value="Signup" class="submit">
        </div>
</form>
</div>
</main>
<?php
// require __DIR__. '/../inc/footer.php';
require __DIR__. '/inc/footer.php';?>