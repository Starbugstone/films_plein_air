new Vue({
  el: '#films',
  data: {
    slides: 11
  },
  components: {
    'carousel-3d': Carousel3d.Carousel3d,
    'slide': Carousel3d.Slide
  }
})


$( document ).ready(function() {
    console.log( "ready!" );
});

$('.filmImage').each(function(){
  $(this).mouseenter(function(){
    //console.log("hovered");
    $(this).children(".filmImageText").stop(true, true).fadeIn();
  }).mouseleave(function(){
    $(this).children(".filmImageText").stop(true, true).fadeOut();
  });
  /*$(this).hover(function(){
    //if($(this).parents(".carousel-3d-slide.current").length){
      $(this).siblings(".filmImageText").slideToggle("slow");
    //}

  })*/
});
