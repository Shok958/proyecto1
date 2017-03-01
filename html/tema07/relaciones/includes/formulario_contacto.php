<form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
    <input type="hidden" name="id_contacto" <?php recuperar_campo("id_contacto", $contacto) ?>>
    <p>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre"
           <?php
            recuperar_campo("nombre",$contacto);
           ?>
        >
    </p>
    <p>
        <label for="email">Email</label>
        <input type="email" name="email"
           <?php
            recuperar_campo("email",$contacto);
           ?>
        >
    </p>
    <p>
        <label for="direccion">Dirección</label>
        <textarea name="direccion" cols="18" rows="4">
            <?php recuperar_campo_textarea("direccion",$contacto) ?>
        </textarea>
    </p>
    <p>
        <label for="comentarios">Comentarios</label>
        <textarea name="comentarios" cols="18" rows="4">
            <?php recuperar_campo_textarea("comentarios",$contacto) ?>
        </textarea>
    </p>
    <p>
        <label for = "id_categoria">Categoria</label>
        <select name = "id_categoria">
            <option value="0">Elige una categoria...</option>
            <?php 
                $ssql = "SELECT * FROM categorias";
                $rs = mysqli_query($conexion, $ssql);

                while ($fila = mysqli_fetch_array($rs)) {
                   echo '<option ';
                   if (isset($contacto['id_categoria']) && $contacto['id_categoria'] == $fila['id_categoria']) {
                       echo 'selected ';
                   }
                   echo 'value="'.$fila['id_categoria'].'">'.$fila['nombre_categoria'].'</option>';
                }
                mysqli_free_result($rs);
             ?>
        </select>
    </p>
    <p>
        <label>
            <input type="submit" 
            <?php 
                if (isset($accion)) {
                    echo 'value="'.$accion.'"';
                }else{
                   echo  'value="Insertar"';
                }
             ?>
            >
        </label>
    </p>
</form>
