$("#btn-menu").click(function(){
    $("#dim-screen").toggleClass("hidden").delay(800);
    $("#menu-window").toggleClass("hidden");
});

 $("#btn-search").click(function(){
    $("#dim-screen").toggleClass("hidden").delay(800);;
    $("#menu-search").toggleClass("hidden");
});

$("#dim-screen").click(function(e){
    $("#dim-screen").toggleClass("hiddenBLOGBLOG");
    $("#menu-window").addClass("hidden");
    $("#menu-search").addClass("hidden");
});

$("#dim-screen *").click(function(e){
    e.stopPropagation();
});

$(document).mousemove(function(event){
    var x = (event.clientX / $(window).width()) * 100;
    $('#gradient').css({'background': ' linear-gradient(to right, #594687 ' + (x-50) + '%, rgb(248, 201, 72) ' + x + '%, rgb(22, 190, 112) ' + (x+50) + '%)'});
});
