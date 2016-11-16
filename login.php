<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="loginOverall">
        <h1>Videogames of 2016</h1><hr >
        <div id="loginForm">
            <h3>Login:</h3>
            <form action="" method="post">
                <label><b>Username:</b> </label><input type="text" id="userName" name="userName" size="20" maxlength="20"><br > <br >
                <label><b>Password:</b> </label><input type="password" id="password" name="password" size="20" maxlength="20"><br > <br >
                <input type="submit" id="login" name="login">
            </form>

            <p>Don't have a account?  <a href="accountcreate.php">Sign Up</a>!</p>
            
            <?php
            
            if (!empty($_POST['userName'])) {
                
                //connect to the database
                $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
                //check for failure
                if ($conn->connect_errno) {
                    printf("connection failed %s\n", $conn->connect_error);
                    exit();
                }
                
                $qry = "SELECT username, accPassword FROM USERS WHERE username = '" . $_POST['userName'] . "';";
                $result = mysqli_query($conn, $qry);
                $numrows = mysqli_num_rows($result);
                if ($numrows != 1) {
                    echo "User does not exist";
                }
                else if (mysqli_fetch_array($result)['accPassword'] != $_POST['password']) {
                    echo "Password incorrect";
                }
                else {
                    header('Refresh: 0;url=account')
                }
                
                $conn->close();
            
            ?>
            
        </div>
    </div>
</body>
</html>