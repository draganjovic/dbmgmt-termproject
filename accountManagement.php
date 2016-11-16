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
            <?php 
            //make sure site was gotten to correctly
            if (!empty($_POST['userName'])) {
                
                echo '<label><b>Username:</b> </label>';
            
                echo $_POST['userName'];
            ?>
            <br ><br >
            
            <?php
                //connect to the database
                $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
                //check for failure
                if ($conn->connect_errno) {
                    printf("connection failed %s\n", $conn->connect_error);
                    exit();
                }
            
            //new account added (if not new then will look like normal acct page)
            if (isset($_POST['submit'])) {
                $qry = "INSERT INTO USERS (username, accPassword, favoriteTitle, favoritePlatform) values ('" . $_POST['userName'] . "', '" . $_POST['password'] . "', NULL, NULL);";

                mysqli_query($conn, $qry);
            }
            //if favorite updated
            else {
                //break the game up into two: one for title and one for gameplatform
                $gameInfo = explode('|', $_POST['gameChoice']);
                $qry = "UPDATE USERS SET favoriteTitle = '" . $gameInfo[0] . "', favoritePlatform = '" . $gameInfo[1] . "' WHERE username = '" . $_POST['userName'] . "';";
                
                mysqli_query($conn, $qry);

            }

            //for updating favorite game
            echo '<form action="" method="post">';
            
            echo '<input type="hidden" name="userName" value="' . $_POST['userName'] . '">';
            echo 'Favorite: ';
            $qry = "SELECT title, gameplatform FROM VIDEOGAMES";
            
            //get the values from the database and put them in drop down menu
                if ($result = mysqli_query($conn, $qry)) {
                    echo '<select name="gameChoice">';
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<option value="' . $row['title'] . '|' . $row['gameplatform'] . '">' . $row['title'] . '</option>';
                    }
                    echo '</select>  ';

                    $result->close();
                }
            
            echo '<input type="submit" name="updateFav" value="Update Favorite">';
            
            echo '</form>';
            
            
            
            $conn->close();
            }
            
            else {
                echo "No information to display.";
            }
            ?>
            
        </div>
    </div>
    
</body>
</html>