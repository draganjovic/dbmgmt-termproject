$(document).ready(function(){
    
    setInterval(function() {

        $.ajax({
            url:"getChatData.php",
        }).done(function(response){
            $('#msgs').val(response);    
        });
        
    }, 5000);

});