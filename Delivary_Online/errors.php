<?php include('server.php')?>
<?php if(count($errors) > 0); ?>
<div>
	<?php foreach($errors as $error) : ?>
	alert"<P><?php echo $error; ?></p>";
	<?php endforeach  ?>
	</div>

<?php T_ENDIF ?>