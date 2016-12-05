$(document).ready(function(){

    $("#userName").on("blur", function () {

        if(!/^[a-zA-Z]$/.test($(this).val())) {
            $(this).addClass("invalid");
        } else {
            $(this).removeClass("invalid");
        }

    });
    
    $("#password").on("blur", function () {

        if (!/^(?=.*\d).{6,20}$/.test($(this).val())) {
            $(this).addClass("invalid");
        } else {
            $(this).removeClass("invalid");
        }

    });

    $("#submit").on("click", function() {

        if($("*").hasClass("invalid")) {
            alert("Invalid input");
            return false;
        }
        if($("#userName").val() == "" || $("#password").val() == "" || $("#passwordCheck").val() == "") {
            alert("Please fill in all fields");
            return false;
           }
        if($("#password").val() != $("#passwordCheck").val()) {
            alert("Passwords do not match!");
            return false;
        }

    });
});