
<?php 

if(isset($_POST["img_submit"])){
    $file_name = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];
    $file_size = $_FILES['image']['size'];
    $file_type = $_FILES['image']['type'];
    $file_ext = pathinfo($file_name, PATHINFO_EXTENSION);
    $expensions= array("jpeg","jpg","png");
      
    if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152){
        $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"img/".$file_name);
        $success_log = "Image uploaded successfully.";
    }else{
        $error_log = $errors;
    }
}

?>