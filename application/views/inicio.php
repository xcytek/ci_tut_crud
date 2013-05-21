<?php 
if( isset($persona_actualizar) ){
    $id = '<p><input type="hidden" name="id" value="'.$this->uri->segment(3).'"></p>';
    $nombre = $persona_actualizar->nombre;
    $edad = $persona_actualizar->edad;
    $email = $persona_actualizar->email;
    $pais = $persona_actualizar->pais;        
    $accion = 'actualizar';
}
else{
    $id = '';
    $nombre = '';
    $edad = '';
    $email = '';
    $pais = '';
    $accion = 'insertar';
}
?>
	<header>Tutorial CRUD</header>
	<section id="parrafo">
    	<form action="<?php echo base_url(); ?>index.php/tutorial/<?php echo $accion; ?>" method="post">
            <?php echo $id; ?>
    		<p><label>Nombre:</label> <input type="text" name="nombre" value="<?php echo $nombre; ?>" /></p>
    		<p><label>Edad:</label> <input type="text" name="edad" value="<?php echo $edad; ?>" /></p>
    		<p><label>Email:</label> <input type="text" name="email" value="<?php echo $email; ?>" /></p>
    		<p><label>Pais:</label> <input type="text" name="pais" value="<?php echo $pais; ?>" /></p>
    		<p><input type="submit" name="guardar" value="Guardar" /></p>
    	</form>


        <?php if (count($personas) > 0 ): ?>
            <?php foreach($personas as $persona) : ?>
            <article>
                <p class="nombre" ><?php echo $persona->nombre; ?></p>
                <p class="edad" ><?php echo $persona->edad; ?> años</p>
                <p class="email" ><?php echo $persona->email; ?></p>
                <p class="pais" ><?php echo $persona->pais; ?></p>
                <p><a href="<?php echo base_url(); ?>index.php/tutorial/index/<?php echo $persona->id; ?>">modificar<a/></p>
                <p><a href="<?php echo base_url(); ?>index.php/tutorial/eliminar/<?php echo $persona->id; ?>">eliminar<a/></p>
            </article>
            <?php endforeach; ?>
        <?php else :?>
            <h2>No hay registros</h2>
        <?php endif; ?>

    </section>
</body>
