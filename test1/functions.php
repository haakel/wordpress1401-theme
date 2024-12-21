<?php
// echo "hi";

// global $wpdb;
// echo '<pre>';
// var_dump($wpdb);
// echo '<pre>';
// exit;

//CRUD


global $wpdb;
$R = $wpdb->get_results("SELECT * FROM $wpdb->users");
// $R = $wpdb->get_results("SELECT * FROM $wpdb->users",ARRAY_A);
 echo '<pre>';
 var_dump($R);
echo '<pre>';
// echo $R[0]->user_pass; 
//  echo $R[0]["user_pass"];
foreach($R as $item){
    echo $item->user_login;
}