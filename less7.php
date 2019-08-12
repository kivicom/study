<?php

/*Дана строка 'php'. Сделайте из нее строку 'PHP'.*/
$str = 'php';
echo strtoupper($str);
echo '<hr>';

/*Дана строка 'PHP'. Сделайте из нее строку 'php'.*/
$str = 'PHP';
echo strtolower($str);
echo '<hr>';

/*Дана строка 'london'. Сделайте из нее строку 'London'.*/
$str = 'london';
echo ucfirst($str);
echo '<hr>';

/*Дана строка 'London'. Сделайте из нее строку 'london'.*/
$str = 'London';
echo lcfirst($str);
echo '<hr>';

/*Дана строка 'london is the capital of great britain'. Сделайте из нее строку 'London Is The Capital Of Great Britain'.*/
$str = 'london is the capital of great britain';
echo ucwords($str);
echo '<hr>';

/*Дана строка 'LONDON'. Сделайте из нее строку 'London'.*/
$str = 'LONDON';
echo ucfirst(strtolower($str));
echo '<hr>';

/*Дана строка 'html css php'. Вырежьте из нее и выведите на экран слово 'html', слово 'css' и слово 'php'.*/
$str = 'html css php';
echo trim(substr($str, 4));
echo '<hr>';

/*Дана строка. Вырежите и выведите на экран последние 3 символа этой строки.*/
$str = 'строка';
echo mb_substr($str, -3);
echo '<hr>';

/*Дана строка. Проверьте, что она начинается на 'http://'. Если это так, выведите 'да', если не так - 'нет'.*/
$str = 'http://site.com';
$res = substr($str, 0, 7);
if($res === 'http://'){
    echo 'Да';
}else{
    echo 'Нет';
}

echo '<hr>';

/* Дана строка. Проверьте, что она начинается на 'http://' или на 'https://'. Если это так, выведите 'да', если не так - 'нет'.*/
$str = 'http://site.com';
$res1 = substr($str, 0, 7);
$res2 = substr($str, 0, 8);
if($res === 'http://' || $res2 === 'https://'){
    echo 'Да';
}else{
    echo 'Нет';
}
echo '<hr>';

/*Дана строка. Проверьте, что она заканчивается на '.png'. Если это так, выведите 'да', если не так - 'нет'.*/
$str = 'image.png';
$res = substr($str, -4);
if($res === '.png'){
    echo 'Да';
}else{
    echo 'Нет';
}
echo '<hr>';

/*Дана строка. Проверьте, что она заканчивается на '.png' или на '.jpg'. Если это так, выведите 'да', если не так - 'нет'.*/
$str1 = 'image.png';
$res = substr($str, -4);
if($res === '.png' || $res === '.jpg'){
    echo 'Да';
}else{
    echo 'Нет';
}
echo '<hr>';

/*Дана строка. Если в этой строке более 5-ти символов - вырежите из нее первые 5символов, добавьте троеточие в конец и выведите на экран. Если же в этой строке 5 и менее символов - просто выведите эту строку на экран.*/
$str = 'Энциклопедия';
$len = mb_strlen($str);
if($len > 5){
    $str = mb_substr($str, 0, 5) . '...';
    echo $str;
}else{
    echo $str;
}
echo '<hr>';

/*Дана строка '31.12.2013'. Замените все точки на дефисы.*/
$str = '31.12.2013';
$res = str_replace('.', '-', $str);
echo $res;
echo '<hr>';

/*Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3.*/
$str = '1a2b3c4b5d6e7f8g9h0';
$res = str_replace(['a', 'b', 'c'], [1, 2, 3], $str);
echo $res;
echo '<hr>';

/*Дана строка с буквами и цифрами, например, '1a2b3c4b5d6e7f8g9h0'. Удалите из нее все цифры. То есть в нашем случае должна получится строка 'abcbdefgh'.*/
$str = '1a2b3c4b5d6e7f8g9h0';
$res = str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', $str);
echo $res;
echo '<hr>';

/*Дана строка $str. Замените в ней все буквы 'a' на цифру 1, буквы 'b' - на 2, а буквы 'c' - на 3. Решите задачу двумя способами работы с функцией strtr (массив замен и две строки замен).*/
$str = '1a2b3c4b5d6e7f8g9h0';
$res = strtr($str, ['a'=>1, 'b'=>2, 'c'=>3]);
echo $res;
echo '<hr>';

$str = '1a2b3c4b5d6e7f8g9h0';
$res = strtr($str, 'abc', 123);
echo $res;
echo '<hr>';

/*Дана строка $str. Вырежите из нее подстроку с 3-го символа (отсчет с нуля), 5 штук и вместо нее вставьте '!!!'.*/
$str = 'information';
$res = substr_replace($str, '!!!', 3, 5);
echo $res;
echo '<hr>';

/*Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.*/
$str = 'abc abc abc';
$res = strpos($str, 'b');
echo $res;
echo '<hr>';

$str = 'abc abc abc';
$res = strrpos($str, 'b');
echo $res;
echo '<hr>';

/*Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b', если начать поиск не с начала строки, а с позиции 3.*/
$str = 'abc abc abc';
$res = strpos($str, 'b', 3);
echo $res;
echo '<hr>';

