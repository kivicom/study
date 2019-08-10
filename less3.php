<?php

/*Если переменная $a равна нулю, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 0, -3. */

$a = 0;

echo $a . ' = ' . 0 . ' - ';
if($a == 0){echo 'Верно';}else{echo 'Неверно';}
echo '<br>';

echo $a . ' > ' . 0 . ' - ';
if($a > 0){echo 'Верно';}else{echo 'Неверно';}
echo '<br>';

echo $a . ' < ' . 0 . ' - ';
if($a < 0){echo 'Верно';}else{echo 'Неверно';}
echo '<br>';

echo $a . ' >= ' . 0 . ' - ';
if($a >= 0){echo 'Верно';}else{echo 'Неверно';}
echo '<br>';

echo $a . ' <= ' . 0 . ' - ';
if($a <= 0){echo 'Верно';}else{echo 'Неверно';}
echo '<br>';

echo $a . ' != ' . 0 . ' - ';
if($a != 0){echo 'Верно';}else{echo 'Неверно';}

echo "<hr>";

/*Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 'test', 'тест', 3. */
$a = 'test';

echo $a . ' == ' . 'test' . ' - ';
if($a == 'test'){echo 'Верно';}else{echo 'Неверно';}
echo '<br>';

echo "<hr>";

/*Если переменная $a равна 'test', то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 'test', 'тест', 3. */
$a = '1';

echo "'$a'" . ' === ' . "'1'" . ' - ';
if($a === '1'){echo 'Верно';}else{echo 'Неверно';}

echo "<hr>";

/*Если переменная $a пустая, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 1, 3, -3, 0, null, true, '', '0'*/
$a = 0;
echo $a . ' - ' . 'empty?' . ' - ';
if(empty($a)){echo 'Верно';}else{echo 'Неверно';}

echo "<hr>";

/*Если переменная $a НЕ пустая, то выведите 'Верно', иначе выведите 'Неверно'. */
$a = 1;
echo $a . ' - ' . 'NOT empty?' . ' - ';
if(!empty($a)){echo 'Верно';}else{echo 'Неверно';}

echo "<hr>";

/*Если переменная $a существует, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 3 и null.  */
$a = 0;
echo $a . ' - ' . 'isset?' . ' - ';
if(isset($a)){echo 'Верно';}else{echo 'Неверно';}

echo "<hr>";

/*Если переменная $a НЕ существует, то выведите 'Верно', иначе выведите 'Неверно'. */
$a = null;
echo $a . ' - ' . 'NOT isset?' . ' - ';
if(!isset($a)){echo 'Верно';}else{echo 'Неверно';}

echo "<hr>";

/*Если переменная $var равна true, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $var, равном true, false. Напишите два варианта скрипта - с короткой записью и с длинной. */
$var = true;
if($var == true){echo 'Верно';}else{echo 'Неверно';}
echo '<br>';
if($var){echo 'Верно';}else{echo 'Неверно';}

echo "<hr>";

/*Если переменная $var НЕ равна true, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $var, равном true, false. Напишите два варианта скрипта - с короткой записью и с длинной.*/
$var = false;
if($var != true){echo 'Верно';}else{echo 'Неверно';}
echo '<br>';
if(!$var){echo 'Верно';}else{echo 'Неверно';}

echo "<hr>";

/*Если переменная $a больше нуля и меньше 5-ти, то выведите 'Верно', иначе выведите 'Неверно'. Проверьте работу скрипта при $a, равном 5, 0, -3, 2. */
$a = 2;
echo $a . ' > ' . 0 . ' и ' . $a . ' < ' . 5 . ' - ';
if($a > 0 && $a < 5){echo 'Верно';}else{echo 'Неверно';}

echo "<hr>";

/*Если переменная $a равна нулю или равна двум, то прибавьте к ней 7, иначе поделите ее на 10. Выведите новое значение переменной на экран. Проверьте работу скрипта при $a, равном 5, 0, -3, 2. */
$a = 2;
echo 'Дано: ' . $a;
if($a == 0 || $a == 2){
    $a += 7;
}else{
    $a /= 10;
}
echo '<br>';
echo $a;

