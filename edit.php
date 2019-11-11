<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href=".\bootstrap-4.3.1-dist\css\bootstrap.css">
    <script src=".\bootstrap-4.3.1-dist\js\bootstrap.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include 'dbconnexion.php';
    $req=$dbstds->prepare('SELECT * FROM students where id= :param_id');
    $req->bindParam(':param_id',$_GET['id']);
    $req->execute();
    $data=$req->fetch();

    ?>
    <div class="container">
        <fieldset>
            <legend>modify Student</legend>
            <form action="update.php" method="post">
                <div class="form-group">
                    <label for="fn">First Name</label>
                    <input type="text" class="form-control" name="firstname" value="<?=$data['firstname']?>">
                </div>
                <div class="form-group">
                    <label for="ln">Last Name</label>
                    <input type="text" class="form-control" name="lastname" value="<?=$data['lastname']?>">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" name="email" value="<?=$data['email']?>">
                </div>
                <div class="form-group">
                    <label for="ph">Phone</label>
                    <input type="text" class="form-control" name="phone" value="<?=$data['tel']?>">
                </div>
                <input type="number" name="id" id='id' value="<?=$_GET['id']?>" hidden>
                <button type="submit" class="btn btn-outline-success">Change</button>
            </form>
        </fieldset>
    </div>
</body>
</html>