// localStorage - bruges til at gemme inputtet fra Navn-feltet i kontaktformularen med en funktion
// ...så det kan genbruges på /tak.html.
// 1. linje defineres funktionen ved at klikke på submit-knappen i formen
// 2. linje laver value/inputtet af ID'et #realname til en variabel med navnet name
// 3. linje gemmer variablen name i localStorage og giver det item navnet "realname" så det kan 
// ...hentes på /tak.html med det navn
$("form").on("submit", function() {
    var name = $("#realname").val();
    localStorage.setItem("realname", name);
});

// Skjuler mobil-navigation pageload
$('.mobile-tab').hide();

// Funktion der Viser/skjuler navigation når man klikker burger ikonet
$('.burg-bars').on('click', function() {
  $('.mobile-tab').slideToggle(280);
});

//Funktion der skjuler navigationen når man klikker inde i main
$('main').on('click', function() {
  $('.mobile-tab').slideUp(280);
});

$(document).ready(function() {
  //Variable (vid) med med intro_video
  var vid = document.getElementById("full_video");
  //Click funktion der åbner overlayet med den fulde intro video og starter fra 0
  $('#play_intro_video').click(function() {
    $('.video_overlay').fadeIn(1000);
    vid.currentTime = 0;
    vid.play();
  });
  //Click-funktion der der sætter intro-videoen på pause når man klikker på Knappen med ID'et #pause_video
  $('#pause_video').click(function(){
    vid.pause();
    $('#pause_video').hide();
    $('#start_video').show();
  })
  //Click-funktion der starter videoen igen, hvis der har været trykket pause
  $('#start_video').click(function(){
    vid.play();
    $('#start_video').hide();
    $('#pause_video').show();
  })
  //Click-funktion fjerner lyden og mute knappen
  $('#mute_video').click(function(){
    $("video").prop('muted', true);
    $('#mute_video').hide();
    $('#unmute_video').show();
  })
  //Click-funktion der tænder lyden
  $('#unmute_video').click(function(){
    $("video").prop('muted', false);
    $('#unmute_video').hide();
    $('#mute_video').show();
  })
  //Klik for at stoppe video
  $('#stop_video').click(function() {
    $('.video_overlay').fadeOut(1000);
    vid.pause();
  });

  //Funktion der der automatisk lukker for video_overlay når intro-videoen er slut
  var intro_video = document.getElementById("full_video");
  intro_video.onended = function() {
    $('.video_overlay').fadeOut(1000);
  };
});
