<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        こんにちは！
        @if (Auth::check())
            {{\Auth::user()->name}}さん<br>
            <a href="/auth/logout">ログアウト</a>
        @else
            ゲストさん<br>
            <a href="/auth/login">ログイン</a>
            <a href="/auth/register">会員登録</a>
        @endif
    </body>
</html>