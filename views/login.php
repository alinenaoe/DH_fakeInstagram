<?php
    //$users = $_REQUEST['users'];

    if (!isset($_SESSION)) { 
            session_start();
        };
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entrar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
</head>

<body class="bg-light">
    
    <main class="row justify-content-center ml-0 mr-0">
        <div class="card col-4 mt-3 ">
            <div class="card-body">
            <h1 class="text-center instagram">Fake Instagram</h1>
            <form action="/DH_fakeInstagram/check-user" method="POST">
                <p class="text-center">
                    <?php if(isset($_SESSION['registered'])) {
                        echo $_SESSION['registered'];
                        unset($_SESSION['registered']);
                    }
                    ?>
                </p>

                <div class="form-group mt-5">
                    <input type="text" class="form-control bg-light" id="username" name="username" placeholder="Nome de usuário" required>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control bg-light" id="userpassword" name="userpassword" placeholder="Senha" required>
                </div>
                <p class="text-center text-danger">
                    <?php if(isset($_SESSION['loginError'])) {
                        echo $_SESSION['loginError'];
                        unset($_SESSION['loginError']);
                    }
                    ?>
                </p>
                <button type="submit" class="btn btn-primary w-100">Entrar</button>
                <p class="text-center mt-3"><a href="new-user">Ainda não sou cadastrado</a></p>
            </form>
            </div>
        </div>

    </main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>