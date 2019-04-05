(function($,window){
	$(function(){

	$('#button').on('click',function(){
    $("#date_picker").flatpickr({"locale":"ja"});
    $("#date_picker").trigger('focus').trigger('click');
    });

	});

})(jQuery,window);

  
  
