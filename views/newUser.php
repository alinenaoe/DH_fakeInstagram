<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastrar novo usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body class="bg-light">
    
    <main class="row justify-content-center">
        <div class="card col-3 mt-3 ">
            <div class="card-body">
            <h1 class="text-center">Instagram</h1>
            <h5 class="card-title text-center"> Cadastre-se para ver fotos e vídeos dos seus amigos. </h5>
            <form action="/DH_fakeInstagram/registerUser" method="POST" enctype="multipart/form-data">

                <div class="form-group">
                    <input type="text" class="form-control bg-light" id="username" name="username" placeholder="Nome de usuário" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control bg-light" id="userpassword" name="userpassword" placeholder="Senha" required>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Selecione uma foto para o seu perfil</label>
                    <input type="file" class="form-control-file" name="profileimg" id="exampleFormControlFile1" required>
                </div>

                <button type="submit" class="btn btn-primary w-100">Cadastre-se</button>

                <p class="text-center">Ao se cadastrar, você concorda com nossos Termos, Política de Dados e Política de Cookies.</p>
            </form>
            </div>
        </div>

    </main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>