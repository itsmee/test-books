<?php

require(__DIR__ . '/autoload.php');

// Search request example.
$_GET = array(
	'filters' => array(
		'isbn' => '123',
		'author' => 'Alice McLarren',
		'date' => array(
			'from' => '1981-01-01',
			'to' => '2012-01-01'
		)
	),
	'order' => array('title', 'asc')
);

try {
	$controller = new \Books\Controller\Book\Search($_GET);
	$controller->execute();	
}
catch (\Exception $e)
{
	// TODO: smart handler should be added here.
	echo $e->getMessage();
}