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
    <style>
        .orderState img {
            width: 100%;
        }

        .block {
            display: block;
            margin: 20px auto;
        }

        .orderForm {
            text-align: center;
        }

        .orderForm input {
            text-align: center;
        }

        .nameNumInput {
            width: 30px
        }
    </style>
</head>

<body>
    <script>
        <?php require 'DBManager.php';
        $dbmng = new DBManager();
        $dbmng->menu_display()
        ?>
    </script>
    <!-- G1-7に対応している画面です -->
    <div class="orderContentWrapper">
        <div class="orderState">
            <img src="./img/orderContentImage.png">
        </div>
        <div class="orderFormWrapper">
            <form id="orderForm" class="orderForm" method="POST" action="orderConfirmation-page.php">
            </form>
        </div>
    </div>
</body>

</html>

<script>
    const orderForm = document.getElementById('orderForm')
    let json = localStorage.getItem('key');
    let menuCountArrayStorage = JSON.parse(json)
    console.log(menuCountArrayStorage)

    Object.values(menuCountArrayStorage).forEach((value, index) => {
        Object.keys(value).forEach(key => {
            keyValue = key;
            // console.log(keyValue)
        })
        Object.values(value).forEach(detailValue => {
            vallValue = detailValue
            // console.log(vallValue)

            for (let i = 0; i < 1; i++) {
                // 要要素を作成
                const divForm = document.createElement('div')
                const nameNumInput = document.createElement('input')
                nameNumInput.classList.add('class', 'nameNumInput')
                nameNumInput.setAttribute('value', keyValue)
                nameNumInput.setAttribute('name', 'key' + (index + 1))
                nameNumInput.disabled = true;
                const label = document.createElement('label')
                label.innerHTML = menuArray[keyValue][0]
                divForm.appendChild(nameNumInput)
                divForm.appendChild(label)
                orderForm.appendChild(divForm)

                const input = document.createElement('input');
                // formで渡してあげる情報を連想配列にしてあげる
                input.setAttribute('value', vallValue)
                input.disabled = true;
                input.setAttribute('name', 'value' + (index + 1))
                input.classList.add('block')
                orderForm.appendChild(input)
                console.log({
                    [keyValue]: vallValue
                })
                console.log(...(input.value))
            }
        })
    })
    const submit = document.createElement('input');
    submit.setAttribute('type', 'submit')
    submit.setAttribute('value', '送信')
    orderForm.appendChild(submit)
</script>