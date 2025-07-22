 <?php   include("header.php");  ?>

 <div class="signup">
    <form action="register.php" class="form-signin" method="post">
        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>

        <label for="inputEmail" class="sr-only">name</label>
        <input type="text" class="form-control" id="inputEmail" name="name" placeholder="name" required autofocus>

         <label for="inputEmail" class="sr-only">surname</label>
        <input type="text" class="form-control" id="inputEmail" name="surname" placeholder="surname"surrequired autofocus>
       
         <label for="inputEmail" class="sr-only">username</label>
        <input type="text" class="form-control" id="inputEmail" name="username" placeholder="username" required autofocus>
        
         <label for="inputEmail" class="sr-only">email</label>
        <input type="email" class="form-control" id="inputEmail" name="email" placeholder="email" required autofocus>

         <label for="inputPassword" class="sr-only">password</label>
        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="password" required autofocus>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">signup</button>

         <small>Already have account ? <a href="login.php">Log in</a></small>
        <p class="mt-5 mb-3 text-muted">Digital School  &copy; 2025</p>
    </form>
 </div>


 