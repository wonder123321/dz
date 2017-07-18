<?php
//ini_set('display_erros', false);

const DB_USER='root';
const DB_PASS='';
const DB_NAME='dz13.07.17';
const DB_HOST='localhost';

$db= mysqli_connect(DB_HOST, DB_USER, DB_PASS,DB_NAME);
//var_dump($db);
if(!$db){
    echo 'проблема при подключении'. mysqli_connect_errno().' || '. mysqli_connect_error();
} else {
    //echo 'подключение успешное';
    $query='SELECT * FROM students';
    $result= mysqli_query($db, $query);
    if(!$result){
	echo ' результат не был получен'. mysqli_errno($db) . ' ' . mysqli_error($db);
    } else {
	   while ($row= mysqli_fetch_assoc($result)){
	//var_dump($row);
        echo '<table border="1"';
         echo '<tr>';
        foreach ($row as $key => $value){
         echo '<th>';
         echo $key;
         echo '<td>'.$value.'</td>';
         
         echo '</th>'; 
        }
        echo '</tr>';            
        echo '</table>';
    } 
    }
    //var_dump($result);
    mysqli_close($db);
}