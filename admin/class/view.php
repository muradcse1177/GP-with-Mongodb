<?php
class view_content{
	public function fn_view_content(){
		session_start();			
		if(!isset($_SESSION['login_user'])){
			header("location: index.php");
		}		
		$post_category=$_GET["category"];
		include 'phpmongodb/vendor/autoload.php';
		$conn = new MongoDB\Client;
		$gp = $conn->gp;						
		$options = ['sort' => ['category' => 1]];
		$filter=array("category"=>$post_category);
		$get_content = $gp->content->find($filter,$options);
		return $get_content;
	}
	public function fn_delete_content(){
		session_start();			
		if(!isset($_SESSION['login_user'])){
			header("location: index.php");
		}
		include 'phpmongodb/vendor/autoload.php';
		$conn = new MongoDB\Client;
		$gp = $conn->gp;
		$content=$gp->content;
		$category_del=$_GET["category"];	
		$get_category=trim(urldecode($_GET["category"]));	
		$ContentId_del=$_GET["ContentId"];
		$get_content = $gp->content->find(array("ContentId"=>$ContentId_del));
		foreach($get_content as $row){
			$id=$row["_id"];
		}
		$link_del=$_GET["link"];
		// $query = array("ContentId" => $ContentId_del);		
		// $content->remove($query);
		echo $id;
		$content->remove(array("ContentId" => new MongoId($id)), true);
		$redirect_url = "view_content.php?category_cur=".$category_del;
		header("Location: $redirect_url");					
	}
	
}

?>