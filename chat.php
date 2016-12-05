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
    
    <h3>Videogames Chatroom</h3>
    <div id="recieveMessageBox">
        <p name="msgs" id="msgs"></p>
    </div>
    <div id="sendMessageBox"><br >
        <form action="" method="post">
            <textarea rows="5" cols="150"></textarea><br >
            <button type="submit" name="submit" id="submit">Send</button>
        </form>
    </div>
    
    <script type="text/javascript" src="chat.js"></script>
    
    <?php }
    else {
        header('location: login.php');
    }
    
    ?>
</body>
</html>