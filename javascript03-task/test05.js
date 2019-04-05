(function($,window){
	$(function(){

	function check(){
		var email = $('#email').val(),
			password = $('#password').val();
		
		if(email==''){
			alert('メールアドレスを入力してください');
		}else if(email.indexOf('@')<0){
			alert('メールアドレスには必ず@が必要です');
		}
		if(password==''){
			alert('passwordを入力してください');
		}else if(password.length<6){
			alert("passwordは6文字以上です");//""{}でも変数展開されない
		}
	}

	$('#login').on('click',function(e){
		check();
	});

});
})(jQuery,window);
