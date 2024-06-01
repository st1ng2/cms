<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Montserrat', 'Helvetica Neue', Helvetica, Arial, 'sans-serif';
            background-color: #151515;
            color: #fff;
            padding: 20px;
        }

        .container {
            background-color: #151515;
            padding: 8rem 0;
            border-radius: 5px;
        }

        .block {
            max-width: 600px;
            color: #ffffffb2;
            margin: 0 auto;
            border-radius: 5px;
            overflow: hidden;
            background-color: #1c1c1c;
        }

        .header {
            background-color: #272727;
            padding: 20px;
            color: #fff
        }

        h1 {
            margin: 10px;
            line-height: 1;
        }

        .content {
            padding: 20px;
        }

        .white_text {
            color: #fff
        }

        .button {
            display: inline-block;
            background-color: #1be09e;
            color: #000 !important;
            padding: 10px 20px;
            text-decoration: none;
            margin: 10px auto;
            border-radius: 3px;
            transition: background-color 0.3s ease;
            font-weight: bold;
            font-family: 'Montserrat', sans-serif;
        }

        .button:hover {
            background-color: #1bd194;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="block">
            <div class="header">
                <h1>@t('auth.confirmation.subject')</h1>
            </div>
            <div class="content">
                <p class="white_text">@t('auth.dear', [':name' => $name]),</p>
                <p>@t('auth.confirmation.thanks_for_register')</p>
                <a href="{{ $url }}" class="button">@t('auth.confirmation.verify_account')</a>
                <p>@t('auth.confirmation.ignore')</p>
                <p class="white_text">@t('auth.with_best', [':name' => app('app.name')])</p>
            </div>
        </div>
    </div>
</body>

</html>
