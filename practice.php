<?php
// 1〜$max までを足して結果を返す関数
function sum($max) {
    $result = 0;

    // $i は1から始まり、$max より大きくなるまでループする
    for($i = 1; $i <= $max; $i++ ){
        $result += $i;
    }

    return $result;
}

// 関数を実行
echo sum(100);
echo "\n";

$string = "ABCDEF";
echo strlen($string);
//=> 6 と表示される
echo "\n";


$string = "I love Ruby!";

// Ruby という文字列を　PHP に置換する
$new_string = str_replace("Ruby", "PHP", $string);

echo $new_string;
//=> I love PHP!
echo "\n";

$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
echo count($array);
//=> 10 と表示される
echo "\n";


$array = array(2,5,9,7,3,1,8,6,4);

// 配列を昇順（小さい順）にソートする
asort($array);
// print_rで表示する
print_r($array);
//=> Array
//=> (
//=>     [5] => 1
//=>     [0] => 2
//=>     [4] => 3
//=>     [8] => 4
//=>     [1] => 5
//=>     [7] => 6
//=>     [3] => 7
//=>     [6] => 8
//=>     [2] => 9
//=> )
//=> と表示される。

// $array を降順(大きい順)にソートする
arsort($array);
// print_rで表示する
print_r($array);

//=> Array
//=> (
//=>     [2] => 9
//=>     [6] => 8
//=>     [3] => 7
//=>     [7] => 6
//=>     [1] => 5
//=>     [8] => 4
//=>     [4] => 3
//=>     [0] => 2
//=>     [5] => 1
//=> )
//=> と表示される
echo "\n";
?>