<?php 
require_once 'header.php';

?>
<h1>Menú Categorias</h1>
<br>
<form name="form1" method="POST" action="index.php?accion=guardarCategoria">
    
<p>Nombre Categoria: <input type="text" name="txtnombre"></p>
<p><input type="submit" name="btnguardarcategoria" value="Guardar Categoria"></p>

</form>
<br>
<table>
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Modificar</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($consulta as $dato): ?>
        <tr>
            <td><?php echo $dato['id'];?></td>
            <td><?php echo $dato['nombre'];?></td>
            <td><a href="./?accion=modificarCategoria&id=<?php echo $dato['id'];?>" >Modificar</a></td>
            
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>


<br>
<br>
<br>
<a href="./">volver</a>





<?php require_once 'footer.php'; ?>