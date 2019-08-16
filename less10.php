<?php

/*Выведите текущее время в формате timestamp. */
echo time();
echo '<hr>';

/*Выведите 1 марта 2025 года в формате timestamp. */
echo mktime(0, 0, 0, 3, 1, 2025);
echo '<hr>';

/*Выведите 31 декабря текущего года в формате timestamp. Скрипт должен работать независимо от года, в котором он запущен. */
echo mktime(0, 0, 0, 12, 31);
echo '<hr>';

/*Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени. */
echo time() - mktime(13, 12, 59, 3, 15, 2000);
echo '<hr>';

/*Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени. */
$sec =  time() - mktime(7, 23, 48);
$hours = $sec / (60*60);
echo $hours;
echo '<hr>';

/*Выведите на экран текущий год, месяц, день, час, минуту, секунду. */
echo date('Y-m-d H:i:s');
echo '<hr>';

/*Выведите текущую дату-время в форматах '2025-12-31', '31.12.2025', '31.12.13', '12:59:59'. */
echo date('Y-m-d',mktime(0,0,0,12,31,2025)) . '<br>';
echo date('d.m.Y',mktime(0,0,0,12,31,2025)) . '<br>';
echo date('d.m.y',mktime(0,0,0,12,31,2013)) . '<br>';
echo date('H:i:s',mktime(12,59,59)) . '<br>';
echo '<hr>';

/*С помощью функций mktime и date выведите 12 февраля 2025 года в формате '12.02.2025'. */
echo date('d.m.Y',mktime(0,0,0,2,12,2025)) . '<br>';
echo '<hr>';

/*Создайте массив дней недели $week. Выведите на экран название текущего дня недели с помощью массива $week и функции date. Узнайте какой день недели был 06.06.2006, в ваш день рождения. */
$week = ['вс','пн','вт','ср','чт','пт','сб'];
$day = date('w', mktime(0,0,0,6,6,2006));
$birthday = date('w', mktime(0,0,0,7,22,1983));
echo $week[$day] . '<br>';
echo $week[$birthday];
echo '<hr>';

