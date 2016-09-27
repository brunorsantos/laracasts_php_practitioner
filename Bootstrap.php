<?php 


require 'database/Connection.php';

require 'database/QueryBuilder.php';

require 'functions.php';


// $a = Connection::make();
return new QueryBuilder(
	Connection::make()
);