<?php

require __DIR__.'/components/QueryBuilder.php';
//require __DIR__.'/database/Auth.php';


$db = new QueryBuilder();


$id = $_GET['id'];
//$task = $db->getTask($id);

$task = $db->getOne("tasks", $id);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1><?=$task['title']?></h1>
                <p><?=$task['content']?></p>

                <a href="/rbtodo/">Go back</a>

            </div>
        </div>
    </div>


</body>
</html>