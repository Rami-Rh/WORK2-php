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
    <div class="container">
        <fieldset>
            <legend>ADD Student</legend>
            <form action="store.php" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="fn">First Name</label>
                            <input type="text" class="form-control" name="firstname">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ln">Last Name</label>
                            <input type="text" class="form-control" name="lastname">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="ph">Phone</label>
                            <input type="text" class="form-control" name="phone">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-outline-primary">Create</button>
                <button type="reset" class="btn btn-outline-danger">Reset</button>
            </form>
        </fieldset>
    </div>
</body>
</html>