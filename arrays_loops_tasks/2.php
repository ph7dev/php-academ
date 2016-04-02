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

function block ($arg1){
    for ($i = 1; $i <= 9; $i++){
        $sum = $arg1*$i;
        echo $arg1."x".$i." = $sum<br>";
    }
}

for ($i = 1; $i <= 9; $i++){
    echo block($i)."<br>";
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

function xxx($val = 0){
    $str = "x";
    for ($i = 0; $i < $val; $i++){
        $str .= "x";
    }
    return $str;
}

for ($i = 0; $i < 20; $i++){
    echo xxx ($i)."<br>";
}

//21
echo tit(21);

function num($val = '1'){
    $str = "";
    for ($i = 0; $i < $val; $i++){
        $str .= "$val";
    }
    return $str;
}

for ($i = 1; $i < 10; $i++){
    echo num ($i)."<br>";
}


////