/*Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.*/
$str = 'aaa aaa aaa aaa aaa';
$res = strpos($str, ' ');
echo $res;
echo '<hr>';

/*Проверьте, что в строке есть две точки подряд. Если это так - выведите 'есть', если не так - 'нет'.*/
$str = 'aaa.aaa aaa aaa..aaa';
$res = strpos($str, '..');
if($res == true){
    echo 'Есть';
}else{
    echo 'Нет';
}
echo '<hr>';

/* Проверьте, что строка начинается на 'http://'. Если это так - выведите 'да', если не так - 'нет'.*/
$str = 'http://site.com';
$res = strpos($str, 'http://');
if($res == 0){
    echo 'Есть';
}else{
    echo 'Нет';
}
echo '<hr>';

/*Работа с explode, implode*/
/*Дана строка 'html css php'. С помощью функции explode запишите каждое слово этой строки в отдельный элемент массива.*/
$str = 'html css php';
$res = explode(' ', $str);
print_r($res);
echo '<hr>';

/*Дан массив с элементами 'html', 'css', 'php'. С помощью функции implode создайте строку из этих элементов, разделенных запятыми.*/
$str = ['html', 'css', 'php'];
$res = implode(', ', $str);
echo $res;
echo '<hr>';

/*В переменной $date лежит дата в формате '2013-12-31'. Преобразуйте эту дату в формат '31.12.2013'.*/
$date = '2013-12-31';
$res = explode('-', $date);
$res = $res[2] . '.' . $res[1] . '.' . $res[0];
echo $res;
echo '<hr>';

/*Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.*/
$str = '1234567890';
$res = str_split($str, 2);
print_r($res);
echo '<hr>';

/*Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2', '3', '4', '5', '6', '7', '8', '9', '0'.*/
$str = '1234567890';
$res = str_split($str, 1);
print_r($res);
echo '<hr>';

/*Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.*/
$str = '1234567890';
$res = str_split($str, 2);
$res = implode('-',$res);
echo $res;
echo '<hr>';

/*Дана строка. Очистите ее от концевых пробелов.*/
$str = ' some word ';
$res = trim($str);
echo $res;
echo '<hr>';

/*Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.*/
$str = '/php/';
$res = trim($str, '/');
echo $res;
echo '<hr>';

/*Дана строка 'слова слова слова.'. В конце этой строки может быть точка, а может и не быть. Сделайте так, чтобы в конце этой строки гарантировано стояла точка. То есть: если этой точки нет - ее надо добавить, а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.*/
$str = 'слова слова слова.';
$res = rtrim($str, '.') . '.';
echo $res;
echo '<hr>';

/*Дана строка '12345'. Сделайте из нее строку '54321'.*/
$str = '12345';
echo strrev($str);
echo '<hr>';

/*Проверьте, является ли слово палиндромом (одинаково читается во всех направлениях, примеры таких слов: madam, otto, kayak, nun, level).*/
$str = 'madam';
$str1 = strrev($str);
if($str == $str1){
    echo 'палиндром';
}else{
    echo 'Не палиндром';
}
echo '<hr>';

/*Дана строка. Перемешайте символы этой строки в случайном порядке.*/
$str = 'abcdef';
echo str_shuffle($str);
echo '<hr>';

/**/
$str = 'abcdifghijklmnopqrstuvwxyz';
echo substr(str_shuffle($str), 0, 6);
echo '<hr>';

/*Дана строка '12345678'. Сделайте из нее строку '12 345 678'.*/
$str = '12345678';
echo number_format($str, 0, '', ' ');
echo '<hr>';

/*Нарисуйте пирамиду, как показано на рисунке, только у вашей пирамиды должно быть 9 рядов, а не 5. Решите задачу с помощью одного цикла и функции str_repeat.*/

$str = 'x';
for($i = 1; $i <= 9; $i++){
    echo str_repeat($str, $i) . '<br>';
}
echo '<hr>';

/*Нарисуйте пирамиду, как показано на рисунке. Решите задачу с помощью одного цикла и функции str_repeat.*/

for($i = 1; $i <= 9; $i++){
    echo str_repeat($i, $i) . '<br>';
}
echo '<hr>';

/*Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.*/
$str = 'html, <b>php</b>, js';
echo strip_tags($str);
echo '<hr>';

/*Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>*/
$str = '<h1>html</h1>, <b>php</b>, <i>js</i>';
echo strip_tags($str, '<b><i>');
echo '<hr>';

/*Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть': то есть браузер не должен преобразовать <b> в жирный.*/
$str = 'html, <b>php</b>, js';
echo htmlspecialchars($str);
echo '<hr>';

/*Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.*/
$str = 'ab--cd--ef';
echo strstr($str, '-');
echo '<hr>';

/*Преобразуйте строку 'var_test_text' в 'varTestText'. Скрипт, конечно же, должен работать с любыми аналогичными строками.*/
$str = 'var_test_text';
$res = str_replace('_', ' ', $str);
$res = ucwords(strtolower($res));
$res = lcfirst(str_replace(' ','', $res));
echo $res;
echo '<hr>';

/*Дан массив с числами. Выведите на экран все числа, в которых есть цифра 3.*/
$arr = [1,2,3,4,5,33,6,23];

foreach ($arr as $elem){
    if(strpos($elem, '3') !== false){
        echo $elem . '<br>';
    }
}
echo '<hr>';