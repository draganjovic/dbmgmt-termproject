<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    
    <?php session_start(); 
    
        if (isset($_SESSION['userName'])) {
            header('Location: gamelist.php');
        }
        else {
    
    ?>
    
    <div id="loginOverall">
        <h1>Videogames of 2016</h1><hr >
        <div id="loginForm">
            <h3>Login:</h3>
            <form action="loggingin.php" method="post">
                <label><b>Username:</b> </label><input type="text" id="userName" name="userName" size="20" maxlength="20"><br > <br >
                <label><b>Password:</b> </label><input type="password" id="password" name="password" size="20" maxlength="20"><br > <br >
                <input type="submit" id="login" name="login">
            </form>

            <p>Don't have a account?  <a href="accountcreate.php">Sign Up</a>!</p>

            
        </div>
    </div>
    
    <?php } ?>
</body>
</html>