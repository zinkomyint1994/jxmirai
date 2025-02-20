$(function() {
      $('#slides').slidesjs({
        width: 685,
        height: 424,
        play: {
          active: false,
          auto: true,
          interval: 4000,
          swap: true
        }
      });
    });

    $(document).on('ready', function() {
      $(".regular").slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".center").slick({
        dots: true,
        infinite: true,
        centerMode: true,
        slidesToShow: 3,
        slidesToScroll: 3
      });
      $(".variable").slick({
        dots: true,
        infinite: true,
        variableWidth: true
      });
    });
 