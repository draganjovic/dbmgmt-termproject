<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <?php session_start();
    
    //log a user out if they desire
        if(isset($_GET['logout'])) {
            if(isset($_SESSION['userName'])) {
                $_SESSION = array();
                if ($_COOKIE[session_name()]) {
                    setcookie(session_name(), '', time() - 42000, '/');
                }
                session_destroy();
                header('Location: login.php');
            }
            else {
                header('Location: login.php');
            }    
        }
    //logout not hit? just redirect
        else {
            header('Location: login.php');
        }
    
    ?>
    
    
</body>
</html>