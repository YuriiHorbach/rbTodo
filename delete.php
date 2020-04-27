<?php

require __DIR__.'/components/QueryBuilder.php';
//require __DIR__.'/database/Auth.php';


$db = new QueryBuilder();

$id = $_GET['id'];

$db->delete('tasks', $id);

header("Location: /");
?>