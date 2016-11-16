<!DOCTYPE html>
<html>
<head>
    <title>Account Management</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="accountManagementOverall">
        <h1>Videogames of 2016</h1><hr >
        <h3>Account Management: </h3>
        
        <div id="accountInformation">
            <label><b>Username:</b> </label>
            <?php 
                echo $_POST['userName'];
            ?>
            <br >
            <label><b>Password:</b> </label>
            <?php 
                echo $_POST['password'];
            ?>
            
            <?php
                //connect to the database
                $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
                //check for failure
                if ($conn->connect_errno) {
                    printf("connection failed %s\n", $conn->connect_error);
                    exit();
                }
            
            $qry = "INSERT INTO USERS (username, accPassword, favoriteTitle, favoritePlatform) values ('" . $_POST['userName'] . "', '" . $_POST['password'] . "', NULL, NULL);";
            
            if(mysqli_query($conn, $qry)) {
             echo "Success!";   
            }
            else {
                echo 'failure';
            }
            
            $conn->close();
            
            ?>
        
        <!--Need to add favorite game option list -->
        <form action="" method="post">
            
        </form>
            
        </div>
    </div>
    
</body>
</html>