<?php
    require_once "../vendor/autoload.php";

    use App\classes\Portfolio;

    $message='';
    if(isset($_POST['btn'])){

        Portfolio::adminLoginCheck($_POST);
    }


?>


<!Doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin panel</title>
    <link rel="stylesheet" href="../portfolio/css/bootstrap.css">
</head>
<body>
    <div class="container" style="margin-top: 200px">
        <div class="col-lg-6 m-auto">
            <div class="card">
                <div class="card-body">
                    <h3><?php echo $message ?></h3>
                        <div class="card-title">
                            <h4 class="text-center"><i>Admin Panel</i></h4>
                        </div>
                    <form method="post" action="">
                        <div class="form-group row">
                            <label for="Email3" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" name="email" class="form-control" id="Email3" placeholder="admin@portfolio.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Password3" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" name="password" class="form-control" id="Password3" placeholder="123456">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-3 col-form-label"></label>
                            <div class="col-sm-9">
                                <button type="submit" name="btn" class="btn btn-primary btn-block">Sign in</button>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>
</html>