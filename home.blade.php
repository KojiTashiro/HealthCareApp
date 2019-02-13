<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        こんにちは！
        @if (Auth::check())
            {{\Auth::user()->name}}さん<br>
            <a href="/auth/logout">ログアウト</a><br>
            @foreach ($items as $item)
                <li>{{$item->rice_products_id}}
                <li>{{$item->bread_products_id}}
                <li>{{$item->noodles_products_id}}
                <li>{{$item->meat_products_id}}
                <li>{{$item->seefood_products_id}}
                <li>{{$item->vagetable_products_id}}
                <li>{{$item->fruit_products_id}}
                <li>{{$item->egg_products_id}}
                <li>{{$item->dairy_products_id}}
                <li>{{$item->dessert_products_id}}
            @endforeach
            <br>
            <table>
                <tr>
                    <th>あなたが1日で必要な栄養素</th>
                </tr>
                <tr>
                    @foreach ($required_data as $data)
                        <td>{{$data->getData()}}</td>
                    @endforeach
                </tr>
            </table>
        @else
            ゲストさん<br>
            <a href="/auth/login">ログイン</a>
            <a href="/auth/register">会員登録</a>
        @endif
    </body>
</html>