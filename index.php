<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=".\bootstrap-4.3.1-dist\css\bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container py-3">
        <div class="jumbotron">
            liste des etudiants
        </div>
            <table class="table table-primary">
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>E-mail</th>
                    <th>Phone</th>
                </tr>
                <?php
                    include 'dbconnexion.php';
                    $req = $dbstds->prepare('SELECT * FROM students');
                    $req->execute();
                    while($data = $req->fetch())
                    {
                        echo '<tr>';
                        echo '<td>'.$data['id'].'</td>';
                        echo '<td>'.$data['firstname'].'</td>';
                        echo '<td>'.$data['lastname'].'</td>';
                        echo '<td>'.$data['email'].'</td>';
                        echo '<td>'.$data['phone'].'</td>';
                        echo '<td> <a href="edit.php?id='.$data['id'].'" class="btn btn-outline-success">Edit</a><a href="delete.php?id='.$data['id'].'" class="btn btn-danger">Delete</a></td>';
                        echo '</tr>';
                    };
                ?>
            </table>
            
            <a href="create.php" class="btn btn-outline-success">Add student</a>
    </div>
</body>
</html>