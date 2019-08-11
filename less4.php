<?php

/*Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик. */
$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $elem){
    echo $elem . '<br>';
}

echo "<hr>";

/*Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму элементов этого массива. Запишите ее в переменную $result. */
$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $elem){
    $result += $elem;
}
echo $result;

echo "<hr>";

/*Дан массив с элементами 1, 2, 3, 4, 5. С помощью цикла foreach найдите сумму квадратов элементов этого массива. Результат запишите переменную $result. */
$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $elem){
    echo $result = $elem * $elem . '<br>';
}

echo "<hr>";

/*Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'. */
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $k => $item) {
    echo $k . ' - ' . $item . '<br>';
}

echo "<hr>";

/*Дан массив $arr с ключами 'Коля', 'Вася', 'Петя' и с элементами '200', '300', '400'. С помощью цикла foreach выведите на экран столбец строк такого формата: 'Коля - зарплата 200 долларов.'. */
$arr = ['Коля' => 200, 'Вася' => 300, 'Петя' => 400];
foreach ($arr as $k => $item) {
    echo $k . ' - зарплата ' . $item . ' долларов<br>';
}

echo "<hr>";

/*Решите эти задачи сначала через цикл while, а затем через цикл for.
Выведите столбец чисел от 1 до 100.
*/
$i = 1;
while ($i <= 100){
    echo $i . '<br>';
    $i++;
}

echo "<hr>";

for ($i = 1; $i <= 100; $i++){
    echo $i . '<br>';
}

echo "<hr>";

//Выведите столбец чисел от 11 до 33.
//while
$i = 11;
while ($i <= 33){
    echo $i . '<br>';
    $i++;
}

echo "<hr>";

//for
for ($i = 11; $i <= 33; $i++){
    echo $i . '<br>';
}

echo "<hr>";

/*Выведите столбец четных чисел в промежутке от 0 до 100. */
//while
$i = 0;
while ($i <= 100){
    if(($i % 2) === 0 && $i !== 0) {
        echo $i . '<br>';
    }
    $i++;
}

echo "<hr>";

//for
for ($i = 0; $i <= 100; $i++){
    if(($i % 2) === 0 && $i !== 0){
        echo $i . '<br>';
    }
}

echo "<hr>";

/*С помощью цикла найдите сумму чисел от 1 до 100. */
//while
$i = 0;
$result = 0;
while ($i <= 100){
    $result = $result + $i;
    $i++;
}
echo $result;

echo "<hr>";

//for
$result = 0;
for ($i = 0; $i <= 100; $i++){
    $result = $result + $i;
}
echo $result;

echo "<hr>";

/*Дан массив с элементами 2, 5, 9, 15, 0, 4. С помощью цикла foreach и оператора if выведите на экран столбец тех элементов массива, которые больше 3-х, но меньше 10. */
$arr = [2, 5, 9, 15, 0, 4];
foreach ($arr as $elem){
    if($elem > 3 && $elem < 10){
        echo $elem . '<br>';
    }
}

echo "<hr>";

/*Дан массив с числами. Числа могут быть положительными и отрицательными. Найдите сумму положительных элементов этого массива. */
$arr = [2, 5, -9, -15, 0, -4];
$result = 0;
foreach ($arr as $elem){
    if($elem > 0){
        $result = $result + $elem;
    }
}
echo $result;

echo "<hr>";

/*Дан массив с элементами 1, 2, 5, 9, 4, 13, 4, 10. С помощью цикла foreach и оператора if проверьте есть ли в массиве элемент со значением, равным 4. Если есть - выведите на экран 'Есть!' и выйдите из цикла. Если нет - ничего делать не надо. */
$arr = [1, 2, 5, 9, 4, 13, 4, 10];
foreach ($arr as $elem){
    if($elem === 4){
        echo 'Есть!';
        break;
    }else{
        echo $elem . ', ';
    }
}

echo '<hr>';

/*Дан массив числами, например: ['10', '20', '30', '50', '235', '3000']. Выведите на экран только те числа из массива, которые начинаются на цифру 1, 2 или 5. */
$arr = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $elem){
    if($elem[0] == 1 || $elem[0] == 2 || $elem[0] == 5){
        echo $elem . '<br>';
    }
}

echo '<hr>';

/*Дан массив с элементами 1, 2, 3, 4, 5, 6, 7, 8, 9. С помощью цикла foreach создайте строку '-1-2-3-4-5-6-7-8-9-'. */
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
echo '-';
foreach ($arr as $elem){
    echo $elem . '-';
}

echo '<hr>';

/*Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а выходные дни выведите жирным. */
$days = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
foreach ($days as $k => $day){
    if($k == 5 || $k == 6){
        echo '<b>' . $day . '</b> ';
    }else{
        echo $day . ' ';
    }
}

echo '<hr>';

/*Составьте массив дней недели. С помощью цикла foreach выведите все дни недели, а текущий день выведите курсивом. Текущий день должен храниться в переменной $day. */
$arr = ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'];
$day = 6;
foreach ($arr as $k => $v){
    if($k == $day){
        echo '<i>' . $v . '</i> ';
    }else{
        echo $v . ' ';
    }
}

echo '<hr>';

/*С помощью цикла for заполните массив числами от 1 до 100. То есть у вас должен получится массив [1, 2, 3... 100]. */
$arr = [];
for($i = 1; $i <= 100; $i++){
    $arr[] = $i;
}
print_r($arr);

echo '<hr>';

/*Дан массив $arr. С помощью цикла foreach запишите английские названия в массив $en, а русские - в массив $ru. */
$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
$en = [];
$ru = [];
foreach ($arr as $k => $elem){
    $en[] = $k;
    $ru[] = $elem;
}
print_r($en);
print_r($ru);

echo '<hr>';

/*Дано число $num=1000. Делите его на 2 столько раз, пока результат деления не станет меньше 50. Какое число получится? Посчитайте количество итераций, необходимых для этого (итерация - это проход цикла). Решите задачу сначала через цикл while, а потом через цикл for. */
$num = 1000;
$i = 0;

while($num > 50){
    $num = $num / 2;
    $i++;
}
echo $num . ' меньше 50<br>';
echo $i . ' - итераций';

echo '<hr>';

for($nb = 1000, $k = 0; $nb > 50; $nb/= 2, $k++);
echo $nb . ' меньше 50<br>';
echo $k . ' - итераций<br>';