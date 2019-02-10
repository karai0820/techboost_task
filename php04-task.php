<?php
/*1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください*/
function second($i){
	 $i *=2; 
	 return $i;
}

$i=2;
echo second($i);
echo "\n";
//出力 =>4



/*2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。

　参考）引数は下記のように指定すると、複数の仮引数を使うことができます。

 function f($a, $b){
 //処理したい内容
 }
*/

function sum($a,$b){
	$result = $a + $b;

	return $result;
}

$a = 1;
$b = 3;
echo sum($a,$b);
echo "\n";
//出力 =>4



/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。*/
function times($arr){
	$result = 1;
	for($i=0;$i<count($arr);$i++){
		$result *= $arr[$i];
}
return $result;
}

$arr= array(1,2,3,4);
echo times($arr);
echo "\n";
//出力 =>24

/*4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください。

 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
*/
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 	if($a>$max_number){
 		$max_number=$a;

 	}
 
 }

 return $max_number;
}

$arr=array(2,8,6,4,7);
echo max_array($arr);
//出力 =>8




/*5.次のビルトイン関数の用途、使い方を調べて実際に使ってみてください。*/

//strip_tags 文字列からHTMLやPHPタグを取り除く
$test="<a>test</a><p>test2</p>";
echo strip_tags($test,'<a>');
//出力 => <a>test</a>test2

echo"\n";

//array_push １つ以上の要素を配列の最後に追加する
$arr=array(1,2,3,4);
array_push($arr,5,"numbers");
print_r($arr);
/*出力 => Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 5
    [5] => numbers
)
*/

//array_merge 一つまたは複数の配列をマージする （キーは採番される。）
$arr1= array(1,2,3,4);
$arr2=array(2,3,4,5);
$result=array_merge($arr1,$arr2);
print_r($result);
/*出力 =>Array
(
    [0] => 1
    [1] => 2
    [2] => 3
    [3] => 4
    [4] => 2
    [5] => 3
    [6] => 4
    [7] => 5
)
*/

//time , mktime 現在のUnixタイムスタンプを返す
//date ローカルの日付/時刻を書式化する
echo "Now:". date("Y-m-d")."\n";
echo date("l",mktime(0,0,0,2,8,2019))."\n";
echo date("Y-m-d",time()+(7*24*60*60))."\n";
/*出力 =>
Now:2019-02-08
Friday
2019-02-15
*/
?>