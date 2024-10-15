<?php

if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_SESSION['id_master'])) {
    die("Pagina dedicada ao administrador<p><a href=\"../../index.php\">Voltar</a></p>");
}



?>