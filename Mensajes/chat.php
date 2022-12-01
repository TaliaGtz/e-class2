<?php

    include("../PhpFks/Conexion.php");

    $consulta = "SELECT * FROM chat ORDER BY ID_Chat DESC";
    $ejecutar = $conexion->query($consulta);
    while($fila = $ejecutar->fetch_array()):
?>
    <div id="datos-chat">
        <span style="color: darkslateblue"><?php echo $fila['Nombre']; ?>: </span>
        <span><?php echo base64_decode($fila['Mensaje']) ?></span>
        <span style="float: right; color: #848484; font-weight:lighter;"><?php echo formatearFecha($fila['Fecha']); ?></span>
    </div>

<?php endwhile; ?>  