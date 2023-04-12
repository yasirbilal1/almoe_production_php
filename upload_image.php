<?php
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // set the upload directory name and path to upload images
        $target_dir = "uploads/";
        // concatenate folder name with file name
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        // get the text details from form
        $text = $_POST['text'];
        // upload file to folder
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $file_content = file_get_contents('user_data.txt');
            $file_content .= $target_file . '|' . $text . "\n";
            file_put_contents('user_data.txt', $file_content);
            echo "Image uploaded successfully";
        } else {
            echo "Error uploading file";
        }
    }
?>
