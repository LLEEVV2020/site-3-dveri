function onChangeSlide(swiper, event) {
    if(swiper == undefined) {
        swiper = window.swiper;
    }

    if (event == undefined)
        event = '';

    var active = swiper.slides[swiper.activeIndex];
    var location = active.getAttribute("data-location").split(",");
    var default_scale = 12;
    var default_offset_x = 0.07;
    var default_offset_y = 0.015;
    var current_scale = window.current_scale;
    if (document.documentElement.clientWidth > 992) {


        var current_offset_x = (default_offset_x * default_scale) / (current_scale * 2);

        location[1] = parseFloat(location[1]) - current_offset_x;
    }
    else if (document.documentElement.clientWidth <= 992) {

        var current_offset_y = (default_offset_y * default_scale) / (current_scale * 2);
        location[0] = parseFloat(location[0]) + current_offset_y;
    }
    console.log("M?");
    window.office_map.setCenter(location);

    var metro_id = active.getAttribute("data-metroid");
    var baloon_opened = false;
    mapOfficies.forEach(function (item,index,arr) {
        if(item['METRO_ID'] == metro_id) {
            item['PLACEMARK'].balloon.open();
            baloon_opened = true;
        }
    });
    if(baloon_opened === false){
        window.office_map.balloon.close();
    }
};
function initSwiper(){
    if (document.readyState === "complete") {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: "auto",
            centeredSlides: true,
            direction: 'vertical',
            grabCursor: true,
            mousewheelControl: true,
            loop: true,
            loopedSlides: SwiperSlides.length,
            initialSlide: Math.floor(SwiperSlides.length / 2) - 1,
            onTransitionEnd: function (swiper) {
                onChangeSlide(swiper);
            },
            onClick: function(swiper, event) {
                swiper.slideTo(swiper.clickedIndex);
                onChangeSlide(swiper,event);
            },
            onInit: function (swiper) {
                window.swiper = swiper;
                document.getElementById("search-wrapper").style.opacity = 1;
                onChangeSlide(swiper);
            },
            breakpoints: {
                992: {}
            }
        });
    }
    else {
        document.addEventListener("DOMContentLoaded", function () {
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: "auto",
                centeredSlides: true,
                direction: 'vertical',
                grabCursor: true,
                mousewheelControl: true,
                loop: true,
                loopedSlides: SwiperSlides.length,
                initialSlide: Math.floor(SwiperSlides.length / 2) - 1,
                onTransitionEnd: function (swiper) {
                    onChangeSlide(swiper);
                },
                onInit: function (swiper) {
                    window.swiper = swiper;
                    document.getElementById("search-wrapper").style.opacity = 1;
                    onChangeSlide(swiper);
                },
                onClick: function(swiper, event) {
                    swiper.slideTo(swiper.clickedIndex);
                    onChangeSlide(swiper,event);
                },
                breakpoints: {
                    992: {}
                }
            });
        });
    }
}

document.addEventListener("DOMContentLoaded", function () {
    document.getElementById("search-field").addEventListener(
        "keyup",
        function () {
            var value = this.value;
            var swiper = window.swiper;
            var arrForAppend = new Array();
            var $search_select = $(".search-select");
            var $search_select_wrapper = $(".search-select-wrapper");
            if (value.length > 0) {
                reg_exp = new RegExp(value, 'i');
                var check_find = false;
                SwiperSlides.forEach(function (item, index, slides) {
                    if (reg_exp.test(item['NAME'])) {
                        check_find = true;
                        //arrForAppend.push(item['HTML']);
                        arrForAppend.push(item);
                    }
                });
                $search_select_wrapper.fadeIn("fast");
                if (check_find) {
                    //swiper.removeAllSlides();
                    //swiper.appendSlide(arrForAppend);
                    $search_select.empty();
                    arrForAppend.forEach(function(item, index, arr) {
                        $search_select.append('<div class="search-option" data-location="' +
                            item['LOCATION_STRING'] + '" >' + item['NAME'] + '</div>')
                    });
                }
                else {
                    //swiper.removeAllSlides();
                    $search_select.empty();
                }
            }
            else {
                //$search_select_wrapper.fadeOut("fast");
                //swiper.removeAllSlides();
                //SwiperSlides.forEach(function (item, index, slides) {
                //arrForAppend.push(item['HTML']);
                //});
                //swiper.appendSlide(arrForAppend);
                $search_select.empty();
                SwiperSlides.forEach(function (item, index, slides) {
                    $search_select.append('<div class="search-option" data-location="' +
                        item['LOCATION_STRING'] + '" >' + item['NAME'] + '</div>')
                });
            };
            onChangeSlide(swiper);
        }
    );
    document.getElementById("search-field").addEventListener(
        "blur",
        function () {
            $(".search-select-wrapper").fadeOut("fast");
        });
    document.getElementById("search-field").addEventListener(
        "focus",
        function () {
            var $search_select = $(".search-select");
            $search_select.empty();
            SwiperSlides.forEach(function (item, index, slides) {
                $search_select.append('<div class="search-option" data-location="' +
                    item['LOCATION_STRING'] + '" >' + item['NAME'] + '</div>')
            });
            $(".search-select-wrapper").fadeIn("fast");
        });
    $(document).on("click", ".search-option", function(){
        var swiper = window.swiper;
        var value = $(this).text();
        reg_exp = new RegExp(value, 'i');
        var length  = swiper.slides.length;
        for( var i=0 ; i<length ; i++ ) {
            if (reg_exp.test($(swiper.slides[i]).text())) {
                swiper.slideTo(i);
                /*if(i < 4) {
                 //console.log("костыль"); наилютейший костыль, но я поржал. аахаххаха
                 var length_SwiperSlides = SwiperSlides.length;
                 swiper.removeSlide([length-3, length-2, length-1]);
                 slide1 = SwiperSlides[length_SwiperSlides-1];
                 slide2 = SwiperSlides[length_SwiperSlides-2];
                 slide3 = SwiperSlides[length_SwiperSlides-3];
                 swiper.prependSlide([
                 slide1.HTML,
                 slide2.HTML,
                 slide3.HTML
                 ]);
                 SwiperSlides.slice(-3,-3);
                 swiper.detachEvents();
                 swiper.attachEvents();
                 swiper.update(true);
                 }*/
                onChangeSlide(swiper);
                break;
            }
        }
        document.getElementById("search-field").value = "";
        $(".search-select").empty();
        $(".search-select-wrapper").fadeOut("fast");

        /*$(document).on("click",".swiper-slide", function () {
         console.log("asd");
         var swiper = window.swiper;
         console.log(swiper.activeIndex);
         console.log(swiper.realIndex);
         console.log(swiper);
         console.log(swiper.activeElement);
         });*/
    });
    $(document).on("change", "#select-for-safari", function(){
        var swiper = window.swiper;
        //почему-то здесь без трим не работает, а в кастомном селекте работает... Зачем и почему я хз
        var value = $("#select-for-safari option:selected").text().trim();
        reg_exp = new RegExp(value, 'i');
        var length  = swiper.slides.length;
        for( var i=0 ; i<length ; i++ ) {
            if (reg_exp.test($(swiper.slides[i]).text().trim())) {
                swiper.slideTo(i);
                onChangeSlide(swiper);
                break;
            }
        }

    });
	
    if(navigator.userAgent.match(/iPhone|iPad|iPod|Mac|iOS/i)) {
        $("#select-for-safari").show();
        $("#search-field").hide();
        $(".search-field-wrapper").removeClass("with-search-icon");
    };
});
