$(document).ready(function(){
    
    setInterval(function() {

        $.ajax({
            url:"getChatData.php",
        }).done(function(response){
            $('#msgs').html(response);    
        });
        
    }, 5000);

});