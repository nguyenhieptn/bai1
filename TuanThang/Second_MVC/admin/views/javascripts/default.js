$(function(){


    $("#Insert").submit(function(){
        var url = $(this).attr("action");
        var data = $(this).serialize();
        $.post(url,data,function(o){
        });
        return false;
    });
});