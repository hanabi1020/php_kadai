<?php
echo 'hello php!';

// $name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
// もし違ったら「あなたの名前ではありません」と表示するように実装してください
$name = "shiori";
if ( $name == "shiori" ) {
  echo "私はshioriです";
} else {
  echo "shioriではありません";
}
echo "\n";


// for文を使って、1から10000までの合計の値を表示してください
$total = 1;
echo $total;

for ($i = 1; $i <= 10000; $i++) {
  $total += $i;
}
echo $total;
echo "\n";


// $fruits に配列で好きなフルーツを5個代入し、foreach文で順番に出力してください
$fruits = array("apple", "orange", "lemon","banana","bery");
foreach($fruits as $fruits){
  echo "要素は" . $fruits;
  echo "\n";
}

// 【応用】下記のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください
// for文の始めの値を定義する
$start = 1;
/* for文の終わりの値を定義する */
 $end = 100;

 for($i = $start; $i < $end; $i++){

//   5で割り切れたら{}内を実行する
  if($i % 5 == 0){
    echo $i;
    echo "\n";
  }
}

