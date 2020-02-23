<?php 

class Tblproductos_model{

    private $bd;
    private $tblproductos;

    public function __construct(){
    
        $this->bd=Conexion::getConexion();
        $this->tblproductos =array();

    }

    public function insertProductos($dato){
      $idcategoria= $dato['idcategoria'];
      $nombre= $dato['nombreproducto'];
      $precio= $dato['precio'];
      $consulta = "INSERT INTO tblproductoss (idcategoria,nombre,precio) VALUES ($idcategoria, '$nombre',$precio)";
      mysqli_query($this->bd, $consulta) or die ("Error al guardar el producto.");
    }

    public function consultarProductos(){

        $consulta=$this->bd->query("SELECT p.id, c.nombre AS 'categoria',p.nombre, p.precio from tblproductoss p inner join tblcategorias c on p.
        idcategoria = c.id;");
        while($fila=$consulta->fetch_assoc()){
            $this->tblproductos[]=$fila;  
        }
        return  $this->tblproductos; 



    }

}


?>