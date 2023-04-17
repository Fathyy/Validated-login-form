<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
<main class="items-wrapper">
<div class="form-wrapper">
    <form action="action.php" method="post" class="actual-form">

    <div class="heading">
        <h3>Signup Form</h3>
    </div>

        <div class="form-group">
            <input type="text" name="fname" id="fname" placeholder="First name">
        </div>

        <div class="form-group">
            <input type="text" name="lname" id="lname" placeholder="last name">
        </div>

        <div class="form-group">
            <input type="text" name="email" id="email" placeholder="Email">
        </div>

        <div class="form-group">
            <input type="text" name="password" id="password" placeholder="Password">
        </div>

        <div class="form-group">
            <input type="text" name="cpassword" id="cpassword" placeholder="Confirm Password">
        </div>

        <div class="last-p">
        <p>Already have an account? Login
            <a href="login.php">Here</a></p>
    </div>

        <div class="login-signup">
            <input type="submit" value="Signup" class="submit" name="signup">
        </div>
</form>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>

