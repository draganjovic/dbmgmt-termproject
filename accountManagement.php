<!DOCTYPE html>
<html>
<head>
    <title>Account Management</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="accountManagementOverall">
        <h1>Videogames of 2016</h1>
        <div id="logout">
        <?php
        session_start();
        if (isset($_SESSION['userName'])) { ?>
        Welcome back, <?php echo $_SESSION['userName'] . "!<br >";?>
        <a href="loggingout.php?logout=1">Logout</a><br >
        <?php } ?>
        <a href="gamelist.php">Game List</a>
            <br >
            <a href="chat.php">Chat</a>
        </div> </div><hr />
        <h3>Account Management: </h3>
        
        <div id="accountInformation">
            <?php
            //make sure site was gotten to correctly
            
            if (!empty($_POST['userName'])) {
                
                //connect to the database
                $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
                //check for failure
                if ($conn->connect_errno) {
                    printf("connection failed %s\n", $conn->connect_error);
                    exit();
                }
                
                //make sure user doesn't exist
                $qry = "SELECT * FROM USERS WHERE username = '" . $_POST['userName'] . "' LIMIT 1;";
                $result = mysqli_query($conn, $qry);
                $numRows = mysqli_num_rows($result);
                if ($numRows > 0 && isset($_POST['submit'])) {
                    $conn->close();
                    echo "That account already exists.  This page will redirect shortly.";
                    header('Refresh: 3;url=accountcreate.php');
                }
                else {
                    //log them in to their new account
                    $_SESSION['userName'] = $_POST['userName'];
                    echo '<label><b>Username:</b> </label>';

                    echo $_POST['userName'] . '<br > <br >';

                    //new account added (if not new then will look like normal acct page)
                    if (isset($_POST['submit'])) {
                        $qry = "INSERT INTO USERS (username, accPassword, favoriteTitle, favoritePlatform) values ('" . $_POST['userName'] . "', '" . $_POST['password'] . "', NULL, NULL);";

                        mysqli_query($conn, $qry);
                    }
                    //if favorite updated
                    else if (isset($_POST['updateFav'])) {
                        //break the game up into two: one for title and one for gameplatform
                        $gameInfo = explode('|', $_POST['gameChoice']);
                        $qry = "UPDATE USERS SET favoriteTitle = '" . $gameInfo[0] . "', favoritePlatform = '" . $gameInfo[1] . "' WHERE username = '" . $_POST['userName'] . "';";

                        mysqli_query($conn, $qry);

                    }

                    //check if favorite is set
                    $qry = "SELECT favoriteTitle FROM USERS WHERE username = '" . $_POST['userName'] . "';";
                    if ($result = mysqli_query($conn, $qry)) {
                        echo "<b>Current Favorite Game of 2016: </b>" . mysqli_fetch_array($result)['favoriteTitle'] . "<br ><br >";
                    }

                    //for updating favorite game
                    echo '<form action="" method="post">';

                    echo '<input type="hidden" name="userName" value="' . $_POST['userName'] . '">';
                    echo '<b>Update Favorite Game: </b>';
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

                    echo '</form><br >';

                    //button to delete account
                    echo '<form action="acctdeleted.php" method="post">';

                    echo '<input type="hidden" name="userName" value="' . $_POST['userName'] . '">';
                    echo '<input type="submit" name="deleteacct" value="Delete Account">';

                    echo '</form>';
                    $conn->close();
                }
                
            }
            
            //we're already logged in
            else if (isset($_SESSION['userName'])) {
                //connect to the database
                $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
                //check for failure
                if ($conn->connect_errno) {
                    printf("connection failed %s\n", $conn->connect_error);
                    exit();
                }
                
                    echo '<label><b>Username:</b> </label>';

                    echo $_SESSION['userName'] . '<br > <br >';

                    //if favorite updated
                    if (isset($_POST['updateFav'])) {
                        //break the game up into two: one for title and one for gameplatform
                        $gameInfo = explode('|', $_POST['gameChoice']);
                        $qry = "UPDATE USERS SET favoriteTitle = '" . $gameInfo[0] . "', favoritePlatform = '" . $gameInfo[1] . "' WHERE username = '" . $_POST['userName'] . "';";

                        mysqli_query($conn, $qry);

                    }

                    //check if favorite is set
                    $qry = "SELECT favoriteTitle FROM USERS WHERE username = '" . $_SESSION['userName'] . "';";
                    if ($result = mysqli_query($conn, $qry)) {
                        echo "<b>Current Favorite Game of 2016: </b>" . mysqli_fetch_array($result)['favoriteTitle'] . "<br ><br >";
                    }

                    //for updating favorite game
                    echo '<form action="" method="post">';

                    echo '<input type="hidden" name="userName" value="' . $_SESSION['userName'] . '">';
                    echo '<b>Update Favorite Game: </b>';
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

                    echo '</form><br >';

                    //button to delete account
                    echo '<form action="acctdeleted.php" method="post">';

                    echo '<input type="hidden" name="userName" value="' . $_SESSION['userName'] . '">';
                    echo '<input type="submit" name="deleteacct" value="Delete Account">';

                    echo '</form>';
                    $conn->close();
                }
            
            else {
                echo "No information to display.";
            }
            ?>
    
</body>
</html>