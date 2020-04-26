<?php
if(!session_status()){
    session_start();
}

require __DIR__.'/components/QueryBuilder.php';
require __DIR__.'/database/Auth.php';


$db = new QueryBuilder($db);




$auth = new Auth($db);
$auth->register('rrffffrm@tra.v111111gfgg111111o', '22222');

$auth->login('rrffffrm@tra.v111111gfgg111111o', '22222');

$tasks =$db->all('tasks');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <a href="/login">Login</a>
            <div class="col-md-12">
                <h1>All tasks</h1>
                <a href="create.php" class="btn btn-success">Add Task</a>
                <table class="table">
                    <thead >
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($tasks as $task):

                        ?>

                        <tr>
                            <td><?=$task['id'];?></td>
                            <td><?=$task['title'];?></td>
                            <td>
                                <a href="show.php?id=<?=$task['id'];?>" class = "btn btn-info">Show</a>
                                <a href="edit.php?id=<?=$task['id'];?>" class = "btn btn-warning">Edit</a>
                                <a href="delete.php?id=<?=$task['id'];?>" class = "btn btn-danger" >Delete</a>
                            </td>
                        </tr>
                    <?php endforeach;?>

                    </tbody>

                </table>
            </div>
        </div>
    </div>


</body>
</html>