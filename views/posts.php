<?php
    //por que esse request?
    $posts = $_REQUEST['posts'];

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
    <title>fakeInstagram</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

</head>
<body>
    
    <?php include "includes/header.php"; ?>
    <main class="board">

        <?php if (!$posts) {
            echo "Ainda não há posts para serem vistos :(";
        } else {
            foreach ($posts as $post) { ?>

                <div class="card mt-5 mb-3" id="<?php echo $post->id;?>">
                    <form action="like" method="POST">          
                        <input type="hidden" value="
                            <?php session_start();
                            $_SESSION['id'] = $post->id ;
                            $_SESSION['likes'] = $post->likes;
                            ?>" >
                        <img id="cardimg" src="<?php echo $post->img; ?>" alt="Card image cap">
                    
                        <div class="card-body d-flex">
                            <a href="like" class=""><img src="views/img/heart.svg" class="mr-2"></a>              
                            <?php if ($post->likes==0) { ?>
                                <p class="card-text mb-0">
                                    <?php echo "Curtir"; ?>
                                </p>
                            <?php } elseif ($post->likes==1) {?>
                                <p class="card-text mb-0">
                                    <?php echo "1 curtida"; ?>
                                </p>
                            <?php } else {?>
                                <p class="card-text mb-0">
                                    <?php echo "$post->likes curtidas"; 
                                } ?>
                            </p>
                        </div>
                    </form>

                        <div class="card-body d-flex pt-0">
                            <p class="font-weight-bold card-text mr-2"><?php echo $post->users_username; ?></p>
                            <p class="card-text"><?php echo $post->postText;?></p>
                        </div>
                </div>
        <?php } 
        } ?>
        

        <a class="float-button text-dark postar" href="new-post"><img src="views/img/newpost.png" width="45" height="45" class="mr-2" alt="">
        Nova publicação
        </a>

    </main>
    



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>