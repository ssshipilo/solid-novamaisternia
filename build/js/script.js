new WOW().init();
if(document.querySelector('.slider_for .slider')){
    let sliderProgressCount = 0;
    $('.slider_for .slider').each((i, index)=>{
      sliderProgressCount = i+1;
      $(index).addClass(`slider-${i}`)
    })
    for(let slider = 0; slider < sliderProgressCount; slider++){
        let el = $('.slider-' + slider);
        let container = $(el).closest('.slider_for')
        $(el).slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            speed: 400,
            arrows: true, 
            nextArrow: $(container).find('.slider-next'),
            prevArrow: $(container).find('.slider-prev'),
            responsive: [
              {
                breakpoint: 1920,
                settings: {
                  slidesToShow: 4,
                  infinite: true,
                  dots: false,
                  arrows: false, 
                  centerMode: false,
                }
              },
              {
                breakpoint: 1500,
                settings: {
                  slidesToShow: 3,
                  centerPadding: '0px',
                  arrows: false,
                  slidesToScroll: 2,
                  centerMode: false,
                }
              },
              {
                breakpoint: 1200,
                settings: {
                  slidesToShow: 2,
                  arrows: false,
                  centerPadding: '0px',
                  paddingSlide: 20,
                  centerMode: true,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 1,
                  arrows: false,
                  centerPadding: false,
                  paddingSlide: '20%',
                  centerMode: true,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 440,
                settings: {
                  slidesToShow: 1,
                  centerPadding: false,
                  arrows: false, 
                  centerMode: false,
                  slidesToScroll: 1
                }
              }
            ],
        });
    }
}

$('.gallery_container').css('transition', '1')
setTimeout(()=>{
  $('.gallery_container').css('opacity', '1')
}, 500)
