function ymapload($){
        ymaps.ready(init);
        var myMap, 
            myPlacemark;
         myLAT = 44.676116;
         myLON = 37.785405;


        function init(){ 
            myMap = new ymaps.Map("BX_YMAP_officemap", {
                center: [myLAT, myLON],
                zoom: 17
            }); 
            
            myPlacemark = new ymaps.Placemark([myLAT, myLON], {
                hintContent: 'Новороссийск',
                balloonContent: 'ул.Южная, 13',
		iconContent: 'Новороссийск, ул.Южная, 13',
		 iconCaption: 'Новороссийск, ул.Южная, 13'
            }, {
                 preset: "islands#redDotIconWithCaption",
		 iconImageSize: [33,63]
		 });
            
            myMap.geoObjects.add(myPlacemark);
	    myMap.behaviors.disable('scrollZoom');
        }
}


//© ООО Сео-Гранд seo-grand.ru
/**
 * Created by vasilisa on 14.09.16.
 */
(function ($) {
    var revapi;
    jQuery(document).ready(function() {


        // bind to button click
        jQuery(".es1_menutub__item").click(apiHandler)

        function apiHandler(e) {
            switch (e.currentTarget.id) {

                case "show1":

                    $(".np_wrapsec1").css("display","block");
                    $(".np_wrapsec2").css("display","none");

                    $("#show1").addClass("actnp");
                    $("#show2").removeClass("actnp");

                    break;

                case "show2":

                    $(".np_wrapsec1").css("display","none");
                    $(".np_wrapsec2").css("display","block");

                    $("#show2").addClass("actnp");
                    $("#show1").removeClass("actnp");

                    break;




            }
            return false;
        }

    });	//ready
})(jQuery);
(function ($) {
    $(window).load(function(){
        $(".twentytwenty-container[data-orientation!='vertical']").twentytwenty({default_offset_pct: 0.5});
        $(".twentytwenty-container[data-orientation='vertical']").twentytwenty({default_offset_pct: 0.5, orientation: 'vertical'});
    });
})(jQuery);
/**
 * Created by John on 04.10.16.
 */
