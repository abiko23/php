<?php
$fruits = [
  'apple' => 'リンゴ',
  'grape' => 'ブドウ',
  'lemon' => 'レモン',
  'tomato' => 'トマト',
  'peach' => 'モモ'
];

foreach ($fruits as $english => $japanese){
  print ($english . ' ; ' . $japanese. "\n");
}
?>