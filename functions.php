<?php


// function connectToDb(){
//     try {
//         return new PDO('mysql:host=localhost;dbname=mytodo', 'root', '');
//     } catch(PDOexception $e) {
//         die('ERROR');
//     }
// }

// function fetchAllTasks($pdo){

//     $statement = $pdo->prepare('select * from todos');

//     $statement->execute();

//     return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

// }


function dd ( $val ) {

    echo '<pre>';
    die(var_dump($val));
    echo '</pre>';

}
