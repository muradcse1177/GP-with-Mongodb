<?php
class upload{
	
	public function upload(){
		session_start();
		// if(isset($_SESSION['login_user'])){
			// //header("location: upload.php");
		// }
		if(!isset($_SESSION['login_user'])){
			header("location: index.php");
		}
		$usernam=$_SESSION['login_user'];
		include 'phpmongodb/vendor/autoload.php';
		$conn = new MongoDB\Client;
		$gp=$conn->gp;
		$user=$gp->user->find(array("username" => $usernam)); 
		foreach($user as $row){
			$fullname=$row['name']; 	 	  
		}
		$msg = "You have uploaded the content successfully.";
		if(isset($_POST['category']) and isset($_POST['subcategory']) and isset($_POST['name'])){
			$category = $_POST['category'];
			$subcategory=$_POST['subcategory'];		
			$name =$_POST['name'];
			$username=$_SESSION['login_user'];
			$status="Published";
			$content_id = $this->getRandomHex(15);
			//$content_id=155656522;
			$pre_directory="main";
			if(!is_dir($pre_directory)){
				mkdir($pre_directory);			
			}
			$pre_directory.="/{$category}";
			if(!is_dir($pre_directory)){
				mkdir($pre_directory);
			}
			$pre_directory.="/{$subcategory}";
			if(!is_dir($pre_directory))
				mkdir($pre_directory);
			
			$pre_directory="../../demo";
			if(!is_dir($pre_directory)){
				mkdir($pre_directory);			
			}
			$pre_directory.="/{$category}";
			if(!is_dir($pre_directory)){
				mkdir($pre_directory);
			}
			$pre_directory.="/{$subcategory}";
			if(!is_dir($pre_directory)){
				mkdir($pre_directory);
			}
			$link_preview="../../demo/{$category}/{$subcategory}/".$content_id.substr($_FILES['file_preview']['name'],-4);
			move_uploaded_file($_FILES['file_preview']['tmp_name'], $link_preview);
		
			$file_link="main/{$category}/{$subcategory}/".$content_id.$_FILES['file']['name'];
			move_uploaded_file($_FILES['file']['tmp_name'], $file_link);
			$file_link="./upload/main/{$category}/{$subcategory}/".$content_id.$_FILES['file']['name'];
			
			date_default_timezone_set('Asia/Dhaka');
			$content = $gp->content;
			$document = (array(
							"name" => $name,
							"category" => $category,
							"subcategory" => $subcategory,
							"file_link" => $file_link,
							"link_preview" => $link_preview,
							"ContentId" => $content_id,
							"downloaded" => "string",
							"upload_by" => $fullname,
							"upload_time" => date("Y-m-d H:i:s"),
							"status" => "Published"
						)	
					);
			$content->insertOne($document);
			return array($fullname, $msg);
		}
	}
	public function getRandomHex($num_bytes=4) {
		return bin2hex(openssl_random_pseudo_bytes($num_bytes));
	}
}	
?>