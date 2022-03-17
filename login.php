<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/loginpage.css">
    <title>Login Page</title>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center bg-secondary" style="min-height: 100vh">
        <div class="card" style="width: 18rem">
            <div class="card-header text-center">
                Welcome to SKADIK 501
            </div>
            <form action="proses-login.php" method="POST">
                <div class="card-body d-grid">
                    <p>USERNAME</p>
                    <input type="text" name="username" required />
                    <p class="pt-3">PASSWORD</p>
                    <input type="password" name="passwd" required />
                    <div class="pt-3 d-grid">
                        <input type="submit" class="btn btn-primary" name="submit" value="Login" />
                    </div>
                </div>
            </form>

        </div>
    </div>

    <script src="js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>