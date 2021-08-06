
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/LOGIN.css">
    <link rel="stylesheet" href="./CSS/login-min.css">
    <link rel="stylesheet" href="../../CSS/alertify.min.css" />
    <script src="../../JS/alertify.min.js"></script>

    <!--scripts-->



    <title>S.G.A</title>
    
</head>
<body>
    <div class="container w-50 bg-secondary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white p-5 rounded-end usuario">
                <div class="text-end">
                    <img src="./IMAGES/sga.png" width="50"alt="">
                </div>
                <h2 id="l"class="fw-bold text-center pt-5 py-5">Bienvenido a <br>S.G.A</h2>

                <!--login-->
                <form action="controlador/sesion.php" method="post">
                    <div class="mb-4">
                        <label id="l"for="user-name" class="
                        form-label">ingrese email</label>
                        <input type="text" class="form-control" name="user-name"required>
                    </div>
                    <div class="mb-4"> <label id="l"for="password" class="
                        form-label">password</label>
                        <input type="password" class="form-control" name="password"required></div>
                    <div class="d-grid mb-4">
                        <button type="submit" class="btn btn-primary"name="iniciar">iniciar sesion</button>
                        <div  class="g-signin2" data-onsuccess="onSignIn"></div><br>
                    </div>
                </form>
                <?php
    if(isset($_GET["login"])){
        if($_GET["login"] === "1"){
            ?>
            <script type="text/javascript">alertify.error('correo o contraseña incorrectos!');</script>
            <?php }}
?>
            </div>
        </div>
    </div>
</body>
</html>