<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        こんにちは！
        @if (Auth::check())
            {{\Auth::user()->name}}さん<br>
            <a href="/auth/logout">ログアウト</a>|<a href="/home">ホームへ戻る</a><br>
        @else
            ゲストさん<br>
            <a href="/auth/login">ログイン</a>
            <a href="/auth/register">会員登録</a>
        @endif
        <form action="/home" method="post">
            {{ csrf_field() }}
            <table>
                @foreach ($foods_category as $cotegory)
                    @foreach ($Rice as $rice)
                        @foreach ($Curry as $curry)
                    <tr>
                        <td>{{$cotegory->rice_dishes}}</td>
                        <td>
                            <select name="food">    
                                <option value="{{$rice}}">{{$rice->food_name}}</option>
                                <option value="{{$curry}}">{{$curry->food_name}}</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>{{$cotegory->bread_products}}</td>
                    </tr>
                    <tr>
                        <td>{{$cotegory->noodle_dishes}}</td>
                    </tr>
                    <tr>
                        <td>{{$cotegory->meat_dishesd}}</td>
                    </tr>
                    <tr>
                        <td>{{$cotegory->seefood_dishes}}</td>
                    </tr>
                    <tr>
                        <td>{{$cotegory->vagetable_dishes}}</td>
                    </tr>
                    <tr>
                        <td>{{$cotegory->fruits}}</td>
                    </tr>
                    <tr>
                        <td>{{$cotegory->egg_dishes}}</td>
                    </tr>
                    <tr>
                        <td>{{$cotegory->dairy_products}}</td>
                    </tr>
                    <tr>
                        <td>{{$cotegory->desserts}}</td>
                    </tr>
                        @endforeach
                    @endforeach
                @endforeach
            </table>
            <input type="submit" value="選択">
        </form>
    </body>
</html>