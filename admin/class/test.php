<?php
// phpinfo();
// require 'vendor/autoload.php';

// $client = new MongoDB\Client("mongodb://localhost:27017");
// $collection = $client->gp->content;
// $update = array("status" => "Published");
// $collection->update(
		// array("name" => "murad"),
		// array('$set' => $update),
		// array("upsert" => true)
	// );
// var_dump($collection->findOne());
		$client = new MongoClient();//DB\Client("mongodb://localhost:27017");
$collection = $client->gp->content;
var_dump($collection->findOne());
?>
