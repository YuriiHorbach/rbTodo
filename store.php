<?php
require __DIR__.'/components/QueryBuilder.php';

$db = new QueryBuilder();

$data = [
    "title" => $_POST['title'],
    "content" => $_POST['content']
];

//$db ->addTask($data);
$db ->store("tasks", $data);

header("Location:/phpLearn/"); exit;

?>



