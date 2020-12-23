<?php
if(date('G') < 9){
  print('※ 現在は受付時間外です');
}else{
  print('ようこそ');
}
?>

<?php
$answer = 0;
if ($answer == 0){
  print('1以上の数字を入力してください');
}
?>