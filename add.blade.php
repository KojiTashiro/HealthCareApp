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
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif
        <form action="/home" method="post">
            {{ csrf_field() }}
            <table>
                @foreach ($foods_category as $cotegory)
                    @foreach ($Rice as $rice)
                        @foreach ($Curry as $curry)
                    <tr>
                        <td>米類({{$cotegory->rice_dishes}})</td>
                        <td>
                            <input type="radio" name="food[]" value="{{$rice}}">ライス
                            <input type="radio" name="food[]" value="{{$curry}}">カレーライス
                        </td>
                    </tr>
                    <tr>
                        <td>パン類({{$cotegory->bread_products}})</td>
                        <td>
                            <select name="food[]">
                                <option value="">--</option>  
                                <option value=""></option>
                                <option value="">カレーパン</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>麺類({{$cotegory->noodle_dishes}})</td>
                        <td>
                            <input type="radio" name="food[]" value="{{$SoySourceRamen}}">醤油ラーメン
                        </td>
                    </tr>
                    <tr>
                        <td>肉類({{$cotegory->meat_dishesd}})</td>
                        <td>
                            <select name="food[]">
                                <option value="">--</option>   
                                <option value=""></option>
                                <option value="">カレーパン</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>海鮮類({{$cotegory->seefood_dishes}})</td>
                        <td>
                            <select name="food[]">
                                <option value="">--</option>    
                                <option value=""></option>
                                <option value="">マグロ刺身</option>
                            </select>
                        </td>
                    </td>
                    </tr>
                    <tr>
                        <td>野菜類({{$cotegory->vagetable_dishes}})</td>
                        <td>
                            <select name="food[]">
                                <option value="">--</option>    
                                <option value=""></option>
                                <option value="">野菜スティック</option>
                            </select>
                        </td>
                    </td>
                    </tr>
                    <tr>
                        <td>果物類({{$cotegory->fruits}})</td>
                        <td>
                            <select name="food[]">
                                <option value="">--</option>    
                                <option value=""></option>
                                <option value="">パイナップル</option>
                            </select>
                        </td>
                    </td>
                    </tr>
                    <tr>
                        <td>卵類({{$cotegory->egg_dishes}})</td>
                        <td>
                            <select name="food[]">
                                <option value="">--</option>    
                                <option value=""></option>
                                <option value="">目玉焼き</option>
                            </select>
                        </td>
                    </td>
                    </tr>
                    <tr>
                        <td>乳製品類({{$cotegory->dairy_products}})</td>
                        <td>
                            <select name="food[]">
                                <option value="">--</option>    
                                <option value=""></option>
                                <option value="">ヤクルト</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>デザート類({{$cotegory->desserts}})</td>
                        <td>
                            <select name="food[]">
                                <option value="">--</option>    
                                <option value=""></option>
                                <option value="">ゼリー</option>
                            </select>
                        </td>
                    </tr>
                        @endforeach
                    @endforeach
                @endforeach
            </table>
            <input type="submit" value="選択">
        </form>
    </body>
</html>