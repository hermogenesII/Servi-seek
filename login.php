<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Log In</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" type="text/css" href="login.css">
    </head>
    <body>
        <h1>Servi-Seek</h1>
        <h3>Marinduque's Marketplace of Services</h3>
        <div class="sign-in">
        <h2><i class="fa-solid fa-user-astronaut"></i> Login</h2>
        <form class="" action="login_function.php" method="post" autocomplete="off">
            <?php if (isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php }?>
            <div class="text">
                <input type="text" name="usernameemail" >
                <span></span>
                <label for=""><i class="fa-solid fa-user-large"></i> Username or Email: </label>
            </div>
            <div class="text">
                <input type="password" name="password">
                <span></span>
                <label for=""><i class="fa-solid fa-key"></i> Password: </label>
            </div>
            <div class="log">
                <input type="submit" name="submit" value="Log In">
            </div>
            <div class="login">
            Don't have any account?<a href="register.php"> Sign Up</a>
            </div>
        </form>


    </body>

</html>
