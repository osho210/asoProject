<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reset.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>食べ食べプラン</title>
</head>

<body>
    <!-- G1-4に対応している画面です -->
    <div class="main">
        <div class="text-center">
            <p class="text-success"><strong>ご購入手続き</strong></p>
    <!--線と丸の画像-->
            <li><img src="img/image1.png" /></li>
            <p>お名前</p>
            <input type="text" name="onamae" placeholder="Name"></p>
            <p>メールアドレス</p>
            <input type="text" name="email" placeholder="Email"></p>

            <p>パスワード(半角英数6文字以上)</p>
            <input type="text" name="passward" placeholder="Password"></p>
            <p>すでにアカウントをお持ちの方はこちらから<a href= "login-page.php">ログイン</a>してくださいしてください</p>
	        <p><button type="button" class="btn btn-secondary" onclick= "location.href='menu-list.php'">戻る</button>

            <button type="button" class="btn btn-success" onclick= "location.href='registragtion2-page.php'">次へ</button></p>
</body>

</html>