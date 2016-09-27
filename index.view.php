<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<ul>	
  <?php foreach ($dados as $dado): ?>

  	<li> 
		<?= $dado->created_at ?>  	
	</li>
  <?php endforeach; ?>

</ul>

</body>
</html>