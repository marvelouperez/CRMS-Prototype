<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/bootstrap/application.php';?>

<?php

if ($_SESSION['account']->user_usertype != "faculty") {
    header("Location: /auth/login?error=invalidUserType");
    session_destroy();
}
?>

<?php	
	date_default_timezone_set("Etc/GMT-8");

	if(isset($_POST['upload'])){
        $paper_author = $_POST['author'];
        $paper_title = $_POST['title'];
        $paper_description = $_POST['desc'];
        $paper_pages = $_POST['pages'];
		$paper_name = $_FILES['file']['name'];
		$paper_temp = $_FILES['file']['tmp_name'];
		$paper_size = $_FILES['file']['size'];
		$paper_type = $_FILES['file']['type'];
		$date_uploaded=date("Y-m-d");
        $location = "files/".$paper_name;

        $table = `tbl_paper`;

		if($paper_size < 5242880){
			if(move_uploaded_file($paper_temp, $location)){

				try{
                    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$stmt = "INSERT INTO `tbl_paper` (`paper_author`, `paper_title`, `paper_description`, `paper_pages`, `paper_name`, `paper_type`, `date_uploaded`, `location`) 
                    VALUES ('$paper_author', '$paper_title', '$paper_description', '$paper_pages', '$paper_name', '$paper_type', '$date_uploaded', '$location') ";      
                    
                    $dbConn->exec($stmt);

				}catch(PDOException $e){
					echo $e->getMessage();
					echo '<pre>' . var_dump($e->getMessage()) . '</pre>';
            		return false;
				}
 
				$dbConn = null;
				header("Location: /oprt/facultyFiles");
			}
		}else{
			echo "<center><h3 class='text-danger'>File too large to upload!</h3></center>";
		}
	}
    exit();
	
?>


<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/public/include/header.php'; ?>

<div class="container vh-100" style="margin-top: 30px">
    <form method="POST" enctype="multipart/form-data" action="/oprt/studentUpload">
        <h1 style="margin-bottom: 30px"><b>Upload Files</b></h1>
        <div class="mb-3">
            <label class="form-label"><b>Research Title</b></label>
            <input name="title" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label"><b>Author</b></label>
            <input name="author" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label"><b>Description</b></label>
            <input name="desc" type="text" class="form-control">
        </div>
        <div class="mb-3">
            <label class="form-label"><b>Pages</b></label>
            <input name="pages" type="text" class="form-control" style="width: 100px">
        </div>


        <div class="mb-3">
            <label for="formFileMultiple" class="form-label"><b>Upload Files Here</b>("Dont use special characters in the file name (eg. #,!,-,/,;)")</label>
            <input name="file" type="file" required="required" class="form-control" multiple style="width: 500px">
        </div>
        <button name="upload" class="btn btn-primary">Upload</button>
    </form>
</div>