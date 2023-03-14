<?php
require __DIR__. '/inc/header.php';
?>

<main class="items-wrapper">
<div class="form-wrapper">
    <form action="action.php" method="post" class="actual-form">
        <div class="form-group">
            <input type="text" name="fname" id="fname" placeholder="Full name" value="<?php echo $inputs['fname'] ?? ''?>">
            <small><?php echo $errors['fname'] ?? ''?></small>
        </div>

        <div class="form-group">
            <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $inputs['username'] ?? ''?>">
            <small><?php echo $errors['username'] ?? ''?></small>
        </div> 

        <div class="form-group">
            <input type="text" name="email" id="email" placeholder="Email" value="<?php echo $inputs['email'] ?? ''?>">
            <small><?php echo $errors['email'] ?? ''?></small>
        </div>

        <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Your Password" value="<?php echo $inputs['password'] ?? ''?>">
            <small><?php echo $errors['password'] ?? ''?></small>
        </div>

        <div class="form-group">
            <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" value="<?php echo $inputs['cpassword'] ?? ''?>">
            <small><?php echo $errors['cpassword'] ?? ''?></small>
        </div>

        <div class="form-group">
        <p>Already have an account? Login
            <a href="login.php">Here</a></p>
    </div>

        <div class="login-signup">
            <input type="submit" value="Signup" class="submit" name="signup">
        </div>
</form>
</div>
</main>
<?php
require __DIR__. '/inc/footer.php';?>

