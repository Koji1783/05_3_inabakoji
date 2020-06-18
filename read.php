<?php
// 出力用の文字列（ここに読み込んだデータをタグに入れた形式で追加していく）
$str = "";
// ファイルを開く処理
$csv=fopen('data/data.csv','r');

flock($csv,LOCK_EX);

// ファイル書き込み処理
while (($data = fgetcsv($csv)) !== FALSE) {
  $str .= "<tr><td>
          名前：{$data[0]} メールアドレス：{$data[1]} 年齢：{$data[2]}
          <p>お問い合わせ内容：{$data[3]}</p><br>
          </td></tr>";}

flock($csv,LOCK_UN);

// ファイルを閉じる処理
fclose($csv);



?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>csvファイルお問い合わせリスト（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>csvファイルお問い合わせリスト（一覧画面）</legend>
    <a href="index.php">入力画面</a>
    <table>
      <thead>
        <tr>
          <th>お問い合わせ</th>
        </tr>
      </thead>
      <tbody>
        <?=$str?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>