$(document).ready(function(){
	$(document).on('click', '.header__city', function(e){
		e.preventDefault();
		$('body').css('overflow','hidden');
		$('.me_citymodal_main_block').css('display','flex');
		setTimeout(function(){ $('.me_citymodal_main_block').css('opacity','1'); }, 50);
	});
	$(document).on('click', '.me_citymodal_close_button, .me_citymodal_background', function(e){
		e.preventDefault();
		$('body').css('overflow','');
		$('.me_citymodal_main_block').css('opacity','0');
		setTimeout(function(){ $('.me_citymodal_main_block').hide(); }, 550);
	});
});