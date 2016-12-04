<!DOCTYPE html>
<html>
<head>
    <title>Account Deleted</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
    
<body>

    <?php
        session_start();
        header('Refresh: 3;url=gamelist.php');
        if (isset($_POST['deleteacct'])) {
            //connect to the database
            $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
            //check for failure
            if ($conn->connect_errno) {
                printf("connection failed %s\n", $conn->connect_error);
                exit();
            }

            $qry = "DELETE FROM USERS WHERE username = '" . $_POST['userName'] . "';";
            if (mysqli_query($conn, $qry)) {
                echo "Account Sucessfully Deleted.  This page will redirect shortly.";
            }

            $conn->close();
            
            //remove the session
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
        else
            echo "Nothing to delete.";
    ?>
    
</body>

</html>