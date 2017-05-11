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
  if(wScroll>$('.headerimg').offset().top - ($(window).height() / 20)){
    $('.header-t').addClass('min');
  } else if (wScroll<$('.headerimg').offset().top - ($(window).height() / 20)) {
    $('.header-t').removeClass('min');
  };
  if(wScroll>$('.how').offset().top - ($(window).height() / 2.8)){
    $('.img-row video').each(function(i){
      setTimeout(function(){
        $('.img-row video').eq(i).addClass('is-showing');
      }, 150 * (i+1));
    });
  };
  if(wScroll>$('.cert').offset().top - ($(window).height() / 2.8)){
    $('.row img').each(function(i){
      setTimeout(function(){
        $('.row img').eq(i).addClass('is-showing-img');
      }, 150 * (i+1));
    });
  };
});
