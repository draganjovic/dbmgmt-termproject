<!DOCTYPE html>
<html>
<head>
    <title>Game Info</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <h1>Videogames of 2016</h1>
    <div id="logout">
        <?php
        session_start();
        if (isset($_SESSION['userName'])) { ?>
        Welcome back, <?php echo $_SESSION['userName'] . "!<br >"; ?>
        <a href="loggingout.php?logout=1">Logout</a><br >
        <a href="accountManagement.php">Account Management</a><br >
        <a href="gamelist.php">Game List</a>
    </div> <hr />
    <h3>Game Info: </h3>
    
        <?php
        //connect to the database
        $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
        //check for failure
        if ($conn->connect_errno) {
            printf("connection failed %s\n", $conn->connect_error);
            exit();
        }
    
        //break the game up into two: one for title and one for gameplatform
        if (isset($_POST['moreInfo'])) {
            $gameInfo = explode('|', $_POST['moreInfo']);

            //query for the game information
            $qry = "SELECT * FROM VIDEOGAMES WHERE title = '" . $gameInfo[0] . "' AND gameplatform = '" . $gameInfo[1] . "';";

            if ($result = mysqli_query($conn, $qry)) {
                $row = mysqli_fetch_array($result);
                $encode = base64_encode($row['image']);
                $decode = base64_decode($encode);
                echo "<img src='$decode' /> <br />";
                echo 'Title: ' . $row['title'] . '<br >Platform: ' . $row['gameplatform'] . '<br >Release Date: ' . $row['releasedate'] . '<br >Genre: ' . $row['genre'] . "<br >Company: " . $row['company'] . "<br ><br >Summary: " . $row['summary'];
            }
            
            //does a join of two tables to show users who list the game as their favorite
            $qry = "SELECT username FROM Users JOIN Videogames ON Users.favoritetitle = Videogames.title AND Users.favoriteplatform = Videogames.gameplatform WHERE Videogames.title = '{$gameInfo[0]}' AND Videogames.gameplatform = '{$gameInfo[1]}';";
            
            echo '<h3>The following users list this game as their favorite:</h3>';
            echo '<h4>';
            if ($result = mysqli_query($conn, $qry)) {
                while($row = mysqli_fetch_array($result)) {
                    echo $row['username'] . '<br >';
                }
            }
            echo '</h4>';
        }
        else {
            $conn->close();
            header('Location: login.php');
        }
        $conn->close();
        }
        else header('Location: login.php');
    ?>
    
</body>
</html>