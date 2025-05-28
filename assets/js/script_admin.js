document.addEventListener('visibilitychange',
function(){
    if(document.visibilityState === "visible"){
        document.title = "Administración | Portfolio Benjamin Gonzalez";
        $("#favicon").attr("href","assets/images/benjadibujo.jpeg");
    }
});