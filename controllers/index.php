<?php 

$dados = $query->selectAll('quiz');

//dd($dados);


require 'views/index.view.php';