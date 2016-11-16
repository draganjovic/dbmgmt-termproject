<!DOCTYPE html>
<html>
<head>
    <title>Game Info</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>

    <h1>Videogames of 2016</h1><hr >
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
        $gameInfo = explode('|', $_POST['moreInfo']);
    
        $qry = "SELECT * FROM VIDEOGAMES WHERE title = '" . $gameInfo[0] . "' AND gameplatform = '" . $gameInfo[1] . "';";
    
        if ($result = mysqli_query($conn, $qry)) {
            $row = mysqli_fetch_array($result);
            echo 'Title: ' . $row['title'] . '<br >Platform: ' . $row['gameplatform'] . '<br >Release Date: ' . $row['releasedate'] . '<br >Genre: ' . $row['genre'] . "<br >Company: " . $row['company'] . "<br ><br >Summary: " . $row['summary'];
        }
    
        $conn->close();
    ?>
    
</body>
</html>