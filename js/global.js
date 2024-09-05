$OBJ = {
    'win': $(window),
    'doc': $(document),
    'html': $('html')
}












function winW() { //창 너비
    return $OBJ.win.width();
}

function winH() { // 창 높이
    return $OBJ.win.height();
}

function winSh() { // 스크롤 값
    return $OBJ.win.scrollTop();
}

function mathceil(num) { // 소수 점 올림
    return Math.ceil(num);
}

function mathfloor(num) { // 소수 점 절사
    return Math.floor(num);
}

function ajaxLink(href, type, idx) { //a:주소, b:type, c:넘길 값
    $.ajax({
        type: type,
        url: href,
        data: idx,
        success: function (data) {
            $('body').find('._pop-ajax').remove().end().append(data).find('._pop-ajax').fadeIn(500);
        }
    });
}

function ajaxClose(a) {
    $(a).fadeOut(500, function () {
        $(this).remove()
    });
}

var nbanner = {
	init : function(){
		this.action();
	},
	action : function(){
		var a = $('#nbanner');
		var roll = a.find('.roll');
		var auto = a.find('.auto');
		var prev = a.find('.prev');
		var next = a.find('.next');

		roll.slick({
			arrows: false,
			dots: false,
			infinite: true,
			autoplay: true,
			speed: 300,
			slidesToShow: 7,
			slidesToScroll: 1,
			autoplaySpeed: 3000,
			pauseOnHover: false,
			pauseOnFocus: false,
			responsive: [
				{
					breakpoint: 1200,
					settings: {
						slidesToShow: 6
					},
					breakpoint: 1024,
					settings: {
						slidesToShow: 5
					},
					breakpoint: 768,
					settings: {
						slidesToShow: 4
					},
					breakpoint: 640,
					settings: {
						slidesToShow: 3
					}
				},
			]
		});

		auto.on('click',function(){
			$(this).toggleClass('active');
			if($(this).hasClass('active')){
				roll.slick('slickPause');
			}else{
				roll.slick('slickPlay');
			}
		});

		prev.on('click',function(){
			roll.slick('slickPrev');
		});

		next.on('click',function(){
			roll.slick('slickNext');
		});

	}
}

var vis = {
    init: function () {
        this.action();
    },
    action: function () {
        var a = $('#vis');
        var roll = a.find('.roll');

        function visActive(num) {
            setTimeout(function () {
                a.find('.vis').eq(num).addClass('active').siblings().removeClass('active');
            }, 300);
        }

        var slider = roll.bxSlider({
            mode: 'fade',
            auto: true,
            useCSS: false,
            pause: 10000,
            speed: 500,
            
            autoControls: true,
            autoControlsCombine: true, //stop,start bind
            autoControlsSelector: '#vis .stop',
            
            easing: 'easeInOutExpo',
            onSliderLoad: function (currentIndex) {
                visActive(currentIndex);
            },
            onSlideBefore: function ($slideElement, oldIndex, newIndex) {
                visActive(newIndex);
            }
        });

        a.find('.bx-pager').on({
            'mouseenter': function () {
                slider.stopAuto();
            },
            'mouseleave': function () {
                slider.startAuto();
            }
        });
    }
}

var head = {
    init: function () {
        this.action();
    },
    action: function () {
        var a = $('#header');
        var gnb = a.find('.gnb');
        var menu = a.find('.menu');
        var mnu = a.find('.mnu');
        var nav = $('#nav');
        var close = nav.find('._close');
        var mgnb = nav.find('.gnb > li > a');

        menu.on('click', function () {
            $OBJ.html.addClass('nav-on');
        });

        close.on('click', function () {
            $OBJ.html.removeClass('nav-on');
        });
        
        gnb.on('mouseenter',function(){
            $OBJ.html.addClass('gnbOn');
        }).on('mouseleave',function(){
            $OBJ.html.removeClass('gnbOn');
        }).on('click','> li > a',function(){
            if(winW() <= 1024 && $(this).next('ul').length > 0){
                $(this).closest('li').toggleClass('active_01').siblings().removeClass('active_01');
                return false;
            }
        });
        
        mnu.on('click',function(){
            $OBJ.html.toggleClass('gnbOn');
            $OBJ.html.toggleClass('navOn');
        });

        mgnb.on('click', function () {
            var par = $(this).closest('li');
            if ($(this).next('ul').length > 0) {
                par.toggleClass('active_01').siblings().removeClass('active_01');
                return false;
            }
        });

    }
}

var tab = {
	init : function(){
		this.action();
	},
	action : function(){
		var a = $('#tab-area');
		var roll = a.find('.roll');
		var tab = a.find('.tab a');
		var box = a.find('.contents .box');
		
		tab.on('click',function(){
			$(this).addClass('active').siblings().removeClass('active');
			box.eq($(this).index()).addClass('active').siblings().removeClass('active');
			return false;
		});
	}
};

var notice = {
	init : function(){
		this.action();
	},
	action : function(){
		var a = $('#notice');
		var roll = a.find('.roll');
		var tab = a.find('.tab a');
		var area = a.find('.sec .area');

		tab.on('click',function(){
			$(this).addClass('active').siblings().removeClass('active');
			area.eq($(this).index()).addClass('active').siblings().removeClass('active');
			return false;
		});

	}
};



var snb = {
    init: function () {
        if ($('#snb').length > 0) {
            this.action();
        }
    },
    action: function () {
        var a = $('#header .gnb > .active > ul').html();
        $('#snb').html(a);
    }
}


var popup = {
    init: function () {
        if ($('.__popup').length > 0) {
            this.action();
        }
    },
    action: function () {
        var a = $('.__popup');
        var close = a.find('.close');
        var spd = 500;

        a.draggable();

        a.each(function () {
            var id = $(this).attr('id');
            if ($.cookie(id) != 'none') {
                $('#' + id).show();
            }
        });

        close.on('click', function () {
            var par = $(this).closest('.__popup');
            var id = par.attr('id');

            if (par.find('.chk').is(':checked')) {
                $.cookie(id, 'none', {
                    expires: 1
                });
            }

            par.fadeOut(spd);
        });

    }
}


$(document).ready(function () {
    head.init();
    snb.init();
    notice.init();
	tab.init();
});



  