(function(){
    function limitText(field, maxChar){
        var ref = $(field),
            val = ref.val();
        if ( val.length >= maxChar ){
            ref.val(function() {
                console.log(val.substr(0, maxChar))
                return val.substr(0, maxChar);
            });
        }
    }

    $(function(){
        $('#inprass').bind('keyup', function(){
            limitText(this, 3);
        });
    });
})();
(function ($) {
    $(function () {
        var $forms = $('form');


        $.each($forms, function () {

            var form = new FormValidate($(this));
            form.init();
        });

/*Статус отправки формы*/
        var $formOK = $('.b-form__ok');
        if ($formOK.length) {
            var $btnClose = $formOK.find('.i-close');
            $btnClose.on('click', function () {
                $formOK.parent('.b-form__ok__wrap').hide();
            });
            setTimeout(function(){
                $btnClose.trigger('click');
            }, 5000)
        }

    });

    var validators = {
        'e-mail': /^([a-z0-9_-]+\.)*[a-z0-9_-]+@[a-z0-9_-]+(\.[a-z0-9_-]+)*\.[a-z]{2,6}$/i,
        'phone': /^\+?\d{6,}$/
    };

    function FormValidate($el) {
        this.$el = $el;
        this.$submit = $el.find('button');
        /*Для comagic*/
        //this.message = this.$el.find('input[name=comagic]').val();
    }


    FormValidate.prototype = {
        constructor: FormValidate,
        init: function () {
            this.getAllFields();
            this.bindEvents();
            //this.iCanAddFile();
            //this.addMask();
        },
        getAllFields: function () {
            this.$fields = this.$el.find('.form-group');
            this.$fieldsToValid = this.$fields.find('[data-validation]').add(this.$el.find('textarea[data-validation]'));
        },
        bindEvents: function () {
            this.$submit.on('click', $.proxy(function (e) {
                console.log('submit');
                e.preventDefault();
                if (this.validate()) {
                    //$.cookie('form_sended', 'yes', {path: '/'});
                    this.addPreloader();
                    this.$el.trigger('submit');
                    //this.comagicGo();
                }
            }, this));
        },
        validate: function () {
            var result = true,
                self = this;
            $.each(this.$fieldsToValid, function () {
                var $this = $(this),
                    value = $this.val(),
                    validType = $this.data('validation');

                switch (validType) {
                    case 'number':
                    {
                        checkNumber();
                        break;
                    }
                    case 'required':
                    {
                        checkRequired();
                        break;
                    }
                    default:
                        checkString();
                        break;
                }


                function checkNumber() {
                    if (!Number(value) || value < 0 || value > 99) {
                        fieldInvalid();
                        return false;
                    }

                    $this.removeClass('invalid');
                }

                function checkRequired() {
                    if (value.length) {
                        $this.removeClass('invalid');
                    } else {
                        fieldInvalid();
                    }
                }

                function checkString() {
                    if (validators[validType].test(value)) {
                        $this.removeClass('invalid');
                    } else {
                        fieldInvalid();
                    }
                }

                function fieldInvalid() {
                    $this.addClass('invalid');
                    result = false;
                    self.$fieldsToValid.filter('.phonemask').trigger('focus').val('');
                }


            });

            return result;
        },

        iCanAddFile: function () {
            var $fileInput = this.$el.find('input[type=file]');
            if ($fileInput.length) {
                var $btn_file = this.$el.find('.js-sketch');
                $btn_file.on('click', function (e) {
                    e.preventDefault();
                    $fileInput.trigger('click');
                });
                $fileInput.change(function () {
                    $btn_file.html('Эскизы загружены');
                });
            }
        },
        addMask: function () {
            var $input = this.$el.find('.input-phone');
            if ($input.length) {
                $input.mask("8 (999) 999-99-99");
            }
        },
        addPreloader: function () {
            $('#loader-wrapper').show();
        },
        comagicGo: function () {
            var $nameField = this.$fields.filter('._name'),
                name = $nameField.length ? $nameField.find('input').val() : '-',
                phone = this.$fields.filter('._phone').find('input').val(),
                email = '-',
                comagicObj = {name: name, email: email, phone: phone, message: this.message},
                self = this;

            try {
                Comagic.addOfflineRequest(comagicObj);
            } catch (e) {
            }

            setTimeout(function () {
                self.$el.trigger('submit');
            }, 2000)
        }
    }
})(jQuery);
(function ($) {

    function mycarousel_initCallback_bx_3218110189_517(carousel) {
        jQuery('.jcarousel-control_bx_3218110189_517 div div a').bind('click', function() {
            carousel.scroll(jQuery.jcarousel.intval(jQuery(this).attr('ttt')));


            if($(this).parent().parent().is($(".jcarousel-control_bx_3218110189_517 div.jcontr").last())) {
                $(this).parent().parent().parent().find('.icocol').removeClass('icocolact');
                $(this).parent().addClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_517 div.jcontr").first().children('.icocol').addClass('icocolact');
            }

            else {
                $(this).parent().parent().parent().find('.icocol').removeClass('icocolact');
                $(this).parent().addClass('icocolact');
                //$(this).parent().parent().next(".jcontr").children('.icocol').addClass('icocolact');
            }


            return false;
        });
    };

    jQuery(document).ready(function() {

        jQuery("#dvkarusel_bx_3218110189_517").jcarousel({
            scroll: 1,
            wrap: 'circular',
            initCallback: mycarousel_initCallback_bx_3218110189_517,
        });

        $(".jjcontrolout_bx_3218110189_517").appendTo(".jjcontrolin_bx_3218110189_517");

        // podsvetka tsvetov pri clickprev
        $("#dvkarusel_bx_3218110189_517 .jcarousel-prev").click(function () {

            var inprevbx_3218110189_517 = $(".jcarousel-control_bx_3218110189_517").find(".icocolact").parent().index(".jcarousel-control_bx_3218110189_517 .jcontr");

            if ( $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(0).children('.icocol').hasClass("icocolact")  )
            {
                $(".jjcontrolin_bx_3218110189_517").find(".icocol").removeClass('icocolact');
                $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(-1).children('.icocol').addClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_517 .jcontr").eq(-2).children('.icocol').addClass('icocolact');
            }

            else  if ( $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(0).children('.icocol').hasClass("icocolact")  &&  $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(1).children('.icocol').hasClass("icocolact"))
            {
                $(".jjcontrolin_bx_3218110189_517").find(".icocol").removeClass('icocolact');
                $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(0).children('.icocol').addClass('icocolact');
                $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(-1).children('.icocol').addClass('icocolact');
            }

            else
            {
                $(".jjcontrolin_bx_3218110189_517").find(".icocol").removeClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_517 .jcontr").eq(inprevbx_3218110189_517).children('.icocol').addClass('icocolact');
                $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(inprevbx_3218110189_517).prev(".jcontr").children('.icocol').addClass('icocolact');
            }


        });





        // podsvetka tsvetov pri clicknext
        $("#dvkarusel_bx_3218110189_517 .jcarousel-next").click(function () {

            var innextbx_3218110189_517 = $(".jcarousel-control_bx_3218110189_517").find(".icocolact").parent().index(".jcarousel-control_bx_3218110189_517 .jcontr");



            if ( $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(-1).children('.icocol').hasClass("icocolact"))
            {
                $(".jjcontrolin_bx_3218110189_517").find(".icocol").removeClass('icocolact');
                $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(0).children('.icocol').addClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_517 .jcontr").eq(1).children('.icocol').addClass('icocolact');
            }

            else  if ( $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(-1).children('.icocol').hasClass("icocolact")  &&  $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(-2).children('.icocol').hasClass("icocolact"))
            {
                $(".jjcontrolin_bx_3218110189_517").find(".icocol").removeClass('icocolact');
                $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(0).children('.icocol').addClass('icocolact');
                $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(-1).children('.icocol').addClass('icocolact');
            }

            else
            {
                $(".jjcontrolin_bx_3218110189_517").find(".icocol").removeClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_517 .jcontr").eq(innextbx_3218110189_517).children('.icocol').addClass('icocolact');
                $(".jcarousel-control_bx_3218110189_517 .jcontr").eq(innextbx_3218110189_517).next(".jcontr").children('.icocol').addClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_517 .jcontr").eq(innextbx_3218110189_517).next(".jcontr").next(".jcontr").children('.icocol').addClass('icocolact');
            }


        });






    });
    function mycarousel_initCallback_bx_3218110189_518(carousel) {
        jQuery('.jcarousel-control_bx_3218110189_518 div div a').bind('click', function() {
            carousel.scroll(jQuery.jcarousel.intval(jQuery(this).attr('ttt')));


            if($(this).parent().parent().is($(".jcarousel-control_bx_3218110189_518 div.jcontr").last())) {
                $(this).parent().parent().parent().find('.icocol').removeClass('icocolact');
                $(this).parent().addClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_518 div.jcontr").first().children('.icocol').addClass('icocolact');
            }

            else {
                $(this).parent().parent().parent().find('.icocol').removeClass('icocolact');
                $(this).parent().addClass('icocolact');
                //$(this).parent().parent().next(".jcontr").children('.icocol').addClass('icocolact');
            }


            return false;
        });
    };

    jQuery(document).ready(function() {

        jQuery("#dvkarusel_bx_3218110189_518").jcarousel({
            scroll: 1,
            wrap: 'circular',
            initCallback: mycarousel_initCallback_bx_3218110189_518,
        });

        $(".jjcontrolout_bx_3218110189_518").appendTo(".jjcontrolin_bx_3218110189_518");

        // podsvetka tsvetov pri clickprev
        $("#dvkarusel_bx_3218110189_518 .jcarousel-prev").click(function () {

            var inprevbx_3218110189_518 = $(".jcarousel-control_bx_3218110189_518").find(".icocolact").parent().index(".jcarousel-control_bx_3218110189_518 .jcontr");

            if ( $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(0).children('.icocol').hasClass("icocolact")  )
            {
                $(".jjcontrolin_bx_3218110189_518").find(".icocol").removeClass('icocolact');
                $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(-1).children('.icocol').addClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_518 .jcontr").eq(-2).children('.icocol').addClass('icocolact');
            }

            else  if ( $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(0).children('.icocol').hasClass("icocolact")  &&  $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(1).children('.icocol').hasClass("icocolact"))
            {
                $(".jjcontrolin_bx_3218110189_518").find(".icocol").removeClass('icocolact');
                $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(0).children('.icocol').addClass('icocolact');
                $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(-1).children('.icocol').addClass('icocolact');
            }

            else
            {
                $(".jjcontrolin_bx_3218110189_518").find(".icocol").removeClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_518 .jcontr").eq(inprevbx_3218110189_518).children('.icocol').addClass('icocolact');
                $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(inprevbx_3218110189_518).prev(".jcontr").children('.icocol').addClass('icocolact');
            }


        });





        // podsvetka tsvetov pri clicknext
        $("#dvkarusel_bx_3218110189_518 .jcarousel-next").click(function () {

            var innextbx_3218110189_518 = $(".jcarousel-control_bx_3218110189_518").find(".icocolact").parent().index(".jcarousel-control_bx_3218110189_518 .jcontr");



            if ( $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(-1).children('.icocol').hasClass("icocolact"))
            {
                $(".jjcontrolin_bx_3218110189_518").find(".icocol").removeClass('icocolact');
                $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(0).children('.icocol').addClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_518 .jcontr").eq(1).children('.icocol').addClass('icocolact');
            }

            else  if ( $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(-1).children('.icocol').hasClass("icocolact")  &&  $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(-2).children('.icocol').hasClass("icocolact"))
            {
                $(".jjcontrolin_bx_3218110189_518").find(".icocol").removeClass('icocolact');
                $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(0).children('.icocol').addClass('icocolact');
                $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(-1).children('.icocol').addClass('icocolact');
            }

            else
            {
                $(".jjcontrolin_bx_3218110189_518").find(".icocol").removeClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_518 .jcontr").eq(innextbx_3218110189_518).children('.icocol').addClass('icocolact');
                $(".jcarousel-control_bx_3218110189_518 .jcontr").eq(innextbx_3218110189_518).next(".jcontr").children('.icocol').addClass('icocolact');
                //$(".jcarousel-control_bx_3218110189_518 .jcontr").eq(innextbx_3218110189_518).next(".jcontr").next(".jcontr").children('.icocol').addClass('icocolact');
            }


        });






    });

})(jQuery);



