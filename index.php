<?php
//ДЗ Написать программу, которая конвертирует
//Пользователь вводить сумму в рублях, программа
//переводит эту сумму в 3 любые валюты и выводит 
//на экран.

//int - целое число
//float - дробное число
//bool - true/false
//string - строка
//array - массив
//null - ничего
//resourse - ресурс
//mixed - что угодно

define("DOLLAR", 89.67);
define("EURO", 96.79);
define("YUAN", 12.41);
$rub = readline("Введите сумму в рублях: ");
$usd = round ($rub / DOLLAR, 2);
$eur = round ($rub / EURO, 2);
$yuan = round ($rub / YUAN, 2);
echo "это будет:\n";
echo "$usd долларов\n";
echo "$eur евро\n";
echo "$yuan юаней\n";
?>
