    <div class="select">
        <label>Categoría:</label>
            <select name="categoria" value="">
                <?php 
                $selected = $datos['id_categorias'];
                $q = "select * from categorias";
                $res=ejecutar($q);
                while ($r=mysqli_fetch_array($res)){
                ?>
                <option value="<?php echo $r['id_categorias'];?>"  <?php if ($selected == $r['id_categorias']) {  echo ("selected"); } ?>   > <?php echo $r['nombre'];?></option>
                <?php } ?>
        </select>
    </div>