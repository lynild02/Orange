$(document).ready(function(){
  var wHeight = $(window).innerHeight();
  ajustesIniciales();
  function ajustesIniciales(){
    $('.hero-slide').css({
      'height':wHeight+'px'
    })
  }
});
$(window).scroll(function(){
  var wScroll = $(this).scrollTop();
  if(wScroll>$('.pics').offset().top - ($(window).height() / 2.8)){
    $('.pics figure').each(function(i){
      setTimeout(function(){
        $('.pics figure').eq(i).addClass('is-showing');
      }, 150 * (i+1));
    });
  };
});
