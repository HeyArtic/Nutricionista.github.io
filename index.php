<?php

    session_start();
    require_once 'comentarios.php';
    $c = new Comentario("login","localhost","alisson","64315208");
    $coments = $c->buscarComentarios();
    

?>

<?php

if(!isset($_SESSION)) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Kelvia Nutri</title>
</head>

<body>
    <header>
        <nav id="navbar">
            <i class="fa-solid fa-sun" id="nav_logo">Kelvia Rocha</i>
                <?php
            if (isset($_SESSION['id_master']))
            { ?>
            <ul id="nav_list">
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Depoimentos</a>
                </li>
                <li class="nav-item">
                    <a href="addarquivos.php">Enviar arquivos</a>
                </li>
                <li class="nav-item">
                    <a href="assets/login/signup.php">Registrar paciente</a>
                </li>
                </ul>
                <button class="btn-default" ><a href="assets/login/logout.php">Sair</a></button>
            <?php
        }else
        { ?>
                      <?php
                    if (isset($_SESSION['id_usuario']))
                    { ?>
                    <ul id="nav_list">
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Depoimentos</a>
                </li>
                     <li class="nav-item">
                    <a href="dieta.php">Dieta</a>
                </li>
                </ul>
                <button class="btn-default" ><a href="assets/login/logout.php">Sair</a></button>
                <?php
        }else
        { ?>
        <ul id="nav_list">
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Depoimentos</a>
                </ul>
                <button class="btn-default" ><a href="assets/login/login-ix.php">Entrar</a></button>
            <?php
        }
        
        
    }
        ?>
            <button id="mobile_btn">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>

       <div id="mobile_menu">
        <?php
            if (isset($_SESSION['id_master']))
            { ?>
               <ul id="mobile_nav_list">
                
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Depoimentos</a>
                </li>
                <li class="nav-item">
                    <a href="addarquivos.php">Enviar arquivos</a>
                </li>
                <li class="nav-item">
                    <a href="assets/login/signup.php">Registrar paciente</a>
                </li>
                </ul>
                <button class="btn-default" ><a href="assets/login/logout.php">Sair</a></button>
            <?php
        }else
        { ?>
         <?php
                    if (isset($_SESSION['id_usuario']))
                    { ?>
           <ul id="mobile_nav_list">
                
                <li class="nav-item active">
                    <a href="#home">Início</a>
                </li>
                <li class="nav-item">
                    <a href="#menu">Serviços</a>
                </li>
                <li class="nav-item">
                    <a href="#testimonials">Depoimentos</a>
                </li>
                     <li class="nav-item">
                    <a href="dieta.php">Dieta</a>
                </li>
                </ul>
                <button class="btn-default" ><a href="assets/login/logout.php">Sair</a></button>
                <?php
        }else
        { ?>
        <ul id="mobile_nav_list">
                
                <li class="nav-item active">
                        <a href="#home">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="#menu">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a href="#testimonials">Depoimentos</a>
                    </li>
                </ul>
    
                <button class="btn-default" ><a href="assets/login/logout.php">Entrar</a></button>
                    </ul>
                          <?php
        }
    }
        ?>
                    
        </div>
    </header>

    <main id="content">
        <section id="home">
            <div class="shape"></div>
            <div id="cta">
                           <?php
                if (isset($_SESSION['id_master']) || isset($_SESSION['id_usuario']))
                { ?>
                <h1 class="title">
                    Seja bem vindo!
                    <span>
                        <?php echo $_SESSION['user_name'];?>
                    </span>
                </h1>
                <?php     
                }else
                { ?>
                <h1 class="title">
                     Seja bem vindo!
                </h1>
                <?php }
                ?>
                <p class="description">
                    One Piece é uma série de anime e manga sobre as aventuras de Monkey D. Luffy, um jovem que ganha
                    poderes de borracha depois de comer uma fruta do diabo. Luffy e os seus amigos, os Piratas de Chapéu
                    de Palha, procuram o One Piece, um tesouro inimaginável que pertenceu a Joy Boy durante o Século
                    Perdido e que se diz..
                </p>

                <div id="cta_buttons">
                    <a href="#containerr" class="btn-default">
                        Agende sua Consulta
                    </a>
                </div>
            </div>

            <div id="banner">
                <img src="assets/img/nutri2.png" alt="">
            </div>
        </section>

        <section id="menu">
            <h3 class="section-subtitle">Conheça meus serviços</h3>

            <div id="dishes">
                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <h3 class="dish-title">Emagrecimento </h3>

                    <span class="dish-description">
                        One Piece é uma série de anime e manga sobre as aventuras de Monkey D. Luffy, um jovem que ganha
                        poderes de borracha depois de comer uma fruta do diabo. Luffy e os seus amigos, os Piratas de
                        Chapéu
                        de Palha, proc
                    </span>
                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <h3 class="dish-title">Ganho de massa muscular</h3>

                    <span class="dish-description">
                        One Piece é uma série de anime e manga sobre as aventuras de Monkey D. Luffy, um jovem que ganha
                        poderes de borracha depois de comer uma fruta do diabo. Luffy e os seus amigos, os Piratas de
                        Chapéu
                        de Palha, proc
                    </span>
                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <h3 class="dish-title">Elaboração de Dietas</h3>

                    <span class="dish-description">
                        One Piece é uma série de anime e manga sobre as aventuras de Monkey D. Luffy, um jovem que ganha
                        poderes de borracha depois de comer uma fruta do diabo. Luffy e os seus amigos, os Piratas de
                        Chapéu
                        de Palha, proc
                    </span>
                </div>

                <div class="dish">
                    <div class="dish-heart">
                        <i class="fa-solid fa-star"></i>
                    </div>

                    <h3 class="dish-title">Avaliação Nutricional</h3>

                    <span class="dish-description">
                        One Piece é uma série de anime e manga sobre as aventuras de Monkey D. Luffy, um jovem que ganha
                        poderes de borracha depois de comer uma fruta do diabo. Luffy e os seus amigos, os Piratas de
                        Chapéu
                        de Palha, proc
                    </span>
                </div>
            </div>
            </div>
        </section>
        <section id=containerr> </section>
        <section class="form-container">
        <div class="containerr">
        <form class="form" action="https://formsubmit.co/kelviarocha848@gmail.com" method="POST">
                <h1>Agente sua consulta</h1>
                <p>Preencha o formulário abaixo e entraremos em contato com você</p>
                <div class="input-single">
                    <input class="input" type="text" id="nome" name="nome" required autocomplete="off">
                    <label for="nome">Seu nome completo</label>
                </div>
                <div class="input-single">
                    <input class="input" type="email" id="email" name="email" required autocomplete="off">
                    <label for="email">Seu e-mail</label>
                </div>
                <div class="input-single">
                    <input class="input" type="text" id="telefone" name="telefone" required autocomplete="off">
                    <label for="telefone">Seu telefone</label>
                </div>
                <div class="input-single">
                    <input class="input" type="text" id="endereço" name="endereço" required autocomplete="off">
                    <label for="endereço">Endereço (Rua, número, bairro)</label>
                </div>
                <div class="input-singlee">
                <label for="dia"><b>Dia Sugerido:</b></label>
                <input type="date" name="dia" id="dia" required>
                </div>
            
                <div class="btn"><input type="submit" value="Enviar"></div>
                
            </form>
        </div><!--container-->
    </section>


        <section id="testimonials">
        <?php
          if (isset($_SESSION['id_master']) || isset($_SESSION['id_usuario']))
        { ?>
        <form class="com" method="POST">
            <textarea name="texto" placeholder="Deixe seu comentário"></textarea>
            <input type="submit" value="Compartilhar">
            </div>
<?php  }
        ?>

            <div id="testimonials_content">
                <h2 class="section-title">
                    Depoimentos
                </h2>
                <h3 class="section-subtitle">
                    Quem conhece indica!
                </h3>
                <?php
       if(count($coments) > 0)
          {
            foreach ($coments as $v)
            { ?>
            
                <div id="feedbacks">
                    <div class="feedback">
                        <img src="assets/img/perfil.png" class="feedback-avatar" alt="">

                        <div class="feedback-content">
                            <p><?php echo $v['nome_pessoa']; ?>
                                <h4>
                            <?php
                    if (isset($_SESSION['id_usuario']))
                    {
                        if($_SESSION['id_usuario'] == $v['fk_id_usuario'])
                        { ?>
                        <a href="index.php?id_exc=<?php echo $v['id'];?>">Excluir</a>                   
             <?php      }
                    }elseif (isset($_SESSION['id_master']))
                        {  ?>
                         <a href="index.php?id_exc=<?php echo $v['id'];?>">Excluir</a>
             <?php         } ?> 
                        
                     
                        </h4>
                                <p>
                                <span>
                                    
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </span>
                            </p>
                            <p><?php echo $v['comentarios']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                
        <?php    }
          }else
          {
            ?>
            <?php 
    echo "";
}
?>
            </div>
            </form>
        </section>
    </main>

    <footer>
        <img src="assets/img/wave.svg" alt="">

        <div id="footer_items">
            <span id="copyright">
                &copy 2024 Alisson Abreu
            </span>
    </footer>
    <script src="scriptx.js"></script>
</body>
        
</html>
<?php
if (isset($_GET['id_exc']))
{
    $id_e = addslashes($_GET['id_exc']);
    if(isset($_SESSION['id_master']))
    {
      
        $c->excluirComentario($id_e,$_SESSION['id_master']);
    }elseif (isset($_SESSION['id_usuario']))
{
    $c->excluirComentario($id_e,$_SESSION['id_usuario']);

}
 echo "<script> window.location.href='index.php';</script>";
}

?>
<?php

if(isset($_POST['texto']))
{
    $texto = addslashes($_POST['texto']);
    if (isset($_SESSION['id_master']))
    {
        $c->inserirComentario($_SESSION['id_master'], $texto);
    }elseif (isset($_SESSION['id_usuario']))
    {
    $c->inserirComentario($_SESSION['id_usuario'], $texto);
}
echo "<script> window.location.href='index.php';</script>";
}
?>
                