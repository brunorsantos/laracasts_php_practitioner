<?php require 'partials/head.php' ?>


<h1>coisas: </h1>
<ul>	


  <?php foreach ($dados as $dado): ?>

  	<li> 
		<?= $dado->created_at ?>  	
	</li>
  <?php endforeach; ?>

</ul>


<?php require 'partials/footer.php' ?>