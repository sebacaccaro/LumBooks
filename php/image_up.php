<?php
print_r($_FILES);
$target_dir = "../immagini_libri/";
$file = $_FILES['fileToUpload']['name'];
$target_file = $target_dir . $file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        throw new Exception("Il file non è un'immagine");
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    throw new Exception("Il file esiste già");
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1500000) {
    throw new Exception("Il file è troppo grande!");
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    throw new Exception("Siamo spiacenti, puoi caricare solo PNG, JPG, GIF e JPEG");
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    throw new Exception("C'è stato un errore, il tuo file non è stato caricato");
// if everything is ok, try to upload file
} else {
    if (!(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir.$md5.".".$imageFileType))) {
        throw new Exception("C'è stato un errore, il tuo file non è stato caricato");
    }
}
?>