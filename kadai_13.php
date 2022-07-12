<?php
echo 'hello php!';
echo "\n";

// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function kakezan($a){
    return $a * 2;
}
 echo kakezan(5);
 echo "\n";
 

// 2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください

function add($a, $b){
$result = 0;
return  $a + $b;
 }
 echo add(3,5);
 echo "\n";
 
 
// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function hairetu($arr){
 $array[] = $arr(1,3,5,7,9);
 $result = 0;
 return $result;
}
$number =  hairetu($arr);
echo hairetu(array(1, 3, 5 ,7, 9));
echo "\n";


// 4.【応用】下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
 //どうしたらいいかわからない・・・・
 }

 return $max_number;
 }
 echo max_array();
 echo "\n";

// 5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

// strip_tags
// //文字列から HTML および PHP タグを取り除く
// strip_tags(string $string, array|string|null $allowed_tags = null): string
// //指定した文字列 (string) から全ての NULL バイトと HTML および PHP タグを取り除く

// array_push
// //一つ以上の要素を配列の最後に追加する
// $stack = array("orange", "banana");
// array_push($stack, "apple", "raspberry");
// print_r($stack);

// array_merge
// // ひとつまたは複数の配列をマージする
// $fruits1 = ['apple', 'orange', 'melon', 'banana', 'pineapple'];
// $fruits2 = ['strawberry', 'cherry', 'watermelon'];
// $fruits3 = ['anzu', 'papaya'];
//  //配列を結合する
// $fruits_merge = array_merge($fruits1, $fruits2, $fruits3);
 
// print_r($fruits_merge);


// time
// // 現在日時のUNIXタイムスタンプを取得
// date
// // 任意の形式でフォーマットし、日付文字列を返す関数
// $timestamp = time(); //タイムスタンプ
// echo date('Y年m月d日 H時i分s秒', $timestamp)."<br/>\n";

// mktime
// // 指定した日時のタイムスタンプを取得するためのメソッド
// /* 2011年11月11日11時11分11秒のUnixタイムスタンプ */
// // mktime( 時, 分, 秒, 月, 日, 年 )
// $tm = mktime( 11, 11, 11, 11, 11, 2011);
// var_dump($tm);
// echo date('Y年m月d日 H時m分s秒', $tm) .'\n&';
