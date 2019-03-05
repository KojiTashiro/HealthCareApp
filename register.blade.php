<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        <h1>ユーザー登録フォーム</h1>
        @if (count($errors) > 0)
        <div class="alert alert-warning" role="alert">
            <p>入力に問題があります。再入力してください。</p>
        </div>           
        @endif
        <table>
        <form action="/auth/register" name="registform" method="post">
            {{ csrf_field() }}
            @if ($errors->has('name'))
                <tr>
                    <th></th>
                    <td>
                        @foreach ($errors->get('name') as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </td>
                </tr>                
            @endif
            <tr>
                <th>好きな名前:</th>
                <td>
                    <input type="text" class="form-control" name="name" placeholder="例)山田　太郎" value="{{old('name')}}"> 
                </td>
            </tr>
            @if ($errors->has('age'))
                <tr>
                    <th></th>
                    <td>
                        @foreach ($errors->get('age') as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </td>
                </tr>
            @endif
            <tr>
                <th>年齢:</th>
                <td>
                    <input type="text" class="form-control" name="age" placeholder="例)20" value="{{old('age')}}">
                </td>
            </tr>
            @if ($errors->has('sex'))
            <tr>
                <th></th>
                <td>
                    @foreach ($errors->get('sex') as $item)
                        <li>{{$item}}</li>
                    @endforeach
               </td>
            </tr>
            @endif
            <tr>
                <th>性別:</th>
                <td>
                    <select class="form-control" name="sex">
                        <option value="">--</option>
                        <option value="m">男性</option>
                        <option value="f">女性</option>
                    </select>
                </td>
            </tr>
            @if ($errors->has('email'))
                <tr>
                    <th></th>
                        <td>
                            @foreach ($errors->get('email') as $item)
                                <li>{{$item}}</li>
                            @endforeach
                        </td>
                </tr>
            @endif
            <tr>
                <th>メールアドレス:</th>
                <td>
                    <input type="text" name="email" class="form-control" placeholder="例)example@email.com" value="{{old('email')}}">
                </td>
            </tr>
            @if ($errors->has('password'))
                <tr>
                    <th></th>
                     <td>
                         @foreach ($errors->get('password') as $item)
                            <li>{{$item}}</li>
                         @endforeach
                     </td>
                </tr>
            @endif
            <tr>
                <th>パスワード:</th>
                <td>
                    <input type="text" name="password" class="form-control" placeholder="最低6文字以上" value="{{old('password')}}">
                </td>
            </tr>
            @if ($errors->has('password'))
                <tr>
                    <th></th>
                    <td>
                        @foreach ($errors->get('password_confirmation') as $item)
                            <li>{{$item}}</li>
                        @endforeach
                    </td>
                </tr>
            @endif
            <tr>
                <th>パスワード(確認):</th>
                <td>
                    <input type="text" name="password_confirmation" class="form-control" value="{{old('password_confirmation')}}"> 
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input type="submit" class="btn btn-default" value="送信"><a href="/home" class="btn btn-default">ホーム</a>
                </td>
            </tr>
        </form>
        </table>
    </body>
</html>