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
		dd($entityManager->getRepository('Blog')->findAll());
	}

	
}
 ?>