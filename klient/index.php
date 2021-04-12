<?php
session_start();

if(isset($_SESSION['user'])){
    if((time() - $_SESSION['time_start_login']) > 18000){
        header("location: logout.php");
    } else {
        header("location: klient.php");
    }
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Day Vahe - klient</title>
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="login-form-container">
    <div class="card login-form">
        <div class="card-body">

            <h3 class="card-title text-center font-weight-bold">Panel logowania</h3>
            <div class="card-text">
                <form action="login.php" method="post">
                    <div class="form-group">
                        <label for="inputUserName">Nazwa użytkownika: </label>
                        <input type="text" name="login" class="form-control form-control-sm text-muted" placeholder="Nazwa użytkownika"/>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Hasło: </label>
                        <input type="password" name="password" class="form-control form-control-sm text-muted" placeholder="Hasło"/>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Zaloguj</button>

                    <div class="sign-up">
                        <a href="../index.php">Wróć do strony głównej</a>
                    </div>
                </form>
                <div class="text-center text-danger">
                    <?php
                    if($_GET['error'] == 1){
                        echo("Błędne hasło");
                    }

                    if($_GET['error'] == 2){
                        echo("Nie znaleziono użytkownika");
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Loading Scripts -->
<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.dataTables.min.js"></script>
</body>
</html>