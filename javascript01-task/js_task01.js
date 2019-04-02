//1.promptで入力した値から「正の数」「負の数」を判定してalertする処理を書いてください。
var number= prompt("数字を入力してください。（正負判定）");
if(number>0){
	alert("正の数");
}else if(number<0){
	alert("負の数");
}
//2.1.で数値以外が入力された場合には「数値を入力してください」とalertする処理を追加してください。
var number= prompt("数値を入力してください。（正負判定）");
if(number>0){
	alert("正の数");
}else if(number<0){
	alert("負の数");
}else if(number==0 && number!=''){
	alert("0はどちらでもありません");
}else{
	alert("数値を入力してください");
}
//または以下のswitch文
var number=prompt("数値を入力してください。（正負判定）");
switch(number){
case number>0:
alert("正の数");
break;
case number<0:
alert("負の数");
break;
case number==0:
alert("0はどちらでもありません");
break;
default:
alert("数値を入力してください");
break;
}

//3.配列に'パンダ', 'ライオン', 'キリン'を定義し、while文ですべて表示する処理を書いてください。
var animal=['パンダ', 'ライオン', 'キリン'];
var i = 0;
while(i<animal.length){
	alert(animal[i]);
	i++;
}

//4.3.でwhile文より前にpromptでキー入力し、その入力した内容が'ライオン'の場合に処理を中断するように変更してください。
var animal=['パンダ', 'ライオン', 'キリン'];
var i = 0;
var anima = prompt();
while(i<animal.length){
	if(anima=="ライオン"){
		break;
	}
	alert(animal[i]);
	i++;
}

//5.4.で中断したときの'ライオン'の添字もalertするように変更してください。
var animal=['パンダ', 'ライオン', 'キリン'];
var i = 0;
var anima = prompt();
while(i<animal.length){
	if(anima=="ライオン"){
		alert(animal[1]);
		break;
	}
	alert(animal[i]);
	i++;
}

//6.オブジェクト変数の配列の形式で、動物と体重を表現してみましょう。例としてパンダは80(Kg)、ライオンは200(Kg)、キリンは300(Kg)としましょう。
var animals = {"パンダ":"80kg","ライオン":"200kg","キリン":"300kg"};


//7.6.でpromptで入力した動物名の体重をalertするように変更してください。
var animal = prompt("パンダ、ライオン、キリン？");
alert(animals[animal]);

//8.円の半径を入力するとその面積を返す関数をつくり、その結果をalertしましょう。円周率は3.14とします。

function circle(x){
	return x*x*3.14;
}
var number = prompt("円の半径");
alert(circle(number));
