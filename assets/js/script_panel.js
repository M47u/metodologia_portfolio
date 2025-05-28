document.addEventListener('visibilitychange',
function(){
    if(document.visibilityState === "visible"){
        document.title = "Panel de Administración | Portfolio Benjamin Gonzalez";
        $("#favicon").attr("href","assets/images/benjadibujo.jpeg");
    }
});