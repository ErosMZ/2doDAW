var playStop = document.getElementById("play-stop");
var atras = document.getElementById("rewind");
var delante = document.getElementById("forward");
var reiniciar = document.getElementById("restart");
var mutearDesmutear = document.getElementById("mute");
var bajarVolumen = document.getElementById("vol-down");
var subirVolumen = document.getElementById("vol-up");

var video = document.getElementById("video");
var video1 = document.getElementById("video1");
var video2 = document.getElementById("video2");

video1.addEventListener("click", function(){
    
    video.src = "videos/Elríounamierda.mp4";
    video.play();

});


video2.addEventListener("click", function(){

    video.src = "videos/videoplayback.mp4";
    video.play();

});

playStop.addEventListener("click", function() {
    if (video.paused) {
        video.play(); 
        
    } else {
        video.pause(); 
    }
});

atras.addEventListener("click", function() {
    video.currentTime -= 10; 
});

delante.addEventListener("click", function() {
    video.currentTime += 10;
});

reiniciar.addEventListener("click", function() {
    video.currentTime = 0;
});

mutearDesmutear.addEventListener("click", function() {
    if (video.muted) {
        video.muted = false; 
        mutearDesmutear.textContent = "Silenciar";
    } else {
        video.muted = true; 
        mutearDesmutear.textContent = "Desilenciar"; 
    }
});

subirVolumen.addEventListener("click", function() {
   
    video.volume += 0.2;

});

bajarVolumen.addEventListener("click", function() {
   
    video.volume -= 0.2;

});

