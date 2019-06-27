<?php 
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
?>
<?php  if (count($errors) > 0) : ?>
  <div>
  	<?php foreach ($errors as $error) : ?>
  	  <p><?php echo $error ?></p>
  	<?php endforeach ?>
  </div>
<?php  endif ?>
<<<<<<< HEAD
=======
<head>
	<title><?php echo $error ?></title>
</head>
>>>>>>> 1cb27bf6f525e22c3f35d0cbefe921f7b7a4e3e5
