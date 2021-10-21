		<article>
			<h2 class="titulo">Error</h2>
			<br>
			<p class="extracto">Error de conexion</p>
		</article>
<?php require 'header.php'; ?>
<?php require 'footer.php'; 

echo "<script> 
window.alert('No se conecto a la base de datos');
</script>;
";

?>
