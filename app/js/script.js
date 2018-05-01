$( document ).ready(function() {

});

$('.filmImage').each(function(){
  $(this).mouseenter(function(){
    $(this).children(".filmImageText").stop(true, true).fadeIn();
  }).mouseleave(function(){
    $(this).children(".filmImageText").stop(true, true).fadeOut();
  });
});
