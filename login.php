<?php
require __DIR__. '/inc/header.php';
// require __DIR__. '/../inc/header.php';
?>

<main class="items-wrapper">
<div class="form-wrapper">
<form action="action.php" method="post" class="actual-form">
    <div class="form-group">
        <input type="text" name="lusername" id="username" placeholder="Username" value="<?php echo $inputs['lusername'] ?? ''?>">
        <small><?php echo $errors['username'] ?? ''?></small>
    </div> 

    <div class="form-group">
        <input type="password" name="lpassword" id="password" placeholder="Your Password" value="<?php echo $inputs['lpassword'] ?? ''?>">
        <small><?php echo $errors['password'] ?? ''?></small>
    </div> echo

    <div class="form-group">
        <p>Don't have an account? Sign up
            <a href="register.php">Here</a></p>
    </div>

    <div class="login-signup">
        <input type="submit" value="Login" name="login" class="submit">
    </div>   
</form>
</div>
</main>
<?php
require __DIR__. '/inc/footer.php';
// require __DIR__. '/../inc/footer.php';
?>
