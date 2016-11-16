<!DOCTYPE html>
<html>
<head>
    <title>Account Deleted</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
    
<body>

    <?php
        
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
                echo "Account Sucessfully Deleted";
            }

            $conn->close();
        }
        else
            echo "Nothing to delete.";
    ?>
    
</body>

</html>