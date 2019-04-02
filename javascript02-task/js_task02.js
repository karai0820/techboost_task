(function($,window){
	$(function(){
//1.jQueryオブジェクトを削除するメソッドを調べ、<h2>を非表示(hide)ではなく、削除してみましょう。
	$('h2').remove();		
//2.#indexにtext()メソッドとhtml()メソッド(ともにパラメータ無し)を実行して、その違いについて比べてみましょう。
	//text()メソッドは文字列を返す。html()メソッドは子要素のタグ＋文字列を返す。
	var text = $('#index').text();
	alert(text);
	var html = $('#index').html();
	alert(html);
//3.子要素を追加するappendというメソッドについて調べ、ul#indexの最後に<li>メソッド</li>を追加してみましょう。
	$('#index').append('<li>メソッド</li>');
//4.ul#indexの子要素<li>それぞれ文字列の長さをalertしてみましょう。	
	$('#index').find('li').each(function(){
		alert($(this).text().length);
	});
//5.4.でalertではなく、各文字列の最後にその長さを追加してみましょう。例：jQueryのはじめ方[11文字]
	$('#index').find('li').each(function(){
		$(this).append("["+ $(this).text().length + "文字]");
	});
	});
})(jQuery,window);





