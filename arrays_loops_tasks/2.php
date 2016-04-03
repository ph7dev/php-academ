<?php
error_reporting(-1);
/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 02.04.2016
 * Time: 12:48
 */
function tit($number){
    return "<br><br><i>//task $number</i><br>";
}

define ("B","<br>");
//1
$elemnts = array ('html', 'css', 'php', 'js', 'jq');
echo tit(1);
foreach ($elemnts as $elemnt){
    echo $elemnt.'<br>';
}

//2
$nums = array (1, 20, 15, 17, 24, 35);
echo tit(2);
$res = 0;
foreach ($nums as $num){
    $res += $num;
}
echo "сумма чисел = ".$res.'<br>';

//3
$quads = array (26, 17, 136, 12, 79, 15);
echo tit(3);
$res_q = 0;
foreach ($quads as $quad){
    $res_q += ($quad*$quad);
}
echo "сумма квадратов = ".$res_q.'<br>';

//4

$arr = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
echo tit(4);
echo "Список ключей:<br>";
foreach ($arr as $k=>$value){
    echo $k.'<br>';
}
echo "Список значений:<br>";
foreach ($arr as $value){
    echo $value.'<br>';
}

//5
echo tit(5);
$people = array('Коля'=>200, 'Вася'=>300, 'Петя'=>400);
foreach ($people as $name=>$salary){
    echo "$name — зарплата $salary долларов<br>";
}

//6
echo tit(6);
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en = array();
$ru = array();

foreach ($arr as $k=>$item){
    $en[] = $k;
    $ru[] = $item;
}

echo "<pre>";
echo 'massive $en:<br>';
print_r($en);
echo 'massive $ru:<br>';
print_r($ru);
echo "</pre>";

//7
echo tit(7);
$nums = array (2, 5, 9, 15, 0, 4);

foreach ($nums as $num){
    if ($num > 3 && $num < 10){
        echo "$num<br>";
    }
}

//8
echo tit(8);
$nums = array (1, 2, 3, 4, 5, 6, 7, 8, 9);
$cnt = count($nums)-1;
$i = 0;
echo 'Через цикл while:<br>';
while ($i <= $cnt){
    echo $nums[$i];
    $i++;
}
echo '<br>Через цикл for:<br>';
for ($i = 0; $i <= $cnt; $i++){
    echo $nums[$i];
}

//9
echo tit(9);
for ($i = 1; $i < 100; $i++){
    echo "$i<br>";
}

//10
echo tit(10);
for ($i = 11; $i <= 33; $i++){
    echo "$i<br>";
}

//11
echo tit(11);
for ($i = 0; $i <= 100; $i++){
    if (!($i%2)){
        echo "$i<br>";
    }
}

//12
echo tit(12);
$n = 1000;
$num = 0;

do {
    $res_equal = (integer)($n/2);

    echo $n."/2 = ".$res_equal."<br>";
    $num += 1;
    $n = $res_equal;
}while (!$n < 50);

echo "Число 1000 поделено на 2: $num раз.";

//13
echo tit(13);

for ($i = 1; $i <= 9; $i++){
    for ($x = 1; $x <= 9; $x++){
        $sum = $i*$x;
        echo $i."x".$x." = $sum".B;
    }
    echo B;
}

//14
echo tit(14);
$nums = array (4, 2, 5, 19, 13, 0, 10, 3);

foreach ($nums as $num){
    if ($num == 2 or $num == 3 or $num == 4){
        echo "$num Est!<br>";
    }else{
        echo "Net!<br>";
    }
}

//15
echo tit(15);
$nums = array (4, 2, 5, 19, 13, 0, 10);
$count = 0;

foreach ($nums as $num){
    $count += 1;
}

echo $count;

//16
echo tit(16);
//задача не ясна

//17
echo tit(17);

$months = array (
    'Январь','Февраль',
    'Март','Апрель','Май',
    'Июнь','Июль','Август',
    'Сентябрь','Октябрь','Ноябрь',
    'Декабрь');
$now = 'Март';

foreach ($months as $month){
    if ($now == $month){
        echo "<b>$month</b><br>";
    }else{
        echo "$month<br>";
    }
}

//18
echo tit(18);

