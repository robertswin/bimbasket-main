
// Hide loading overlay <div /> (with spinner) after page complete loading. After hiding,
//   <div /> will be removed, and for <body> removed css class 'noscroll'
var _loading_spinner=setInterval(function(){if(document.readyState=='complete'){
  var $page_loading = document.getElementById('page_loading'),
      $body = document.body || document.getElementsByTagName('body')[0],
      speed = 300, delay = 500;
  if((typeof $page_loading != 'undefined') && ($page_loading != null)){
    setTimeout(function(){
      var transition = 'opacity ' + speed.toString() + 'ms ease',
          removeCssClass = function(obj, className){
            obj.className = obj.className.replace(className, '').replace('  ', ' ');
          };
      ['-webkit-transition','-moz-transition','transition'].forEach(function(prefix){
        $page_loading.style[prefix] = transition;
      });
      $page_loading.style['opacity'] = '0';
      $page_loading.style['filter']  = 'alpha(opacity=0)';
      removeCssClass($body, 'noscroll');
      setTimeout(function(){
        $page_loading.parentNode.removeChild($page_loading);
      }, speed + 10);
    }, delay);
  }
  clearInterval(_loading_spinner);
}},10);



$(document).ready(function(){






 wow = new WOW(
                      {
                      boxClass:     'wow',      // default
                      animateClass: 'animated', // default
                      offset:       0,          // default
                      mobile:       true,       // default
                      live:         true        // default
                    }
                    ) 
                    wow.init();
	
	
	$('#fullpage').fullpage({
		anchors: ['head', 'product-1', 'product-2', 'product-3', 'end'],
		navigation:true,
		slidesNavigation: false,
        slidesNavPosition: 'bottom',
		scrollBar:false,
		navigationTooltips:['Главная','Новогодний набор','Монсики','Коробка с характером','Обратная связь'],
		 autoScrolling: true,
        fitToSection: true,
        fitToSectionDelay: 1000, 
		continuousVertical: false,
		controlArrows: false,
        verticalCentered: false,
        touchSensitivity:1,
	
		
	});
	
	 

// // ------> Monsta figure hover effect box 1
	// //--> IN
// $(".monsta-1").on('mouseenter', function(){

// $('.figureleft').css({'background':'rgba(154, 154, 154)','borderRight':'8px solid #fff'});

// $('#m1').animate({'top':'-140','font-size': '49px','position': 'relative'},1500)

// $('.hiddencontent p').animate({	'opacity':'1'},2500)

// });
// // <-- OUT

// //--> IN

// $(".monsta-1").on('mouseleave', function(){
// $('.figureleft').css({'background':'#febc11','borderRight':'none'});
// $('#m1 ').animate({'top':'-47','font-size': '49px','position': 'relative'},1500)
// $('.hiddencontent p').animate({	'opacity':'0'},1000)

// // <-- OUT

// });
	
// // <------ Monsta figure hover effect box 1	

// // ------> Monsta figure hover effect box 2

// $(".monsta-2").on('mouseenter', function(){
	// $('.figurecenter').css({
		// 'background':'rgba(154, 154, 154)',
		// 'cursor':'pointer',
		// 'borderRight':'8px solid #fff',
		// 'borderLeft':'8px solid #fff'
	// });
	// $('#m2').animate({'marginTop':'-91','font-size': '49px','position': 'relative'},1500)
	// $('.hiddencontentc p').animate({'opacity':'1'},2500)
	
	
	// });

// $(".monsta-2").on('mouseleave', function(){
	// $('.figurecenter').css(	{
		// 'background':'#7b65ac',
		// 'borderRight':'none',
		// 'borderLeft':'none'		
	// });
	// $('#m2').animate({'marginTop':'0','font-size': '49px','position': 'relative'},1500)
	// $('.hiddencontentc p').animate({	'opacity':'0'},1000)
	
	
	// });	
// // <------ Monsta figure hover effect box 2	


// // ------> Monsta figure hover effect box 3
// $(".monsta-3").on('mouseenter', function(){
// $('.figureright').css({'background':'rgba(154, 154, 154)','borderLeft':'8px solid #fff'});


// $('#m3').animate({'marginTop':'-91','font-size': '49px','position': 'relative'},1500)
	// $('.hiddencontentr p').animate({'opacity':'1'},2500)


// });
// $(".monsta-3").on('mouseleave', function(){$('.figureright').css({'background':'#f05381','borderLeft':'none'});

// $('#m3').animate({'marginTop':'0','font-size': '49px','position': 'relative'},1500)
	// $('.hiddencontentr p').animate({	'opacity':'0'},1000)

// });	
// // <------ Monsta figure hover effect box 3	
	
	


 



$('.start').snowfall({round : true, minSize: 1, maxSize:8}); // add rounded
$('.product-2').snowfall({round : true, minSize: 1, maxSize:8});
$('.product-3').snowfall({round : true, minSize: 1, maxSize:8});
$('.end').snowfall({round : true, minSize: 1, maxSize:8});
$('#santaa').pan({fps:48, speed: 1, dir: 'left', depth: 10});
 
 
$('#box-1').sprite({fps:.5, no_of_frames:2});
$('#box-2').sprite({fps:.8, no_of_frames:2});
$('#box-3').sprite({fps:1, no_of_frames:2});
 
 
$("#box-1").animate({   top:379	},15000);
$("#box-2").animate({   top:250	},15000); 
$("#box-3").animate({   top:450	},15000); 


});
	
	
	
	
	
	
