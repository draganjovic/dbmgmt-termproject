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
            <label><b>Username:</b> </label>
            <?php 
                echo $_POST['userName'];
            ?>
            <br >
            <label><b>Password:</b> </label>
            <?php 
                echo $_POST['password'];
            ?>
        
        <!--Need to add favorite game option list -->
        <form action="" method="post">
            
        </form>
            
        </div>
    </div>
    
</body>
</html>