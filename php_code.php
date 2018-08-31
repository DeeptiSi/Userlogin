<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'registration');

	// initialize variables
	$name = "";
	$un=$_SESSION['username'];
	$usid=mysqli_query($db,"select * from users where username='$un'"); 
	$id=mysqli_fetch_array($usid);
//	echo $id[0];
	$uid=$id[0];
	$update = false;

	if (isset($_POST['save'])) {
	echo $un;
	echo "Hi";

		$name = $_POST['name'];
		$uid=mysqli_query($db, "INSERT INTO subjects (sname,login_id) VALUES ('$name','$uid')"); 
		$_SESSION['message'] = "Data saved"; 
		echo "Data Saved";
		header('location: index.php');
	}



	if (isset($_POST['edit'])) {
	$un=$_SESSION['username'];
	echo $un;
	echo "Hello";
	$usid=mysqli_query($db,"select * from users where username='$un'"); 
	//echo $usid;	
	$id=mysqli_fetch_array($usid);
	echo $id[0];
	$uid=$id[0];
	//$id = $_POST['id'];
	$id = $_POST['name'];
	$name = $_POST['sname'];

	$q=mysqli_query($db, "UPDATE subjects SET sname='$name' WHERE sid=$id");
	$res=mysqli_num_rows($q);
	echo $res;
	if ($res>0)
	{
	$_SESSION['message'] = "Subject updated!"; 
	echo 'Subject Updated';

	}	
	else
	{
	$_SESSION['message']="Record Not Found. Cant Update";
	print 'Record Not Found. Cant Update';

	}
	header('location: index.php');
}

if (isset($_POST['upload'])) {

	$currentDir = getcwd();
    	$uploadDirectory = "/uploads/";

	$errors; // Store all foreseen and unforseen errors here

	$fileExtensions = array('jpeg','jpg','png'); // Get all the file extensions

	$fileName = $_FILES['myfile']['name'];
    	$fileSize = $_FILES['myfile']['size'];
    	$fileTmpName  = $_FILES['myfile']['tmp_name'];
    	$fileType = $_FILES['myfile']['type'];
    	$fileExtension = strtolower(end(explode('.',$fileName)));

    	$uploadPath = $currentDir . $uploadDirectory . basename($fileName); 
        if (! in_array($fileExtension,$fileExtensions)) {
            $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
        }

        if ($fileSize > 2000000) {
            $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
        }

        if (empty($errors)) {
            $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

            if ($didUpload) {
                echo "The file " . basename($fileName) . " has been uploaded";
            } else {
                echo "An error occurred somewhere. Try again or contact the admin";
            }
        } else {
            foreach ($errors as $error) {
                echo $error . "These are the errors" . "\n";
            }
        }
    
}


if (isset($_POST['del'])) {
	$un=$_SESSION['username'];
	echo $un;
	$id = $_POST['name'];


	mysqli_query($db, "DELETE from subjects WHERE sid=$id");
	$_SESSION['message'] = "Subject Deleted!"; 
	header('location: index.php');
}
