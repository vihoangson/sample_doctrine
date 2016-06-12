<?php 

$m= new ClassName;
$m->show();
/**
* 
*/
class ClassName
{
	function index(){
		require_once "bootstrap.php";
		$message = new Blog();
		$message->setText('Hello world');
		$entityManager->persist($message);
		$entityManager->flush();		
		d($message->getText());
		dd($message);
	}

	function show(){
		require_once "bootstrap.php";
		$blogs = $entityManager->getRepository('Blog')->findAll();
		foreach ($blogs as $key => $value) {
			$value->content22="3121";
		}
		$entityManager->persist($blogs);
		$entityManager->flush();
				
		dd();
	}

	
}
 ?>