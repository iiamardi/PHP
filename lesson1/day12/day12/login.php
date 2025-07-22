<?php  include ("header.php"); ?>

<div class="login">
    <form action="loginLogic.php" class="form-signin" method="post">
        <h1 class="h3 mb3 fon-weight-normal">Please sign in</h1>
        <label for="inputEmail" class="sr-only">Username</label>
        <input type="text" class="form-control" placeholder="username" name="username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="password" name="password" required >

        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Sign in</button>

        <small>Don't have account ? <a href="signup.php">Sign Up</a></small>
        <p class="mt-5 mb-3 text-muted">Digital School  &copy; 2025</p>
    </form>
</div>

<?php include ("footer.php"); ?>

