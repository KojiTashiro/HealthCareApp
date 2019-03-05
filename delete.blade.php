<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
        <body>
            こんにちは！
            @auth
                {{\Auth::user()->name}}さん<br>
                <a href="/home">ホームへ戻る</a><br>
            @endauth
                <form action="/home/delete" method="POST">
                    {{ csrf_field() }}
                    <table>
                        <tr>
                            <th>あなたが食べたもの一覧</th>
                        </tr>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <tr>
                            <td>
                                @foreach ($got_foods as $got_food)
                                    <input type="checkbox" name="delete" value="{{$got_food->food_name}}">{{$got_food->food_name}}
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td><input type="submit" value="送信"></td>
                        </tr>
                    </table>
                </form>
        </body>
</html>