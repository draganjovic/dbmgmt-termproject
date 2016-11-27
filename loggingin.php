<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <?php session_start();
    
        if(isset($_POST['userName'])) {
            
            //connect to the database
            $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
            //check for failure
            if ($conn->connect_errno) {
                printf("connection failed %s\n", $conn->connect_error);
                exit();
            }
            
            $qry = "SELECT * FROM users WHERE username = '{$_POST['userName']}' AND accPassword = '{$_POST['password']}'";
            echo $qry;
            
            $result = mysqli_query($conn, $qry);
            if ($result !== FALSE) {

                $_SESSION['userName'] = $_POST['userName'];
                header('Location: gamelist.php');
                
            }
            else {
                echo "The username or password is invalid";
                //header('Refresh: 3;url=login.php');
            }
            
            $conn->close();
            
        }
    
        else {
            header('Location: login.php');
        }
    
    ?>
    
    
</body>
</html>