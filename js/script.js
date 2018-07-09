$(function(){
	//effect bounce
	$("#btn1").on("click",function(){
		$(".div1").effect("bounce",{
			times:7,
			distance:100,
			direction:"left"
		},1000);
	});

	//effect explode
	$("#btn2").on("click",function(){
		$(".div2").effect("explode",{
			pieces:9			
		},2000,function(){//после проявления эффекта запускаем функцию обратного вызова. восстанавливаем блок
			$(".div2").effect("explode",{
				pieces:9,
				mode:'show'
			},2000);
		});
	});

	//effect pulsate
	$("#btn3").on("click",function(){
		$(".div3").effect("pulsate",{
			times: 7,
			mode:'hide'
		},1000,function(){
			$(".div3").css({
				backgroundColor:"white",
				display:"block",
				border:"none"
			})
		});
	});

	//show/Hide
	$("#btnshow").on("click",function(){
		$(".divshow").show("explode",2000);
	});
	$("#btnhide").on("click",function(){
		$(".divhide").hide("explode",2000);
	});

	//Add/Remove class
	$("#btnadd").on("click", function(){
		$("#pic1").addClass("imgcircle",1000);
	});
	$("#btnremove").on("click", function(){
		$("#pic2").removeClass("imgcircle",1000);
	});

	//Switch class
	$("#btnswitch").on("click", function(){
		$(".divtxt p").switchClass("abzac","newabzac",1000);
	});

	//color Animate
	$("#animbtn").on("click", function(){
		$(".anim").animate({
			backgroundColor:"yellow",
			width:"400",
			height:"400",
			color:"red"
		},2000);
	});
/*------- Widget accordeon ------- */
	$("#accordeon").accordion({
		//какая секция будет открыта при загрузке, начиная с 0
		active:false,
		collapsible:true,// позволяет закрывать секцию
		heightStyle:'content', //высота выпадающего пункта по высоте контента его
		/*event:'mouseover',*/ //открывает пункт аккордеона по наведению мышкой
		icons:{"header":"ui-icon-plus", "activeHeader":"ui-icon-minus"}
	});
	//widget tabs
	$("#tabs").tabs({
		collapsible:true,
		heightStyle:'auto',
		active:2
	});

/*--------------------------------------------------*/	
//menu
$("ul.menu").menu();
//datepicker
$("#calendar").datepicker({
	changeYear: true,
	changeMonth: true,
	yearRange: '1940:2018',
	showWeek: true,
	showOn: 'both',
	showButtonPanel: true,
	showAnim: 'explode',
	numberOfMonths: [1,3],
	duration:'slow',
	buttonText: 'Выбрать дату'

});
//widget button
$('#btn4, #link').button();
//dialog 
$("#btn5").on('click', function(){
	$("#dialog").dialog({
		modal: true,
		buttons: {
			Cancel: function(){
				$(this).dialog("close");
			}
		},
		show: {
			effect: 'explode', duration: 500
	},
	hide: {
			effect: 'explode', duration: 1000
	}
	});
	});
//slider

  $( "#slider" ).slider({
  	max: 200,
  	range: true,
  	values:[10,50],
  	step:5,
  	animate: true,
  	slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider" ).slider( "values", 0 ) +
      " - $" + $( "#slider" ).slider( "values", 1 ) );
  
  //Draggeble

  $( "#kart1, #kart2, #kart3" ).draggable({
  	revert: true,
  	helper: 'clone',
  	opacity: .5,
  	zIndex: 100,
  	cursor: "pointer",
  	revertDuration: 2000
  });

  //Droppable

  $( ".pics img" ).draggable({
  	revert: 'invalid',
  	start: function(event, ui){
  		ui.helper.css('transform', 'rotate(5deg)', 'scale(1.2)');
  	},
  	stop: function(event, ui){
  		ui.helper.css('transform', 'rotate(0deg)', 'scale(1)');
  	},
  	zIndex: 100
  });

  $( "#trash" ).droppable({
  	activeClass: 'highlight',
    drop: function( event, ui){
    	ui.helper.hide('explode');
      	$(this).attr('src', 'img/trashcan-full-icon.png');
        
      }
    });
    //sortable
    $('.spisok1').sortable({
    	connectWith: '.spisok2',
    	change: function(event, ui){
    		ui.helper.css('backgroundColor', 'red');
    	},
    	stop: function(event, ui){
    		ui.item.css('backgroundColor', 'grey');
    	}
    });
    $('.spisok2').sortable({
    	connectWith: '.spisok1',
    	change: function(event, ui){
    		ui.helper.css('backgroundColor', 'red');
    	},
    	stop: function(event, ui){
    		ui.item.css('backgroundColor', 'grey');
    	}
    });
//resizeble
$( "#resize" ).resizable({
      /*helper: "ui-resizable-helper",*/
      animateDuration: "fast",
      animateEasing: "easeOutBounce"
    });

//superfish menu
$('#menu1, #menu2, #menu3').superfish({
	dealey: 5000,
	dropShadows: false,
	animation:     {opacity:'show', height:'show'},
	animationOut:  {opacity:'hide', height:'hide'}
});

//galery color box
$('.gal').colorbox({
	rel: "gal",
	transition: 'fade',
	speed: 500,
	width: 500,
	height: 400,
	innerWidth: 300,
	innerHeight: 300,
	opacity: 0.7,
	slideshow: true,
	slideshowSpeed: 3000,
	slideshowAuto: true,
	current: "Фото {current} из {total}",
	slideshowStart: "Запуск слайдшоу",
	slideshowStop: "Стоп слайдшоу"

});
$('.youtube').colorbox({
	iframe: true,
	width: 500,
	height: 400
});
$('.inline').colorbox({
	inline: true,
	width: "50%"
});

//bxSlider 
$('.slider').bxSlider({
	infiniteLoop: true,
	auto: true,
	video: true

});
  //space_Gallery
  $('#myGallery').spacegallery({
  	
  });
//wowjs animate
wow = new WOW({
	boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0				// distance to the element when triggering the animation (default is 0)

      });
wow.init();
});
