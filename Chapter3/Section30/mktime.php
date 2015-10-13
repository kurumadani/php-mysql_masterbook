<?php
// Chapter3 PHPの組み込み関数 Section30 日付・時刻
// 日付・時刻を使用するには
// 現在の日時の取得 日付をUNIXタイムスタンプとして取得する
// $変数 = mktime( 時間, 分, 秒, 月, 日, 年 );


$timestamp = mktime( 0, 0, 0, 5, 7, 2005 );
echo $timestamp;