$days = array ("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
$weekend = array ("Saturday","Sunday");
$now = "Saturday";

foreach ($days as $day){
    if ($weekend[0] == $day or $weekend[1] == $day){
        echo "<b>$day</b><br>";
    }else{
        echo "$day<br>";
    }
}

//19
echo tit(19);

$days = array ("Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday");
$weekend = array ("Saturday","Sunday");
$now = "Saturday";

foreach ($days as $day){
    if ($now == $day){
        echo "<i>$day</i><br>";
    }else{
        echo "$day<br>";
    }
}

//20
echo tit(20);
$str = "x";

for ($i = 0; $i < 20; $i++){
    echo $str.B;
    $str .= "x";
}

//21
echo tit(21);

$str21 = '';
for ($i = 1; $i < 10; $i++){
    for ($g = 0; $g < $i; $g++){
        $str21 .= "$i";
    }
    echo $str21.B;
    $str21 = '';
}

//22
echo tit(22);

$str = "xx";
$cnt = 5;

while ($cnt == true){
    echo $str."<br>";
    $str .= "xx";
    $cnt--;
}

//23
echo tit(23);

$number = 123;
$number = (string)$number;

for ($i = 0; $i <= strlen($number)-1; $i++){
    $arr23[] = $number[$i];
}

echo "Сумма елементов числа ".$number." = ".array_sum($arr23).B;

//24
echo tit(24);
$init_num = 7374377;
$search_num = 3;

$init_num = (string)$init_num;

for ($i = 0; $i <= strlen($init_num)-1; $i++){
    $arr23[] = $init_num[$i];
}

$res = array_keys($arr23, "$search_num");

echo "Число ".$search_num." встречается в числе ".$init_num." - ".count($res)." раз(а).";


//25
echo tit(25);

for ($i = 0; $i <= 5; $i++){
    $rand_mass[] = rand(1,100);
}

function my($a, $b){
    if ($a == $b){
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

usort($rand_mass, "my");
$max = count($rand_mass)-1;

echo "<pre>";
print_r($rand_mass);
echo "</pre>";

echo "Минимальное значение = {$rand_mass[0]}".B;
echo "максимальное значение = {$rand_mass["$max"]}".B;

$min = $rand_mass[0];
$rand_mass[0] = $rand_mass["$max"];
$rand_mass["$max"] = $min;

echo "<pre>";
print_r($rand_mass);
echo "</pre>";


//26
echo tit(26);

//создать и заполнить массив
for ($i = 0; $i <= 6; $i++){
    $rand_mass26[] = rand(0,5);
}

//создаем пустой массив для хранения значений у которых буду парные ключи
//и значения не равны нулю
$two = array();
echo "исходный/начальный массив:".B;
echo "<pre>";
print_r($rand_mass26);
echo "</pre>";

foreach ($rand_mass26 as $key=>$value){
    if (!($key%2) && $value != 0){

        //в массив $two записываем все значения у которых парный индекс и значения не равны 0
        //заодно сохраняем исходные ключи значений.
        $two["$key"] = $value;

        //из исходного массива удаляем значения и ключи которые были записаны в массив $two.
        unset($rand_mass26["$key"]);
    }elseif(!($key%2) && $value == 0){

        //так же если ключ парный и значение равно нулю -
        //тоже удаляем его из массива, так как по условию такие значения нам вообще не нужны,
        //мы не будем их использовать
        unset($rand_mass26["$key"]);
    }
}

//выводим элементы у которых непарый индекс и значения больше нуля
echo "элементы которые больше нуля и которых <span style='color: red;'><b>НЕ</b></span>парный индекс:".B;
foreach($rand_mass26 as $k=>$item){
    if ($item > 0){
        echo "[$k] : $item".B;
    }
}
$res = 1;
foreach($two as $k=>$v){
    $res *= $v;
}
/*
//раскомментировать для просмотра элементов которые перемножаются
echo "<pre>";
echo "two".B;
print_r($two);
echo "</pre>";
*/
echo B."Результат произведения значений которые больше нуля и у которых парный индекс: сумма = ".$res.B;


//27
echo tit(27);

$cols = rand (1,10);//столбцы
$rows = rand (1,10);//строки
$colors = array('red','yellow','blue','gray','maroon','brown','green');

?>
<table>
<?php

for ($i = 0; $i <= $rows; $i++){
    echo "<tr>";
        for ($x = 0; $x <= $cols; $x++){
            echo "<td style='background:".$colors[rand(0,6)]."'>";
            echo "<b style='color:white'>".rand(99,99999)."</b>";
            echo "</td>";
        }
    echo "</tr>";
}
?>
</table>








