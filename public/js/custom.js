// $(window).on('load', function() {
//     $('#welcomeModal').modal('show');
// });

var carouselEl = $('.carousel').carousel({
    interval: 1000,
    keyboard: true
});
    /* BOOTSTRAP SLIDER */
var bootstrapSlider  = $('.slider').slider();
$("#slider-carousel-rainfall").on("slide", function(slideEvt) {
    //carouselEl.carousel('pause');
    
    var carouselRainfall = $('#carousel-rainfall').carousel({
            interval: 1000,
            keyboard: true
        });
    carouselRainfall.carousel('pause');
    carouselRainfall.carousel(slideEvt.value);

    carouselRainfall.carousel({
      interval: 100
    }).on('slid.bs.carousel', function (event) {
        //console.log(event);
    });

    $("li[data-slide-to=" + slideEvt.value + "]").addClass('active');
    $("li[data-slide-to!=" + slideEvt.value + "]").removeClass('active');
});

$("#btn-pause").click(function () {
    carouselEl.carousel('pause');
});
$("#btn-play").click(function () {
    carouselEl.carousel('cycle');
});

$('.sidebar input[type="radio"]').change(function() {
  if ($(this).is(':checked')) {
    var id = $(this).attr('id');
    
    var idx = $('#carousel-rainfall .item.active').index();

    $.ajax({
        url: 'ajax/dashboard',
        type: 'POST',
        dataType: 'html',
        data: {period: $(this).val()},
    })
    .done(function(data) {
        //console.log(data);
        $("#ajax-rainfall").html(data);
        var carouselRainfall = $('#carousel-rainfall').carousel({
            interval: 1000,
            keyboard: true
        });
        var rainfallSlider  = $('#slider-carousel-rainfall').slider();
        rainfallSlider.slider('refresh');
        carouselRainfall.carousel('cycle');

        $("#btn-pause").click(function () {
            carouselRainfall.carousel('pause');
        });
        $("#btn-play").click(function () {
            carouselRainfall.carousel('cycle');
        });
        console.log('Success');
    })
    .fail(function() {
        console.log("error");
    })
    .always(function() {
        console.log("complete");
    });
    
    //var replaceSRC = $('.item.active img').attr("src", newSRC);
    //$(".item.active").append('<img src="img/surface_wind/wind05081700.jpg" style="position: absolute; top: 0; opacity: 0.2">');

  }
});

anims = new Array(51);
var frame = 1;
var timeout_state = null;
var x = 150;

function imageLoad() {
    for (var i = 1; i <= ((51)); i++) {
        anims[i] = new Image();
        anims[i].src = "http://satellite.imd.gov.in/img/animation3d/3Dasiasec_ir1" + i + ".jpg";
    }
}

function animator() {
    document.animImage.src = anims[frame].src;
    frame = (frame + 1);
    if (frame > 51) {
        frame = (49 - x);
    }
    timeout_state = setTimeout("animator()", 150);
    if (x > 48) {
        x = 48;
        frame = (49 - x);
    }
}