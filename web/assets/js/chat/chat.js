$(function(){
    //Récupère les derniers
    getMessages();
});

function getMessages(){
    
    var last_timestamp = $(".messages").find(".message:last").data("timestamp");  
    
    var datas = {
        last_timestamp:last_timestamp
    };
    
    $.ajax({
        method:'GET',
        url:'/chat/ajax/get_messages',
        data:datas
    }).done(function(res){
        $(".messages").append(res);
    });
    
    setTimeout(getMessages, 3000);
}