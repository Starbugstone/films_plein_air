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
