<?php
// echo "hi";

// global $wpdb;
// echo '<pre>';
// var_dump($wpdb);
// echo '<pre>';
// exit;

//CRUD

// s16 -e01
// global $wpdb;
// $R = $wpdb->get_results("SELECT * FROM $wpdb->users");
// // $R = $wpdb->get_results("SELECT * FROM $wpdb->users",ARRAY_A);
//  echo '<pre>';
//  var_dump($R);
// echo '<pre>';
// // echo $R[0]->user_pass; 
// //  echo $R[0]["user_pass"];
// foreach($R as $item){
//     echo $item->user_login;
// }


//s16- e02
global $wpdb;
//  echo $wpdb->prefix."testamozesh";
//دریافت اطلاعات دیتابیسی که خودمون ساختیم
$table_user = $wpdb->prefix."testamozesh";
//دریافت اطلاعات کامل دیتابیسی که خودمون ساختیم
// $R = $wpdb->get_results("SELECT * FROM {$table_user}");

//فانگشن get_row برای در یافت اولین سطون دیتا بیس
// $R = $wpdb->get_row("SELECT * FROM {$table_user}");

//فانگشن get_row برای دریافت اولین سطون دیتا بیس یک ردیف خاص
 //$R = $wpdb->get_row("SELECT * FROM {$table_user} WHERE Id = 2");

//فانگشن get_row برای دریافت اولین سطون دیتا بیس یک ردیف خاص با خرجی فرمت array_A
//$R = $wpdb->get_row("SELECT * FROM {$table_user} WHERE Id = 2", ARRAY_A);

//فانگشن get_row برای دریافت اولین سطون دیتا بیس یک ردیف خاص با خرجی فرمت array_N
// $R = $wpdb->get_row("SELECT * FROM {$table_user} WHERE Id = 2", ARRAY_N);

//فانگشن get_row برای دریافت اولین سطون دیتا بیس یک ردیف خاص با خرجی فرمت array_N به همراه offset
// $R = $wpdb->get_row("SELECT * FROM {$table_user}", ARRAY_N,"0");

//متد get_col برای دریافت ستون 
$R = $wpdb->get_col("SELECT name FROM {$table_user} WHERE Id = 1");

echo '<pre>';
var_dump($R);
echo '<pre>'; 
 // خرجی گرفتن از اطلاعات خاص کاربر
//  echo $R->name;
 //  خرجی گرفتن از اطلاعات خاص کاربر با فرمت خاص مثلا array
//echo $R['name'];