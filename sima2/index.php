
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="google-signin-client_id" content="191497136417-4cjnsdfdju6kbllci4fukqdhpoucbfkj.apps.googleusercontent.com">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/LOGIN.css">
    <link rel="stylesheet" href="./CSS/login-min.css">

    <!--scripts-->
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="assets/js/signin.js"></script>
    <script src="JS/jquery-3.6.0.min.js"></script>


    <title>S.I.M.A</title>
    
</head>
<body>
    <div class="container w-50 bg-secondary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white p-5 rounded-end usuario">
                <div class="text-end">
                    <img src="./IMAGES/sima logo.jpeg" width="50"alt="">
                </div>
                <h2 class="fw-bold text-center pt-5 py-5">Bienvenido a <br>S.G.A</h2>

                <!--login-->
                <form action="controlador/sesion.php" method="post">
                    <div class="mb-4">
                        <label for="user-name" class="
                        form-label">nombre de usuario</label>
                        <input type="text" class="form-control" name="user-name"required>
                    </div>
                    <div class="mb-4"> <label for="password" class="
                        form-label">password</label>
                        <input type="password" class="form-control" name="password"required></div>
                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-primary"name="iniciar">iniciar sesion</button>
                        <div  class="g-signin2" data-onsuccess="onSignIn"></div><br>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>