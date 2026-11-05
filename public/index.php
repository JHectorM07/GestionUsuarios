<?php 

session_start();

$controlador = $_GET['controlador'] ?? 'login';
$accion = $_GET['accion'] ?? 'index';

//Enrutador
if($controlador === 'login'){
  require_once '../app/controladores/AuthController.php';
  $auth = new AuthController();

    if($accion === 'ingresar'){
      $auth->ingresar();
    }else{
      require_once '../app/vistas/auth/login.php';
    }
}elseif($controlador === 'dashboard'){
  require_once '../app/vistas/dashboard/index.php';
}else{
  echo "Pagina no encontrada";
}

