<!DOCTYPE html>
<html>
<head>
<title>Videogame Chatroom</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="chatStyle.css">
</head>
<body>

<div id="chatOverall">
<h1>Videogames of 2016</h1>
    <div id="logout">
        <?php
        session_start();
        if (isset($_SESSION['userName'])) { ?>
        Welcome back, <?php echo $_SESSION['userName'] . "!<br >"; ?>
        <a href="loggingout.php?logout=1">Logout</a><br >
        <a href="accountManagement.php">Account Management</a><br >
        <a href="gamelist.php">Game List</a>
    </div> </div> <br ><hr />
    <?php 
    
        if (isset($_POST['submit'])) {
            $qry = "INSERT INTO chatMessage(username, message) VALUES ('{$_SESSION['userName']}', '{$_POST['newMsg']}');";
            
            //connect to the database
            $conn = mysqli_connect("localhost:3306", "root", "", "dbmgmt");
            //check for failure
            if ($conn->connect_errno) {
                printf("connection failed %s\n", $conn->connect_error);
                exit();
            }
            
            mysqli_query($conn, $qry);
            
            $conn->close();
            
        }
    
    ?>
    <h3>Videogames Chatroom</h3>
    <div id="recieveMessageBox">
        <p name="msgs" id="msgs"></p>
    </div>
    <div id="sendMessageBox"><br >
        <form action="" method="post">
            <textarea name="newMsg" id="newMsg" rows="5" cols="150" maxlength="200"></textarea><br >
            <button type="submit" name="submit" id="submit">Send</button>
        </form>
    </div>
    
    <?php echo "<script type='text/javascript' src='chat.js'></script>"; }
    else {
        header('location: login.php');
    }
    
    ?>
</body>
</html>