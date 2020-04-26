<?php

require __DIR__.'/components/QueryBuilder.php';
//require __DIR__.'/database/Auth.php';



$db = new QueryBuilder();


    $id = $_GET['id'];
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
                <h1>Edit task</h1>
                <form action="update.php?id=<?=$task['id'];?>" method="post">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" value="<?=$task['title'];?>">
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control"><?=$task['content'];?></textarea>

                    </div>
                    <button class="btn btn-warning" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>


</body>
</html>