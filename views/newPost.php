<?php
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
    <title>Nova publicação</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

</head>
<body>
    <?php include "includes/header.php"; ?>
    <main class="row justify-content-center ml-0 mr-0 mt-5">

    <div class="card col-4 p-4 mt-5">
        <div class="card-body">
            <h3 class="pb-3">Nova publicação</h3>
            <form action="/DH_fakeInstagram/send-post" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Selecione uma imagem</label>
                    <input type="file" class="form-control-file" name="img" id="exampleFormControlFile1" required>
                </div>
                <div class="form-group">
                    <label for="postText">Descrição</label>
                    <textarea class="form-control" rows="2" id="postText" name="postText" placeholder="Escreva uma legenda" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary w-100">Compartilhar</button>
            </form>
        </div>
    </div>

    </main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>