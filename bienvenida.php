<?php

//Una vez renderizamos la pestaña de bienvenida, entonces

require_once 'vendor/autoload.php';

session_start();//Iniciamos sesion

if(!isset($_SESSION['login'])){//Esto es para llamar una sola vez el archivo auth.php y par redirigir al index.php en caso de que se quiere ingresar a welcome.php sin antes logearse con google
    require_once 'auth.php';
    if($google_account_info){
        $_SESSION['login'] = $google_account_info['id'];
        $_SESSION['info_account'] = $google_account_info;
    }else{
        header('Location: /PayUTick/index.php');
    }
}

//Una vez se ha iniciado sesion, armamos el url para hacer el redireccionamiento en el index.php
$_SESSION['code'] = $_GET['code'];
$_SESSION['scope'] = $_GET['scope'];
$_SESSION['authuser'] = $_GET['authuser'];
if(isset($_GET['hd'])){
    $_SESSION['hd'] = $_GET['hd'];
}
$_SESSION['prompt'] = $_GET['prompt'];

?>

<?php include './includes/header.php'; ?>
<?php include './includes/modalSignOut.php'; ?>
<?php include './includes/modalItems.php'; ?>
<?php include './includes/sectionHeaderBienvenida.php'; ?>
<?php include './includes/footer.php'; ?>