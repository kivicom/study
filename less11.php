<?php

/*Сделайте функцию isNumberInRange, которая параметром принимает число и проверяет, что оно больше нуля и меньше 10. Если это так - пусть функция возвращает true, если не так - false.*/
function isNumberInRange($num){
    if($num > 0 && $num < 10){
        return true;
    }else{
        return false;
    }
}
var_dump(isNumberInRange(14));

/*----------------*/

/*Дан массив с числами. Запишите в новый массив только те числа, которые больше нуля и меньше 10-ти. Для этого используйте вспомогательную функцию isNumberInRange из предыдущей задачи. */

$arr = range(0,20);
$new_arr = [];
foreach ($arr as $elem){
    if(isNumberInRange($elem)){
        $new_arr[] = $elem;
    }
}
var_dump($new_arr);

/*----------------*/

/*Сделайте функцию getDigitsSum (digit - это цифра), которая параметром принимает целое число и возвращает сумму его цифр. */
function getDigitsSum($num){
    $arr = str_split($num, 1);
    $sum = 0;
    foreach ($arr as $elem){
        $sum += $elem;
    }
    return $sum;
}
var_dump(getDigitsSum(33));

/*----------------*/

/*Найдите все года от 1 до 2019, сумма цифр которых равна 13. Для этого используйте вспомогательную функцию getDigitsSum из предыдущей задачи. */
$arr = range(1, 2019);
$new_arr = [];
foreach ($arr as $elem){
    if(getDigitsSum($elem) == 13){
        $new_arr[] = $elem;
    }
}
var_dump($new_arr);

/*----------------*/

/*Сделайте функцию isEven() (even - это четный), которая параметром принимает целое число и проверяет: четное оно или нет. Если четное - пусть функция возвращает true, если нечетное - false. */
function isEven($num){
    if($num % 2 == 0){
        return true;
    }else{
        return false;
    }
}
/*Дан массив с целыми числами. Создайте из него новый массив, где останутся лежать только четные из этих чисел. Для этого используйте вспомогательную функцию isEven из предыдущей задачи. */
$arr = range(1, 20);
$new_arr = [];
foreach ($arr as $elem){
    if(isEven($elem)){
        $new_arr[] = $elem;
    }
}
var_dump($new_arr);

/*Сделайте функцию getDivisors, которая параметром принимает число и возвращает массив его делителей (чисел, на которое делится данное число). */
function getDivisors($num){
    $result = [];
    for($i = 1; $i <= $num; $i++){
        if($num % $i == 0){
            $result[] = $i;
        }
    }
    return $result;
}
var_dump(getDivisors(5));
echo '<hr>';
/*Сделайте функцию getCommonDivisors, которая параметром принимает 2 числа, а возвращает массив их общих делителей. Для этого используйте вспомогательную функцию getDivisors из предыдущей задачи. */
function getCommonDivisors($a, $b){
    $result = [];
    foreach (getDivisors($a) as $elem1) {
        foreach (getDivisors($b) as $elem2){
            if($elem1 == $elem2){
                $result[] = $elem1;
            }
        }
    }
    return $result;
}
var_dump(getCommonDivisors(3, 6));
