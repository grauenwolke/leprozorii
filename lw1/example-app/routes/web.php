<?php

use Illuminate\Support\Facades\Route;

/*
|------------------------------------------------------------------------—
| Web Routes
|------------------------------------------------------------------------—
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'catone' => 'Сингапура ',
        'discriptionone' => 'Сингапурская кошка похожа на маленького представителя абиссинской породы. Ее голова имеет округлую форму с выраженными бакенбардами и короткой широкой мордой. Уши — крупные и глубокие. Глаза — большие, миндалевидной формы, слегка скошенные, широко раскрытые. Несмотря на небольшой размер, тело кошки — коренастое и мускулистое. Хвост — тонкий с тупым кончиком. Шерсть — короткая и гладкая, с черными, коричневыми или кремовыми полосками на каждом из волосков. При этом шерсть имеет более темный окрас на спине, хвосте и ногах, а на груди и животе остается светлой. Глаза у кошек этой породы обычно карие, зеленые или желтые с черным окаймлением.',
        'cattwo' => 'Пиксибоб',
        'discriptiontwo' => 'Пиксибоб — кошка, внешне похожая на рысь. Это крупные животные с коротким хвостом (встречаются особи со средними или даже длинными хвостами). Тело — мускулистое, морда — грушевидная, на ушах кисточки. Большинство кошек короткошерстные, но встречаются и длинношерстные представители. У этих кошек в нижней части лап шерсть имеет более темный окрас ,а вокруг глаз наоборот, шерсть светлого оттенка. Глаза — золотистые или зеленовато-желтые. Пиксибоб — одна из немногих пород, у которой, согласно стандартам, допускается многопалость (наличие дополнительных пальцев). При этом максимальное количество пальцев не может превышать семи.',
        'catthree' => 'Британская короткошерстная',
        'discriptionthree' => 'Британская короткошёрстная — крупная порода, имеющая массивное, коренастое телосложение. У представителей этой породы широкая грудная клетка и толстый хвост. Морда, уши, глаза и голова — имеют округлую форму. У кошки короткий широкий нос и массивная нижняя челюсть. Шерсть у британских короткошёрстных — короткая и густая, без пушистости, бывает более ста окрасов и имеет множество комбинаций пятен.',

    ]);
});
