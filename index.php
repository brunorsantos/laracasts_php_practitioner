<?php


$query = require 'Bootstrap.php';


$dados = $query->selectAll('quiz');

//dd($dados);


require 'index.view.php';
