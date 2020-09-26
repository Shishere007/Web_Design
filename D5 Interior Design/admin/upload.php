<?php
if($_FILES["upload_file"]["name"] != '') {
    foreach ($_FILES["upload_file"]["name"] as $key => $file) { //use foreach
        $data = explode(".", $file);
        $extension = $data[1];
        $allowed_extension = array('jpg', 'png', 'jpeg', 'gif');
        if(in_array($extension, $allowed_extension)){
            $new_file_name = rand() . '.' . $extension;
            $path = $_POST["hidden_folder_name"] . '/' . $new_file_name;     
            if(move_uploaded_file($_FILES["upload_file"]["tmp_name"][$key], $path)){ //use key for each file to be moved
                // echo 'Image Uploaded';
            }
            else {
                echo 'unable to upload ' .$file;
            }
        }else{
            echo 'Invalid Image File - > '.$file;
        }
    }
    echo "Image upload Success";
}else{
    echo 'Please Select Image';
}
?>