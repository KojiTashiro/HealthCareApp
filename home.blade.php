<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="/css/app.css">
    </head>
    <body>
        こんにちは！
        @auth
            {{\Auth::user()->name}}さん<br>
            <a href="/auth/logout" class="btn btn-default btn-xs" >ログアウト</a><a href="/foods/add" class="btn btn-default btn-xs">食べ物選択</a><a href="/home/delete" class="btn btn-default btn-xs">食べ物削除へ</a><br>
            @if($got_foods->isNotEmpty())
                <table>
                    <tr>
                        <th>■{{\Auth::user()->name}}さんが食べたもの</th>
                    </tr>
                    <tr>
                        <td>
                            @foreach ($got_foods as $got_food)
                                ・{{$got_food->food_name}}
                            @endforeach
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <th>■{{\Auth::user()->name}}さんが本日必要な栄養素の残量</th>
                    </tr>
                </table>
                <table class="table table-condensed">
                    <tr>
                        <th>タンパク質</th><th>脂質</th><th>炭水化物</th><th>カルシウム</th><th>鉄分</th><th>ビタミンA</th><th>ビタミンE</th>
                        <th>ビタミンB1</th><th>ビタミンB2</th><th>ビタミンC</th><th>食物繊維</th><th>飽和脂肪酸</th><th>塩分</th>
                    </tr>
                    <tr>
                        @foreach ($userSelectedFood as $userSelectedFoods)
                            @foreach ($required_data as $data)
                                @if ($loop->parent->iteration == 1)
                                    <td>{{$data->protein_g - $userSelectedFoods->getSumProtein() . '(g)'}}</td>
                                    <td>{{$data->lipid_g - $userSelectedFoods->getSumlipid() . '(g)'}}</td>
                                    <td>{{$data->carbohydrate_g - $userSelectedFoods->getSumCarbohydrate() . '(g)'}}</td>
                                    <td>{{$data->calcium_mg - $userSelectedFoods->getSumCalcium() . '(mg)'}}</td>
                                    <td>{{$data->iron_mg - $userSelectedFoods->getSumIron() . '(mg)'}}</td>
                                    <td>{{$data->protvitaminA_mcg - $userSelectedFoods->getSumVitaminA() . '(mcg)'}}</td>
                                    <td>{{$data->vitaminE_mg - $userSelectedFoods->getSumVitaminE() . '(mg)'}}</td>
                                    <td>{{$data->vitaminB1_mg - $userSelectedFoods->getSumVitaminB1() . '(mg)'}}</td>
                                    <td>{{$data->vitaminB2_mg - $userSelectedFoods->getSumVitaminB2() . '(mg)'}}</td>
                                    <td>{{$data->vitaminC_mg - $userSelectedFoods->getSumVitaminC() . '(mg)'}}</td>
                                    <td>{{$data->dietary_fibers_g - $userSelectedFoods->getSumDietaryFibers() . '(g)'}}</td>
                                    <td>{{$data->Saturated_fatty_acid_g - $userSelectedFoods->getSumSaturatedFattyAcid() . '(g)'}}</td>
                                    <td>{{$data->salt_g - $userSelectedFoods->getSumSalt() . '(g)'}}</td>
                                @endif
                            @endforeach
                        @endforeach
                    </tr>
                </table>
                    @endif
                    @if($got_foods->isEmpty())
                    <table>
                        <tr>
                            <td>まだありません</td>
                        </tr>
                    </table>
                    <table>
                        <tr>
                            <th>{{\Auth::user()->name}}さんが本日必要な栄養素の残量</th>
                        </tr>
                    </table>
                    <table class="table table-condensed">
                        <tr>
                            <th>タンパク質</th><th>脂質</th><th>炭水化物</th><th>カルシウム</th><th>鉄分</th><th>ビタミンA</th><th>ビタミンE</th>
                            <th>ビタミンB1</th><th>ビタミンB2</th><th>ビタミンC</th><th>食物繊維</th><th>飽和脂肪酸</th><th>塩分</th>
                        </tr>
                        <tr>
                            @foreach ($required_data as $data)
                                <td>{{$data->protein_g . '(g)'}}</td>
                                <td>{{$data->lipid_g . '(g)'}}</td>
                                <td>{{$data->carbohydrate_g . '(g)'}}</td>
                                <td>{{$data->calcium_mg . '(mg)'}}</td>
                                <td>{{$data->iron_mg . '(mg)'}}</td>
                                <td>{{$data->vitaminA_mcg . '(mcg)'}}</td>
                                <td>{{$data->vitaminE_mg . '(mg)'}}</td>
                                <td>{{$data->vitaminB1_mg . '(mg)'}}</td>
                                <td>{{$data->vitaminB2_mg . '(mg)'}}</td>
                                <td>{{$data->vitaminC_mg . '(mg)'}}</td>
                                <td>{{$data->dietary_fibers_g . '(g)'}}</td>
                                <td>{{$data->Saturated_fatty_acid_g . '(g)'}}</td>
                                <td>{{$data->salt_g . '(g)'}}</td>
                            @endforeach
                        </tr>
                    </table>
                @endif
        @endauth
        @guest
        ゲストさん<br>
            <a href="/auth/login" class="btn btn-default btn-xs">ログイン</a>
            <a href="/auth/register" class="btn btn-default btn-xs">会員登録</a>
        @endguest
    </body>
</html>