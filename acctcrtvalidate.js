//validate passwords match

$("form").submit(function() {
    
    if($("#password").attr('value') != $("#passwordCheck").attr('value')) {
        alert("Passwords do not match");
        return false;
    }
    else if ($("#userName").attr('value') == "" || $("#password").attr('value') == "") {
        alert("Please fill in all the fields correctly!");
        return false;
    }
    //TODO: FIX THIS
    /*
    else if (!($("#password").matches("/^D+[0-9]+/"))) {
        alert("Password needs to start with a digit and end with a digit.");
        return false;
    }*/
    else return true;
    
}); 
