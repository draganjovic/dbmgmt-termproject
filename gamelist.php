<!DOCTYPE html>
<html>
<head>
    <title>Videogames of 2016</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="gamelistOverall">
        <h1>Videogames of 2016</h1>
        <div id="signup">
            <a href="accountcreate.php">Sign Up</a>
        </div>
        <hr >

        <table align="left" cellspacing="5" cellpadding="8">
            <tr>
                <td align="left"><b>Title</b></td>
                <td align="left"><b>Platform</b></td>
                <td align="left"><b>Released</b></td>
                <td align="left"><b>Rating</b></td>
                <td align="left"><b>Genre</b></td>
                <td align="left"><b>Company</b></td>
            </tr>

        <?php
            //connect to the database
            $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
            //check for failure
            if ($conn->connect_errno) {
                printf("connection failed %s\n", $conn->connect_error);
                exit();
            }
            $qry = "SELECT * FROM VIDEOGAMES";

            //search for a value
            echo '<form action="" method="post">';
            echo '<br /><div id="search"><b>Search By: </b><input type="text" name="searchString" size="30" maxlength="50">  <select name="searchtype">';
            echo '<option value="title">Title</option><option value="gameplatform">Platform</option><option value="rating">Rating</option><option value="genre">Genre</option><option value="company">Company</option>';
            echo '</select>';
            echo '  <input type="submit" name="search" value="Search"></div></form>';

            if(isset($_POST['search'])) {
                $qry = "SELECT * FROM VIDEOGAMES WHERE " . $_POST['searchtype'] . " LIKE '" . $_POST['searchString'] . "%'";
            }

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
                            '<form action="gameinfo.php" method="post"><button name="moreInfo" value="' . $row['title'] . '|' . $row['gameplatform'] . '" type="submit">More Info</button></td></form>' .
                            '</tr>';
                    }

                    echo '</table>';

                    $result->close();
                }

        ?>


        <?php
            $conn->close();
        ?>

    </div>
</body>
</html>