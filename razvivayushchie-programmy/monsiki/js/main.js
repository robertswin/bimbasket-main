// var imgHead = [
			// 'img/bg1.jpg',
			// 'img/bg2.jpg',
			// 'img/bg3.jpg'
			
		// ], i=1;
	
	// function csaHead(){

		// if(i > (imgHead.length-1)){
			// $('.csa-head').animate({'opacity':'0'},200,function(){
				// i=1;
				// $('.csa-head').css({'background':'url('+imgHead[0]+')'});
			// });
			// $('.csa-head').animate({'opacity':'1'},200);
		// }else{
			// $('.csa-head').animate({'opacity':'0'},200,function(){
				// $('.csa-head').css({'background':'url('+imgHead[i]+')'});
				// i++;
			// });
			// $('.csa-head').animate({'opacity':'1'},200);
		// }
		
	// }
	// var intervalCsaHead = setInterval(csaHead,5000);
$(document).ready(function(){
	
	
$('.more-btn').click(function()
		{			
			$rbul = $('#result-block ul li');
			$batn = $('.more-btn');
			
				if ($rbul.hasClass('hidden'))
				{
					$rbul.removeClass('hidden');
					
					$batn.html('Скрыть');
					
				} else if ($batn.html() == "Скрыть"){
					
					$('#result-block ul li.sk').addClass('hidden');
						$batn.html('Показать');
						
					}
						
					
					
					
					
				})
					


			
		});
	
	
	
	
	
