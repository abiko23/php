<?php
$success = file_put_contents('./news_data/news.txt', '2020-12-23 ホームページを更新しました');
if($success) {
  print('ファイルへの書き込みが完了しました');
}else{
  print('書き込みに失敗しました。');
}
?>