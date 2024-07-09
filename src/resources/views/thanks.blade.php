<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thank you</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/thanks.css') }}" />
</head>

<body>
    <div class="thank-you-container">
        <div class="message">
            <h1>Thank you</h1>
            <p>お問い合わせありがとうございました</p>
            <a href="{{ url('/') }}" class="home-button">HOME</a>
        </div>
    </div>
</body>

</html>