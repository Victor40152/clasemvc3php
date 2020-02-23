<?php 

require_once 'model/Tblcategorias_model.php';

class Tblcategorias_controller{

private $model_categorias;

public function __construct(){

    $this->model_categorias = new Tblcategorias_model();
}

public function menucategorias(){
    $consulta = $this->model_categorias->consultarcategorias();
    require_once 'view/menucategorias.php';
}

public function guardarCategoria(){
    $dato['nombre'] = $_POST['txtnombre'];
    $this->model_categorias->insertarcategoria($dato);
    $this->menucategorias();


}
 

}




?>