<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/reset.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

  <title>食べ食べプラン</title>
</head>

<body>
  <!-- G1-5に対応している画面です -->
  <div class="main">
    <div class="text-center">
      <p class="text-success"><strong>ご購入手続き</strong></p>
      <!--線と丸の画像-->
      <img src="img/image2.png" />
      <p>お届け先名</p>
      <input type="text" name="Name" placeholder="Name" />
      <p>郵便番号</p>
      <input type="text" name="Post Code" placeholder="Post Code" />
      <p>都道府県</p>
      <input type="text" name="Prefectures" placeholder="Prefectures" />
      <p>地区町村</p>
      <input type="text" name="Towns" placeholder="Town" />
      <p>住所１</p>
      <input type="text" name="address" placeholder="address" />
      <p>住所２</p>
      <input type="text" name="address" placeholder="address" />
      <p>電話番号</p>
      <input type="text" name="number" placeholder="number" />
      <p>お届け日</p>
      <input type="date" name="num01" id="num01" value="date" min="2022-12-16" max="2025-12-31" step="1" />
      <p>お届け時間</p>
      <select name="time">
        <option value="">-</option>
        <option value="1">8:00~12:00</option>
        <option value="2">14:00~16:00</option>
        <option value="3">16:00~18:00</option>
        <option value="4">18:00~20:00</option>
      </select>
      <button type="button" class="btn btn-secondary" onclick="location.href='registragtion1-page.php'">
        戻る
      </button>
      <button type="button" class="btn btn-success" onclick="location.href='payment-page.php'">
        次へ
      </button>
    </div>
  </div>
</body>

</html>

<script>
  var today = new Date();
  today.getFullYear();
  today.getMonth() + 1;
  today.getDate() + 1;
  var todayNum =
    today.getFullYear() +
    "-" +
    (today.getMonth() + 1) +
    "-" +
    (today.getDate() + 1);



  const inputCal = document.getElementById("num01");
  inputCal.min = todayNum;
  console.log(todayNum);
</script>