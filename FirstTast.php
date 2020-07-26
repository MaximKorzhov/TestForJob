<?php
//2. Как определить дублированный элемент в массиве,
// в котором содержатся элементы типа int от 1 до 100, при условии,
// что в массиве дублируется только один элемент?
//    1 => 1
//  2 => 2
//  3 => 3
//  4 => 3
//  5 => 4
//  ...
//  101 => 100

$array = range(1, 100);
$array = array_replace ($array, [30 => 20]);
$newArray = array_count_values($array);

echo 'Дублированный элемент в массиве: ' . array_search('2', $newArray) ?? 'не найден';

//3. Как отсортировать массив с датами?

function cmp($a, $b)
{
    if ($a["date"] == $b["date"]) {
        return 0;
    }
    return (strtotime($a["date"]) < strtotime($b["date"])) ? -1 : 1;
}

$arrayDate = [
    Array("date" => "03.07.2020"),
    Array("date" => "23.08.2018"),
    Array("date" => "05.07.2020")
];

usort($arrayDate, "cmp");
var_dump($arrayDate);

//6. Найти 2 числа из массива [1, 2, 4, 7, 16, 19], сумма которых равна 11.
function getNumbersForSum($array, $sum)
{
    foreach ($array as $key1 => $number1)
    {
        foreach ($array as $key2 => $number2)
        {
            $sumSearch = $number1 + $number2;
            if($sumSearch == $sum) return [$key1, $key2];
        }
    }
}

$array = [1, 2, 4, 7, 16, 19];
$sum = '11';
$numsSearch = getNumbersForSum($array, $sum);

echo 'Искомые числа для суммы, равной 11: ' . $array[$numsSearch[0]]. ' и ' . $array[$numsSearch[1]];

////1. О-нотация. Оценка сложности алгоритма
////      //Задача. В таком массиве найти одинаковые ключи и значения. В этом примере это 32. Предложить алгоритм О(n)
//// вместо O(n^2)
      $a = [
          32 => 150,
          948 => 32,
          14 => 3,
          5 => 2
      ];

//      //a. О(n^2)
      $exist = [];
      foreach ($a as $value) {
          foreach ($a as $key => $item) {
              if ($value === $key) {
                  $exist[] = $key;
              }
          }
      }
////Решение
$a = [
    32 => 150,
    948 => 32,
    14 => 3,
    5 => 2
];
$arKey = array_keys($a);
$arValue = array_values($a);
var_dump (array_intersect($arKey, $arValue));