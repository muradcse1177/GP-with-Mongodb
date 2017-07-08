<?php
if(isset($_GET['servicekey']) && isset($_GET['transactionDate']) && isset($_GET['referenceCode'])){
	$servicekey=$_GET['servicekey'];
	$transactionDate=$_GET['transactionDate'];
	$referenceCode=$_GET['referenceCode'];
	header("Location: http://localhost/gp/class/msisdn.php?statusCode=200&referenceCode={$referenceCode}&serverReferenceCode=111&endUserId=01929877307");
}
?>