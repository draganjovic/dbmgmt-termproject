<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <?php session_start();
    
        if(isset($_POST['userName'])) {
            $_SESSION['userName'] = $_POST['userName'];
            header('Location: gamelist.php');
        }
        else {
            header('Location: login.php');
        }
    
    ?>
    
    
</body>
</html>