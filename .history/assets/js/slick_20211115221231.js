$('.variable-width').slick({
    centerMode: true,
    infinite: true,
    // centerPadding: '60px',
    slidesToShow: 1,
    speed: 300,
    variableWidth: true,
    // draggable: true,
    prevArrow:"<i class=' slick-prev pull-left fa fa-angle-left'></i>",
    nextArrow:"<i class=' slick-prev pull-right fa fa-angle-left'></i>",
  });
//   $(document).ready(function(){
//     $('.slider').slick({
//         autoplay:true,
//         arrows: true,
        
//     });
// });
  $('.variable-width').on('beforeChange', function(event, slick, currentSlide, nextSlide){
    var nextSlick = $( ".slick-slide[data-slick-index='"+nextSlide+"']" );
  });
  
  $('.variable-width').on('afterChange', function(event, slick, currentSlide){
  });
  setTimeout(()=>{
  }, 100);
  