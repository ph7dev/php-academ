<?php
/**
 * Created by PhpStorm.
 * User: Slava
 * Date: 28.03.2016
 * Time: 15:47
 */

//1-2-3-4-5-6-7-8
$name = "Иннокентий";
$age = 17;


echo "Меня зовут: $name<br>";
echo "Мне $age лет<br>";

if ($age <= 59 and $age >= 18){
    echo "Вам еще работать и работать";
}elseif ($age > 59){
    echo "Вам пора на пенсию";
}elseif ($age < 18){
    echo "Вам еще рано работать";
}else{
    echo "Неизвестный возраст";
}
?>
<br>
<?php

//9-10-11-12

$day = 8;

switch($day){
    case 0 : echo "Задавайте правильно номер дня!";break;
    case $day >= 1 and $day <= 5: echo "День номер $day - рабочий день";break;
    case $day >= 6 and $day <= 7: echo "День номер $day - выходной день";break;
    default : echo "Задавайте правильно номер дня!";
    /*
    case 1: echo "День номер $day - рабочий день";break;
    case 2: echo "День номер $day - рабочий день";break;
    case 3: echo "День номер $day - рабочий день";break;
    case 4: echo "День номер $day - рабочий день";break;
    case 5: echo "День номер $day - рабочий день";break;
    case 6: echo "День номер $day - выходной день";break;
    case 7: echo "День номер $day - выходной день";break;
    default : echo "Задавайте правильно номер дня!";
    */
}

//13

$s = 300;//km
$t = 3;//hours

echo "<br>Скорость: ", $v = $s/$t, "км/час";// км/час
$v = (($s/$t)*1000)/3600;
echo "<br>Скорость: ", round($v,2), "м/сек";// м/сек

//14
$foo = 'bar';
$bar = 10;
$foo = $bar;
echo "<br>Это \$foo = ".$foo;

// 15
///////////////////калькулятор///////////////////
$a = 10;
$b = 50;
$operator = '-';

if ($operator == '*'){
    $res = $a*$b;
}elseif ($operator == '/'){
    if ($b == 0){
        $res = "на 0 делить нельзя";
    }else{
        $res = $a/$b;
    }
}elseif ($operator == '+'){
    $res = $a+$b;
}elseif ($operator == '-'){
    $res = $a-$b;
}elseif ($operator == '%'){
    $res = $a%$b;
}else {
    $res = "нет такого оператора";
}

echo "<br>Результат уравнения: \"$a $operator $b\" = ".$res."<br>";

///////////////////калькулятор///////////////////

//16
$c = 10;
$d = 11;

echo ($c > $d) ? $c : $d;

//17
$aa = '78';
$bb = 78;

if ($aa == $bb){
    echo $res17 = "<br>равны";
}else{
    echo $res17 = "<br>не равны";
}

//18
if ($aa === $bb){
    echo "<br>эквивалентны<br>";
}else{
    echo "<br>не эквивалентны<br>";
}

//19
var_dump($res17);

//20-21-22
$num = (bool)20;
echo "<br>",$num,"<br>";

$num2 = (bool)0;
echo "<br>",var_dump($num2),"<br>";

$num3 = (bool)-20;
echo "<br>",var_dump($num3),"<br>";
//возвращает true во всех случаях кроме: пустой строки, null и false, но не "false".

//23
echo "echo<br>";
print "print<br>";
print_r($num);
echo "<br>";
var_dump($num3);

//24

//////
######
/****
dfsdfsd
fddfd
dfdf
 ***/

//25
$color = 'red';
?>
<!-- 25
так покороче будет
минус -  не всегда short_tag включен
-->
<div style="color:<?=$color?>">some text</div>

<!-- 25
длинная запись, но работает всегда.
-->
<div style="color:<?php echo $color;?>">some text 2</div>

<?php
//26
define("TEST", "Hello world!");
const TEST2 = "Good bye, world!";

echo TEST;
echo "<br>";
echo TEST2;