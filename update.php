<?php

require __DIR__.'/components/QueryBuilder.php';
//require __DIR__.'/database/Auth.php';


$db = new QueryBuilder();
    // var_dump($_GET, $_POST);
$data =[
        'id' => $_GET['id'],
        'title' => $_POST['title'],
        'content' => $_POST['content']
    ];

$db->update("tasks", $data);
//
header("Location: /rbtodo/"); exit;
?>