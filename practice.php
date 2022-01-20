<?php
$name = "Junpei";
switch ($name){
    case "Junpei";
    echo "「私はあなたの名前です。」";
    break;
    default;
    echo "「あなたの名前ではありません」";
}
echo "\n";

$total = 0;

for ($i = 1; $i<=10000; $i++) {
    $total += $i;
}
    echo $total;

echo "\n";

$fruits = array("Apple","Orange","Lemon","Grape","Banana");
foreach($fruits as $fruit){
echo "要素は" .$fruit;
}

echo "\n";

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){

if($i % 5 === 0){
    echo $i;
    echo "\n";
  }
}