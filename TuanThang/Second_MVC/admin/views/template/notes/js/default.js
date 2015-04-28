$(function(){
    $("#Insert").submit(function(){
        var url = $(this).attr("action");
        var data = $(this).serialize();
        $.post(url,data,function(o){
        	$("tbody").append("<tr><td>32423</td><td>"+o+"</td></tr>");
        });
        return false;
    });
});