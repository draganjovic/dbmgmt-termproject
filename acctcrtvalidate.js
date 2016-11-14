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
    else if (!($("#password").matches("^(?=.*?\\d.*\\d)[a-zA-Z0-9]{8,}$"))) {
        alert("Password needs to have at least 8 characters with 2 digits");
        return false;
    }
    else return true;
    
}); 
