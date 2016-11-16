<!DOCTYPE html>
<html>
<head>
    <title>Videogames of 2016</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h1>Videogames of 2016</h1><hr >
    
    <table align="left" cellspacing="5" cellpadding="8">
        <tr>
            <td align="left"><b>Title</b></td>
            <td align="left"><b>Platform</b></td>
            <td align="left"><b>Released</b></td>
            <td align="left"><b>Rating</b></td>
            <td align="left"><b>Genre</b></td>
            <td align="left"><b>Company</b></td>
        </tr>
        
        
        <!-- Need database information here with game search-->
    
    <?php
        //connect to the database
        $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
        //check for failure
        if ($conn->connect_errno) {
            printf("connection failed %s\n", $conn->connect_error);
            exit();
        }
        $qry = "SELECT * FROM VIDEOGAMES";
    
        //get the values from the database and print them out
                if ($result = mysqli_query($conn, $qry)) {
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<tr><td align="left">' . 
                            $row['title'] . '</td><td align="left">' . 
                            $row['gameplatform'] . '</td><td align="left">' .
                            $row['releasedate'] . '</td><td align="left">' . 
                            $row['rating'] . '</td><td align="left">' .
                            $row['genre'] . '</td><td align="left">' . 
                            $row['company'] . '</td><td align="left">' .
                            '</tr>';
                    }

                echo '</table>';

                    $result->close();
                }
        
    ?>
        
    
    <?php
        $conn->close();
    ?>
</body>
</html>