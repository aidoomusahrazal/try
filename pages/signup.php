<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/styles.css">
    <title>Try out</title>
</head>

<body>
    <nav>
        <h2>Login</h2>
        <ul>
            <li><a href="">Home</a></li>
            <li><a href="">About</a></li>
            <li><a href="">Services</a></li>
            <li><a href="">Login</a></li>
            <li><a href="/pages/signup.php">Sign up</a></li>
        </ul>
    </nav>
    <section class="signup">
        <form action="../includes/signup.inc.php" method="post">
            <h2>Sign Up</h2>
            <label for="name">Username/Password</label>
            <input type="text" name="name" placeholder="Full Name">
            <label for="email">Email</label>
            <input type="email" name="email" placeholder="Username/ Email">
            <label for="username">Username/Password</label>
            <input type="text" name="username" placeholder="Username">

            <label for="pwd">Password</label>
            <input type="password" name="pwd" placeholder="password">
            <label for="rpwd">Repeat Password</label>
            <input type="password" name="rpwd" placeholder="password">
            <button type="submit" name="submit" >Sign Up</button>
            <a href="../index.php">Have an account?</a>
        </form>
    </section>
</body>

</html>