echo "<hr>";

/*Если переменная $a равна или меньше 1, а переменная $b больше или равна 3, то выведите сумму этих переменных, иначе выведите их разность (результат вычитания). Проверьте работу скрипта при $a и $b, равном 1 и 3, 0 и 6, 3 и 5. */
$a = 1;
$b = 3;

if($a <= 1 || $b >= 3){
    $a += $b;
}else{
    $a -= $b;
}
echo $a;

echo "<hr>";

/*Если переменная $a больше 2-х и меньше 11-ти, или переменная $b больше или равна 6-ти и меньше 14-ти, то выведите 'Верно', в противном случае выведите 'Неверно'. */
$a = 5;
$b = 3;

if(($a > 2 && $a < 11) || ($b >= 6 && $b < 14)){echo 'Верно';}else{echo 'Неверно';}

echo "<hr>";

/*Переменная $num может принимать одно из значений: 1, 2, 3 или 4. Если она имеет значение '1', то в переменную $result запишем 'зима', если имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case. */
$day = 15;

switch ($day) {
    case ($day >= 1 && $day <= 10):
        echo "Первая декада месяца";
    break;
    case ($day >= 11 && $day <= 20):
        echo "Вторая декада месяца";
    break;
    case ($day >= 21 && $day <= 31):
        echo "Третья декада месяца";
    break;
}

echo "<hr>";

/*В переменной $month лежит какое-то число из интервала от 1 до 12. Определите в какую пору года попадает этот месяц (зима, лето, весна, осень).*/
$month = 8;

switch ($month) {
    case ($month == 1 || $month == 2 || $month == 12):
        echo "ЗИМА";
    break;
    case ($month >= 3 && $month <= 5):
        echo "ВЕСНА";
    break;
    case ($month >= 6 && $month <= 8):
        echo "ЛЕТО";
    break;
    case ($month >= 9 && $month <= 11):
        echo "ОСЕНЬ";
    break;
}

echo "<hr>";

/*В переменной $year хранится год. Определите, является ли он високосным (в таком году есть 29 февраля). Год будет високосным в двух случаях: либо он делится на 4, но при этом не делится на 100, либо делится на 400. Так, годы 1700, 1800 и 1900 не являются високосными, так как они делятся на 100 и не делятся на 400. Годы 1600 и 2000 - високосные, так как они делятся на 400. */

$year = 1600;
switch ($year) {
    case ((($year % 4) == 0) && (($year % 100) != 0) || (($year % 400) == 0)):
        echo "Высокосный";
    break;
    default:
        echo "Не высокосный";
    break;
}

echo "<hr>";

/*Дана строка с символами, например, 'abcde'. Проверьте, что первым символом этой строки является буква 'a'. Если это так - выведите 'да', в противном случае выведите 'нет'. */

$str = 'abcde';
if($str[0] == 'a'){echo 'да';}else{echo 'нет';}

echo "<hr>";

/*Дана строка с цифрами, например, '12345'. Проверьте, что первым символом этой строки является цифра 1, 2 или 3. Если это так - выведите 'да', в противном случае выведите 'нет'. */
$str = '12345';
if($str[0] == 1){echo 'да';}else{echo 'нет';}

echo "<hr>";

/*Дана строка из 3-х цифр. Найдите сумму этих цифр. То есть сложите как числа первый символ строки, второй и третий. */
$str = '123';
echo $str[0] + $str[1] + $str[2];

echo "<hr>";

/*Дана строка из 6-ти цифр. Проверьте, что сумма первых трех цифр равняется сумме вторых трех цифр. Если это так - выведите 'да', в противном случае выведите 'нет'.*/
$str = '123456';
$sum1 = $str[0] + $str[1] + $str[2];
$sum2 = $str[3] + $str[4] + $str[5];
switch ($str){
    case ($sum1 == $sum2):
        echo 'Да';
    break;
    default:
        echo 'Нет';
    break;
}