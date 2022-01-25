<?php
function sum($max){
    $result = $max * 2;
    return $result;
}

echo sum(184);
echo "\n";

function add($a, $b){
    $result = $a + $b;
    return $result;
}

echo add(5,8);
echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
function mult($arr){
    $result = 1;
    foreach($arr as $ar){
        $result = $result * $ar;
    }
    return $result;
}

echo mult(array(1,3,5,7,9));
echo "\n";

//下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください

 function max_array($arr){
    // とりあえず配列の最初の要素を一番大きい値とする
     $max_number = $arr[0];
     foreach($arr as $a){
     //もし、＄aが、＄max_numberより大きかったら、max_numberを＄aと同じにする
         if($a > $max_number){
             $max_number = $a;
         }
     }
     return $max_number;
 }
echo max_array(array(1,22,3,4,5,6,));
echo "\n";

//下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

//strip_tags 文字列からhtmlタグを取り除く関数
$str = "<h1>Hello</h1><b>World</b>";  
echo strip_tags($str);

//array_push 一つ以上の要素を配列の最後に追加する
$members=array("一郎","二郎","三郎");
    array_push($members,"四郎","五郎");
    print_r($members);

//array_push ひとつまたは複数の配列をマージする
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);

//time, mktime phpの標準関数で指定した日時のタイムスタンプを取得するためのメソッド
$time = mktime(9);
    var_dump(date('Y年m月d日h時i分s秒', $time));
    print('<br/>');

$time = mktime(10, 10, 10);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');

$time = mktime(0, 0, 0, 1, 1, 2020);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');
  
 //date 指定された日時を任意の形式でフォーマットし、日付文字列を返す関数
 date_default_timezone_set('Japan');
  echo '<p>', date('Y/m/d H:i:s'), '</p>';
  echo '<p>', date('Y年m月d日 H時i分s秒'), '</p>';
  echo '<p>', date('Y M j H:i:s'), '</p>';
  echo '<p>', date('Y年m月d日 A H時i分s秒'), '</p>';
  echo '<p>', date('Y M j l H:i:s'), '</p>';
