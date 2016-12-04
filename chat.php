<!DOCTYPE html>
<html>
<head>
<title>Videogame Chatroom</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
</head>
<body>

    <?php 
    session_start();
    ?>
    <div id="recieveMessageBox">
        <textarea readonly name="msgs" id="msgs" rows="50" cols="150"></textarea>
    </div>
    <div id="sendMessageBox">
        <form action="" method="post">
            <textarea rows="5" cols="150"></textarea><br >
            <button type="submit" name="submit" id="submit">Send</button>
        </form>
    </div>
    
    <script type="text/javascript" src="chat.js"></script>
    
</body>
</html>