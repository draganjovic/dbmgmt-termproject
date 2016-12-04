<?php 

    //connect to the database
    $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
    //check for failure
    if ($conn->connect_errno) {
        printf("connection failed %s\n", $conn->connect_error);
        exit();
    }

    $qry = "SELECT * FROM chatmessage";
    $result = mysqli_query($conn, $qry);

    while($row = mysqli_fetch_array($result)) {
        echo $row['username'] . ": " . $row['message'] . "\n";
    }

    $conn->close();

?>