/*Создайте массив месяцев $month. Выведите на экран название текущего месяца с помощью массива $month и функции date. */
$months = ['', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
$m = date('n');
echo $months[$m];
echo '<hr>';

/*Найдите количество дней в текущем месяце. Скрипт должен работать независимо от месяца, в котором он запущен. */
echo date('t');
echo '<hr>';

/*Сделайте поле ввода, в которое пользователь вводит год (4 цифры), а скрипт определяет високосный ли год. */
/*$year = 2020;
echo date('L', mktime(0, 0 , 0, 1, 1 , $year));*/
?>
<form action="" method="POST">
<input type="text" name="year" placeholder="Введите год - 4 цифры">
<input type="submit" name="submit" value="Определить">
</form>

<?php
if(!empty($_POST['year'])) {
    $year = $_POST['year'];
    $leapYear = date('L', mktime(0, 0, 0, 1, 1, $year));
    if ($leapYear == 1) {
        echo $year . ' - Год високосный';
    } else {
        echo $year . ' - Год не високосный';
    }
}
echo '<hr>';

/*Сделайте форму, которая спрашивает дату в формате '31.12.2025'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте день недели (словом) за введенную дату. */
?>
<form action="" method="POST">
<input type="text" name="date" placeholder="Д.М.ГГГГ">
<input type="submit" name="submit" value="Определить">
</form>

<?php
if(!empty($_POST['date'])) {
    $date = str_replace('-', '.', $_POST['date']);
    $arr = explode('.', $date);
    $week = ['вс','пн','вт','ср','чт','пт','сб'];
    $day = date('w', mktime(0,0,0,$arr[0],$arr[1],$arr[2]));
    echo $week[$day];
}
echo '<hr>';

/*Сделайте форму, которая спрашивает дату в формате '2025-12-31'. С помощью функций mktime и explode переведите эту дату в формат timestamp. Узнайте месяц (словом) за введенную дату. */
?>
<form action="" method="POST">
    <input type="text" name="date" placeholder="ГГГГ-М-Д">
    <input type="submit" name="submit" value="Определить">
</form>

<?php
if(!empty($_POST['date'])) {
    $date = str_replace('.', '-', $_POST['date']);
    $arr = explode('-', $date);
    $months = ['', 'Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'];
    $month = date('n', mktime(0,0,0, $arr[1], $arr[2], $arr[0]));
    echo $months[$month];
}
echo '<hr>';

/*Сделайте форму, которая спрашивает две даты в формате '2025-12-31'. Первую дату запишите в переменную $date1, а вторую в $date2. Сравните, какая из введенных дат больше. Выведите ее на экран. */
?>
    <form action="" method="POST">
        <input type="text" name="date1" placeholder="ГГГГ-М-Д">
        <input type="text" name="date2" placeholder="ГГГГ-М-Д">
        <input type="submit" name="submit" value="Определить">
    </form>
<?php
if(!empty($_POST['date1']) && !empty($_POST['date2'])) {
    $date1 = $_POST['date1'];
    $date2 = $_POST['date2'];
    $arr1 = explode('-', $date1);
    $arr2 = explode('-', $date2);
    $date1 = mktime(0,0,0, $arr1[1], $arr1[2], $arr1[0]);
    $date2 = mktime(0,0,0, $arr2[1], $arr2[2], $arr2[0]);
    if($date1 > $date2){
        echo $date1 . ' > ' . $date2;
    }else{
        echo $date1 . ' < ' . $date2;
    }
}
echo '<hr>';

/*Дана дата в формате '2025-12-31'. С помощью функции strtotime и функции date преобразуйте ее в формат '31-12-2025'. */
$str = '2025-12-31';
$str = date('d-m-Y', strtotime($str));
echo $str;
echo '<hr>';

/*Сделайте форму, которая спрашивает дату-время в формате '2025-12-31T12:13:59'. С помощью функции strtotime и функции date преобразуйте ее в формат '12:13:59 31.12.2025'. */
?>
<form action="" method="POST">
    <input type="text" name="date3" placeholder="2025-12-31T12:13:59">
    <input type="submit" value="Отправить">
</form>
<?php
if(!empty($_POST['date3'])) {
    $date3 = $_POST['date3'];
    $date3 = date('H:i:s d.m.Y', strtotime($date3));
    echo $date3;
}
echo '<hr>';

/*В переменной $date лежит дата в формате '2025-12-31'. Прибавьте к этой дате 2 дня, 1 месяц и 3 дня, 1 год. Отнимите от этой даты 3 дня. */
$date = date_create('2025-12-31');

date_modify($date, '2 day');
echo date_format($date, 'Y.m.d') . '<br>';

$date = date_create('2025-12-31');
date_modify($date, '3 day 1 Month');
echo date_format($date, 'Y.m.d') . '<br>';

$date = date_create('2025-12-31');
date_modify($date, '1 Year');
echo date_format($date, 'Y.m.d') . '<br>';

$date = date_create('2025-12-31');
date_modify($date, '-3 day');
echo date_format($date, 'Y.m.d') . '<br>';
echo '<hr>';

/*Узнайте сколько дней осталось до Нового Года. Скрипт должен работать в любом году. */
$now = time();
$newYear = mktime(23, 59, 59, 12, 31);
$left = ($newYear - $now) / 60 / 60 / 24;
echo $left;
echo '<hr>';

/*Сделайте форму с одним полем ввода, в которое пользователь вводит год. Найдите все пятницы 13-е в этом году. Результат выведите в виде массива дат. */
?>
    <form action="" method="POST">
        <input type="text" name="year" placeholder="Введите год">
        <input type="submit" value="Отправить">
    </form>
<?php
if(!empty($_POST['year'])){
    $year = $_POST['year'];
    $arr = [];
    for ($i = 1; $i <= 12; $i++){
        $tMonth = mktime(0, 0, 0, $i, 13, $year);
        $tDay = date('w', $tMonth);
        if($tDay == 5){
            $arr[] = $tDay;
        }
    }
    var_dump($arr);

}
echo '<hr>';

/*Узнайте какой день недели был 100 дней назад. */
$day = date('w',strtotime('-100 days'));
$week = ['вс','пн','вт','ср','чт','пт','сб'];
echo $week[$day];
echo '<hr>';

