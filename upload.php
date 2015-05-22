<?php
print_r($_POST);
print_r($_FILES);
/*
foreach ($_FILES["fileToUpload"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["fileToUpload"]["name"][$key];
        move_uploaded_file( $_FILES["fileToUpload"]["tmp_name"][$key], "uploads/" . $_FILES['fileToUpload']['name'][$key]);
    }
}
*/