/**
 * Created by vasilisa on 10.08.16.
 */
// Define our selectors
var $clock 		= $("#clock");
var $timer 		= $("#timer");
var $start 		= $("#start");
var $pause 		= $("#pause");
var $continue 	= $("#continue");
// Enable start / pause / continue buttons
$(function(){
    $start.on("click",function(e){
        e.preventDefault();
        beginTimer(60000); // 60 seconds
    });
});
// Change timer face colour
function colourChanger(intAngle)
{
    intAngle = 6.29 - intAngle;
    if(Math.floor(72+55*intAngle) < 255 || Math.floor(214+14*intAngle) < 255)
    {
        // Animate from green to amber
        return 'rgb(51,51,51)';
    } else {
        // Animate from amber to red
        return 'rgb(255,0,0)';
    }
}
// Get the ball rolling...
function beginTimer(timer)
{
    // Get our start time
    var dteStart = new Date();
    dteStart = dteStart.getTime();
    // Call countdown clock function
    countDownClock(dteStart,timer);
    // Reset elements to their defaults
    $clock.show();
    $timer.show();
}
// Build our countdown clock
function countDownClock(dteStart,timer)
{
    // Time started, minus time now, subtracked from 60 seconds
    var d = new Date();
    window.intOffset = timer - (d.getTime() - dteStart);
    // Whole number to use as countdown time
    $timer.html(Math.ceil(window.intOffset / 1000));
    // Angle to use, defined by 1 millisecond
    window.intAngle = 0.1048335*0.001*window.intOffset;
    // Set up our canvas
    var canvas = document.getElementById("clock");
    if (canvas.getContext) // Does the browser support canvas?
    {
        var ctx = canvas.getContext("2d");
        // Clear canvas before re-drawing
        ctx.clearRect(0,0,300,300);
        // Grey background ring
        ctx.beginPath();
        ctx.globalAlpha = 1;
        ctx.arc(150,150,140,0,6.283,false);
        ctx.arc(150,150,105,6.283,((Math.PI*2)),true);
        ctx.fillStyle = "#fde800";
        ctx.fill();
        ctx.closePath();
        // Clock face ring
        ctx.beginPath();
        ctx.globalAlpha = 1;
        ctx.arc(150,150,120.1,-1.57,(-1.57 + window.intAngle),false);
        ctx.arc(150,150,105,(-1.57 + window.intAngle),((Math.PI*2) -1.57),true);
        ctx.fillStyle = colourChanger(window.intAngle);
        ctx.fill();
        ctx.closePath();
        // Centre circle
        ctx.beginPath();
        ctx.arc(150,150,105,0,6.283,false);
        ctx.fillStyle = "#fde800";
        ctx.fill();
        ctx.closePath();
    } else {
        // Put fallback for browsers that don't support canvas here...
    }
    if(window.intOffset <= 0) // If time is up
        timeUp();
    else // Resersive ahoy!
        window.t = setTimeout("countDownClock(" + dteStart + "," + timer + ")",50);
}
// Pause clock and animate our centre circle
function clockPause(timeElapsed,pause)
{
    // Duration of pause animation
    pauseTime = 100;
    diff = timeElapsed / pauseTime;
    if(pause) // Pause the clock
    {
        percentage = 1 - diff;
        if(percentage < 0)
            percentage = 0;
    } else { // Resume the clock
        percentage = diff;
        if(percentage > 1)
            percentage = 1;
    }
    // Set up our canvas
    var canvas = document.getElementById("clock");
    if (canvas.getContext) // Does the browser support canvas?
    {
        var ctx = canvas.getContext("2d");
        // Clear canvas before re-drawing
        ctx.clearRect(0,0,300,300);
        // Grey background ring
        ctx.beginPath();
        ctx.globalAlpha = 1;
        ctx.arc(150,150,140,0,6.283,false);
        ctx.arc(150,150,105,6.283,((Math.PI*2)),true);
        ctx.fillStyle = "#fde800";
        ctx.fill();
        ctx.closePath();
        // Clock face ring
        ctx.beginPath();
        ctx.globalAlpha = 1;
        ctx.arc(150,150,140.1,-1.57,(-1.57 + window.intAngle),false);
        ctx.arc(150,150,105,(-1.57 + window.intAngle),((Math.PI*2) -1.57),true);
        ctx.fillStyle = colourChanger(window.intAngle);
        ctx.fill();
        ctx.closePath();
        // Centre circle
        ctx.beginPath();
        ctx.arc(150,150,(105 * percentage),0,6.283,false);
        ctx.fillStyle = "#fde800";
        ctx.fill();
        ctx.closePath();
        // Recursive until time has elapsed
        if(timeElapsed < pauseTime)
        {
            setTimeout(function(){
                clockPause((timeElapsed + 10),pause);
            },10);
        }
    } else {
        // Put fallback for browsers that don't support canvas here...
    }
}
// Time up
function timeUp()
{
    $('#happy').modal('hide');
}


/**
 * Created by vasilisa on 11.08.16.
 */
(function($){
    //
    $(window).load(function(){

        $(function(){
            $('.inpfilefile').change(function(){
                $('.inpfile').removeClass('inpfile').addClass('inpfilevyb');
            });
        });
    });




})(jQuery);


