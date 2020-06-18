<?php
// var_dump($_POST);
// exit();

// データの受取
// $ShiftJIS = $_POST;


// 書き込みデータの作成（スペース区切りで最後に改行コードを追加）
// mb_convert_variables('Shift_JIS', 'UTF-8', $ShiftJIS);

// ファイルを開く処理
$csv=fopen('data/data.csv','a');

// ファイルロックの処理
flock($csv,LOCK_EX);

// ファイル書き込み処理
fputcsv($csv, $_POST);

// ファイルアンロックの処理
flock($csv,LOCK_UN);

// ファイルを閉じる処理
fclose($csv);

// 入力画面へ移動
header('Location:index.php');

// txtファイルへの書き込みのみ行うので表示する画面は存在しない


?>