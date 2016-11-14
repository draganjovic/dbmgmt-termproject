<!DOCTYPE html>
<html>
<head>
    <title>Account Creation</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
</head>
<body>
    
    <div id="accountCreateOverall">
        <h1>Videogames of 2016</h1><hr >
        <h3>Account Creation Form: </h3>
        <form action="accountManagement" method="post">
            <p>Username can be up to 20 characters in length.</p><p>Password must be at least 8 characters with at least 2 being digits.</p>
            <label><b>Username: </b></label><input type="text" id="userName" name="userName" size="20" maxlength="20"><br ><br >
            <label><b>Password: </b></label><input type="text" id="password" name="password" size="20" maxlength="20"><br ><br >
            <label><b>Retype Password: </b></label><input type="text" id="passwordCheck" name="passwordCheck" size="20" maxlength="20"><br ><br >
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
    
    <script type="text/javascript" src="acctcrtvalidate.js"></script>

</body>
</html>