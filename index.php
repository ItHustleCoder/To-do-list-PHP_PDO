<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/project3/css/style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">  
    <title>To-do list</title>
</head>
<body>
    <div class="container">
        <h1>To-do list</h1>
        <form action="add.php" method="POST">
            <input type="text" name="task" id="task" placeholder="Need to do.." class="form-control">
            <button type="submit" name="sendTask" class="btn btn-success">Send</button>
        </form>
       
        <?php
            require 'configDB.php';
            echo '<ul>';
            $query = $pdo->query('SELECT * FROM `tasks` ORDER BY `id` DESC');
            while($row = $query->fetch(PDO::FETCH_OBJ)) {
                echo '<li><b>'.$row->task.'</b><a href="/project3/delete.php?id='.$row->id.'"><button>DELETE</button></a></li>';
            }
            echo '</ul>';
        ?>

    </div>
   
</body>
</html>