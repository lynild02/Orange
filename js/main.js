$(document).ready(function(){
  var wHeight = $(window).innerHeight();
  ajustesIniciales();
  function ajustesIniciales(){
    $('.hero-slide').css({
      'height':wHeight+'px'
    })
  }
});
