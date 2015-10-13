<?php
// Chapter3 PHPの組み込み関数 Section30 日付・時刻
// 日付・時刻を使用するには
// UNIXタイムスタンプを日付にする
// $変数 = date( フォーマット, UNIXタイムスタンプ );



$timestamp = time() + ( ( 60 * 60 * 24 ) * 7 ); // 1週間分の秒数を加算
$next_week = date( 'Y年m月d日 H時i分s秒', $timestamp );
echo $timestamp.'<br>';
echo date( 'Y年m月d日 H時i分s秒' ).'<br>';
echo $next_week;