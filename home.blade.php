<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        こんにちは！
        @auth
            {{\Auth::user()->name}}さん<br>
            <a href="/auth/logout">ログアウト</a>|<a href="/foods/add">食べ物選択へ</a><br>
            <table>
                <tr>
                    <th>あなたが1日で必要な栄養素と量</th>
                </tr>
                <tr>
                    @foreach ($required_data as $data)
                            <td>{{$data->getData()}}</td>
                    @endforeach
                </tr>
            </table>
                <table>
                    <tr>
                        <th>あなたが食べたもの</th>
                    </tr>
                    <tr>
                        @isset($got_foods)
                            @foreach ($got_foods as $got_food)
                                <td>{{$got_food->food_name}}</td> 
                            @endforeach
                        @endisset
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>あなたが本日必要な栄養素の残量</th>
                    </tr>
                    @isset($userSelectedFood)
                        @foreach ($userSelectedFood as $userSelectedFoods)
                            @foreach ($required_data as $data)
                            @endforeach
                        @endforeach
                    <tr>
                        <th>&nbsp;タンパク質</th><th>&nbsp;脂質</th><th>&nbsp;炭水化物</th><th>&nbsp;カルシウム</th><th>&nbsp;鉄分</th><th>&nbsp;ビタミンA</th><th>&nbsp;ビタミンE</th>
                        <th>&nbsp;ビタミンB1</th><th>&nbsp;ビタミンB2</th><th>&nbsp;ビタミンC</th><th>&nbsp;食物繊維</th><th>&nbsp;飽和脂肪酸</th><th>&nbsp;塩分</th>
                    </tr>
                    <tr>
                        <td>&nbsp;{{$data->protein_g - $userSelectedFoods->getSumProtein() . '(g)'}}</td>
                        <td>&nbsp;{{$data->lipid_g - $userSelectedFoods->getSumlipid() . '(g)'}}</td>
                        <td>&nbsp;{{$data->carbohydrate_g - $userSelectedFoods->getSumCarbohydrate() . '(g)'}}</td>
                        <td>&nbsp;{{$data->calcium_mg - $userSelectedFoods->getSumCalcium() . '(mg)'}}</td>
                        <td>&nbsp;{{$data->iron_mg - $userSelectedFoods->getSumIron() . '(mg)'}}</td>
                        <td>&nbsp;{{$data->protvitaminA_mug - $userSelectedFoods->getSumVitaminA() . '(mug)'}}</td>
                        <td>&nbsp;{{$data->vitaminE_mg - $userSelectedFoods->getSumVitaminE() . '(mg)'}}</td>
                        <td>&nbsp;{{$data->vitaminB1_mg - $userSelectedFoods->getSumVitaminB1() . '(mg)'}}</td>
                        <td>&nbsp;{{$data->vitaminB2_mg - $userSelectedFoods->getSumVitaminB2() . '(mg)'}}</td>
                        <td>&nbsp;{{$data->vitaminC_mg - $userSelectedFoods->getSumVitaminC() . '(mg)'}}</td>
                        <td>&nbsp;{{$data->dietary_fibers_g - $userSelectedFoods->getSumDietaryFibers() . '(g)'}}</td>
                        <td>&nbsp;{{$data->Saturated_fatty_acid_g - $userSelectedFoods->getSumSaturatedFattyAcid() . '(g)'}}</td>
                        <td>&nbsp;{{$data->salt_g - $userSelectedFoods->getSumSalt() . '(g)'}}</td>
                    </tr>
                    @endisset
                </table>
        @endauth
        @guest
        ゲストさん<br>
            <a href="/auth/login">ログイン</a>
            <a href="/auth/register">会員登録</a>
        @endguest
    </body>
</html>