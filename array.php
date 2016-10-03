<?php 

/**
* 
*/
class Post
{
	
	public $title;

	public $autor;

	public $published;


	public function __construct($title,$autor,$published)
	{
		$this->title = $title;

		$this->autor = $autor;

		$this->published = $published;
	}
}





$posts = [
	new Post('Post1', 'Author1', true),
	new Post('Post2', 'Author2', true),
	new Post('Post3', 'Author3', false)
];

//array filter, itera no array e retorna um array apenas com o elementos em que o retorno for true; 
$unpublishedPosts = array_filter($posts,function($post) 
{
    return ! $post->published;
});


//array map itera no array e altera o item do array de acordo com o retorno do closure
$modified = array_map(function($post)
{
	return ['title' => $post->title];
}, $posts);


// Array column um array apenas com a coluna em que a chave é passada como parametro. Sendo que pode ser passado um atrituto publico do objeto no array.
$titles =  array_column($posts,'title');


// Pode ser usar tambem, um terceiro paramtro que define uma chave para este array
$titles =  array_column($posts,'title','autor');

 var_dump($titles);
