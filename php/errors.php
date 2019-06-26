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
<head>
	<title><?php echo $error ?></title>
</head>