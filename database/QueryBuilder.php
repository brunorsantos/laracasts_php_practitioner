<?php 	

/**
* 
*/
class QueryBuilder
{

	protected $pdo;
	
	function __construct(PDO $pdo)	
	{
		$this->pdo = $pdo;	
	}

	public function selectAll($table)		
	{
		$statement = $this->pdo->prepare('select * from ' . $table);
		//$statement = $this->pdo->prepare('select * from quiz');

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);
	}
}