<?php

//【応用】次のプログラムにはバグがあります。
//どこにバグが有るか調べて修正してみましょう。
//(バグは一つとは限りません。)
//$2018_calendar = {
//  "January" => "1月",
//  "February" => "2月"、
//  "March" => "3月",
//  "April" => "4月",
//  "May" => "5月",
//  "June" = "6月",
//  "July" => "7月",
//  "August" => "8月",
//  "September" => "9月",
//  "October" => 10月,
//  "November" => "11月",
//  "December" => "12月"
//};
// 12月を表示する
//echo $2018_calendar[December];

//変数の1文字目に数字はNG
//変数に配列を代入する際は{}ではなく[]を使用する。
$calender_2018 = [
  "January" => "1月",
  //各配列の区切りは、ではなく,を使用する。
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" => "6月",
  "July" => "7月",
  "August" => "8月",
  "Septemer" => "9月",
  //文字列を使用する際は""もしくは''で囲う。
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];

echo $calender_2018["December"];

 ?>
