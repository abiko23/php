<?php
$news = file_get_contents('./news_data/news.txt');
$news .= '<br />2020-12-23 ニュースを追加しました';
file_put_contents('./news_data/news.txt', $news);
print($news);
?>