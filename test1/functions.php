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
$table_user = $wpdb->prefix."testamozesh";
//$R = $wpdb->get_results("SELECT * FROM {$table_user}");
$R = $wpdb->get_row("SELECT * FROM {$table_user}");
  echo '<pre>';
  var_dump($R);
 echo '<pre>';