<header class="fixed-top">
    <nav class="topo-instagram">
        <div class="container pt-3 pb-2">
            <div class="row justify-content-between align-middle">
                <div class="col-4 instagram">
                    <a href="posts"><img src="views/img/instagram-logo.svg" width="30" height="30" class="d-inline-block align-center pb-1" alt=""> Fake Instagram
                    </a>
                </div>
                <div class="col-6 text-right pt-2">
                    <?php if(empty($_SESSION['username'])) { ?>
                        <a href="/DH_fakeInstagram/new-user" class="mr-2">Cadastre-se</a>|  
                        <a href="/DH_fakeInstagram/login" class="ml-2">Login</a> 
                    <?php } else { ?>
                        <img src="views/img/user.jpg" width="25">    
                        <a class="mr-2"><?php echo $_SESSION['username']?></a>|                          
                        <a href="/DH_fakeInstagram/logout" class="ml-2">Sair</a>    
                    <?php } ?>    

                </div>
            </div>
        </div>
    </nav>
</header>


