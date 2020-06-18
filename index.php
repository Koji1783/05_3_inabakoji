<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問い合わせフォーム</title>
</head>
<body>
    <!-- 入力画面 -->
    <form action="create.php" method="post">
    <fieldset>
        <legend>お問い合わせフォーム（入力画面）</legend>
        <a href="read.php">一覧画面</a>
        <div>
        名前: <input type="text" name="fullname">
        </div>
        <div>
        メールアドレス: <input type="email" name="email">
        </div>
        <div>
        年齢: <input type="text" name="age">
        </div>
        <div>
        <button>submit</button>
        </div>
    </fieldset>
    </form>
</body>
</html>