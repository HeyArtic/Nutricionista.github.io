<?php 
include ('assets/login/protect.php');
?>

<html>

    <body>
    <?php
             if(isset($_POST['acao'])){
               $arquivo = $_FILES['file'];
               $arquivoNovo = explode('.',$arquivo['name']);
               if($arquivoNovo[sizeof($arquivoNovo)-1] != 'pdf'){
                    die('Voce não pode colocar esse tipo de arquivo');
               }else{
                    echo 'Arquivo colocado com sucesso!';
                    move_uploaded_file($arquivo['tmp_name'], 'pdf/'.$arquivo['name']);
               }
          }
          ?>
          <form action="" method="post" enctype="multipart/form-data">
               <input type="file" name="file" />
               <input type="submit" name="acao" volue="Enviar"/>
     </form>
        </body>
        </html>