<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
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
    <section class="login">
        <form action="includes/login.inc.php" method="post" >
            <h2>Login</h2>
            <label for="email">Username/Password</label>
            <input type="text" name="email" placeholder="Username/ Email" >

            <label for="pwd">Password</label>
            <input type="password"  name="pwd" placeholder="password" >
            <button type="submit">Login</button>
            <a href="./pages/signup.php">Have an account?</a>
        </form>
    </section>
</body>
</html>